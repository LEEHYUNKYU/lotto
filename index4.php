<?php
	include_once('head.sub.php');

?>

<div class="header-info">
	<div class="header-div">
		<div class="header-info_mation">
			<ul>
				<li><?=date('Y-m-d H:i:s');?></li>
				<li>로그인</li>
				<li>정보수정</li>
			</ul>
		</div>	
		<div class="logo"><a href=""><h1></h1></a></div>
	</div>
</div>
<div id="wrap">
	<div class="container">
		<div class="form-group">
			<label for="num_set">갯수</label>
			<input type="text" name="num_set" id="num_set" />
			<button type="button" class="btn btn-primary" id="numset_button">넘겨</button>
		</div>
		<div id="content"></div>
	</div>
</div>
<script>
$(function(){
	$("#numset_button").on("click",()=>{
		var temp_div = "";
		var num_set = $("#num_set").val();
		var tempdiv = document.getElementById("content");
		var i;
		
		if(num_set > 0){
		    for(i=0; i < num_set; i++){
			    console.log(num_set+" || "+tempdiv+" || "+i);
			    temp_div += 
		    	"<div id='content"+i+"'>" +
		    	"<table>" +
		    	    "<tr>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#FF0000'></td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#FFA01E'></td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#FAEB78'></td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#6DD66D'></td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#28A0FF'></td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#c8c8c8'></td>" +
		    	        "<td style='border:none; background:#fff; color:black;'>+</td>" +
		    	        "<td class='set"+i+"' id='set"+i+"' style='background:#EE82EE'></td>" +
		    	        "<td>" +
		    	            "<button type='button' class='button' onclick='pushRandom()'>번호생성</button>" +
		    	        "</td>" +
		    	        "<td>" +
		    	            "<button type='button' class='button' onclick='reset()'>리셋</button>" +
		    	        "</td>" +
		    	    "</tr>" +
		    	"</table>" +
		    	"</div><br>";
		    }
		    tempdiv.innerHTML = temp_div;
		    
		}
	});
});
</script>
<div id="footer">
	copyright@Leehyunkyu.com
</div>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<script>
function kakaoMap(...map) {
    document.write("<div id='" + "daumRoughmapContainer" + map[0] + "' class='root_daum_roughmap root_daum_roughmap_landing' style='width:100%;box-sizing:border-box'></div>");
    new daum.roughmap.Lander({
        "timestamp" : map[0], "key" : map[1], "mapWidth" : "100%",
        "mapHeight" : document.querySelector("#daumRoughmapContainer" + map[0]).offsetWidth * map[2] / 100 - 32
    }).render();
}
</script>
<div style="width:500px;margin:0 auto"><script>kakaoMap("1669736880249", "2csg4", 60);</script></div>
<div style="width:100%"><script>kakaoMap("1669739269026", "2csge", 50);</script></div>
</body>
</html>
