<?php
	include_once('./head.sub.php');
?>
sdaf
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
<div class="wrap_menu">
	<div class="wrap__menu">
		<ul>
			<li>메뉴1</li>
			<li>메뉴2</li>
			<li>메뉴3</li>
			<li>메뉴4</li>
		</ul>
	</div>
</div>
<div id="wrap">
	<div id="left_menu">
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>
	<div id="content">
		<h2>로또 돌리기!</h2>
	
		<table>
			<tr>
				<td class="set" style="background:#FF0000"></td>
				<td class="set" style="background:#FFA01E"></td>
				<td class="set" style="background:#FAEB78"></td>
				<td class="set" style="background:#6DD66D"></td>
				<td class="set" style="background:#28A0FF"></td>
				<td class="set" style="background:#c8c8c8"></td>
				<td style="border:none; background:#fff; color:black;">+</td>
				<td class="set" style="background:#EE82EE"></td>
			</tr>
			<tr>
				<td style="border:none;" colspan="8">
					<button type='button' class="button" onclick="pushRandom()">번호생성</button>
					<button type='button' class="button" onclick="reset()">리셋</button>
				</td>
			</tr>
		</table>
	</div>
	<div id="right_menu">
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>	
</div>
<div id="footer">
	copyright@Leehyunkyu.com
</div>
</body>
</html>
