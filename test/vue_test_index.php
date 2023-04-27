<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" type="text/css" href="magicVKeypad/magicVKeypad.css">
<script data-type="module" src="magicVKeypad/magicjs_1.2.1.4.min.js"></script>
<script data-type="module" src="magicVKeypad/magicVKeypadO.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 </head>

 <body>
	<div id="root">
		<textarea :id="title1" :value="title1" readOnly="readOnly" rows="5" style="width:95%;resize:none;border:none;"></textarea>
		<hr color='green'/>
		<textarea :id="title2" :value="title2" readOnly="readOnly" rows="5" style="width:95%;resize:none;border:none;"></textarea>
		<input type="password" :id="passwd1" name="passwd" ds-kb-type="qwerty" ds-kb-focus="true" ds-kb-xy="[0, 0]"/>
		<button v-on:click="ShowKeyboard('passwd1')">Qwerty 키보드</button>
		<p></p>
		<button v-on:click="getPassword('passwd1')">비밀번호확인</button>
		<hr color='blue'/>
		<br/>
		<button v-on:click="getPassword2()">passwd2 서버 전송</button>
		<br/><br/>

		<textarea :id="title3" :value="title3" readOnly="readOnly" rows="4" style="width:95%;resize:none;border:none;"></textarea>
		<input type="password" :id="passwd2" name="passwd" ds-kb-type="number" ds-kb-focus="false" ds-kb-xy="[0, 0]"/>
		<button v-on:click="ShowKeyboard('passwd2')">Number 키보드</button>
		<p></p>
		<button v-on:click="getPassword('passwd2')">비밀번호확인</button>
		<hr color='blue'/>
		<br/>
		<button v-on:click="getPassword2()">passwd2 서버 전송</button>
		<br/><br/>
		<textarea readOnly="readOnly" rows="5" style="width:95%;resize:none;border:none;">{{logDiv}}</textarea>
	</div>   
 </body>

 <script>
 var root = new Vue({
        el: '#root',
        data: {
			title1 : "<input\nds-kb-type = '키보드타입'\nds-kb-focus = '포커스이벤트시 키보드출력'\nds-kb-xy = '키보드출력 좌표(PC)'\nds-kb-callback = '키보드엔터콜백'>",
			title2 : "<input :id='passwd1' \nds-kb-type = 'qwerty'\nds-kb-focus = 'true'\nds-kb-xy = '[0, 0]'\nds-kb-callback='getPassword'>",
			title3 : "<input :id='passwd2' \nds-kb-type = 'number'\nds-kb-focus = 'false'\nds-kb-xy = '[0, 0]'>",
			passwd1 : "passwd1",
			passwd2 : "passwd2",
			logDiv : "",
			logDiv2 : "",
        },
        methods: {
        	async OnCreate() {
				// 초기화
				ML4WebVKey.init();
			},
			async getPassword(elementId) {
				console.log(elementId);
				let result = ML4WebVKey.getDecryptedPassword(elementId);
				this.logDiv = "복호화된 입력값 : " + result;
			},
			async getPassword2() {
				let message = ML4WebVKey.getEncryptedPassword('passwd1','passwd2');	
				
				this.logDiv = "암호화된 입력값 : " + message;
				let test = MLServlet.secureAjax(ML4WebVKey.getServlet(), message);
				this.logDiv += "\n응답결과 : " + test.message; 
			},
			ShowKeyboard(elementId) {
				ML4WebVKey.showKeyboard(elementId);
			}
        },
        mounted() {
			this.OnCreate();
        }
    })
 </script> 
</html>
