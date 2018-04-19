<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#ChaoMung{
			color: red; font-size: 4em; font-weight: bold; text-align: center; margin-top: 2em;
		}

		#ngay83{
			text-align: center;
		}

		#LoiChuc{
			color: #F600FF; margin-top: 2em; margin-left: 4em; margin-right: 4em; font-size: 2em;
		}

		img{
			display: block; margin-left: auto; margin-right: auto; padding-top: 7em; width: 70%; height: 250px;
		}
	</style>
</head>
<body background="anh.gif" style="font-size: 16px;" onload="setInterval(thayDoiMau, 1000); setInterval(chuChay, 300);">

	<div id="ChaoMung">
		<p>Happy Women's Day</p>
	</div>

	<div id="ngay83">
		<?php 
			$s1 = str_repeat("*", 26).str_repeat("&nbsp;", 64).str_repeat("*", 26)." <br>";
			$s2 = str_repeat("*", 8).str_repeat("&nbsp;", 20).str_repeat("*", 8).str_repeat("&nbsp;", 100).str_repeat("*", 8)." <br>";
			$s3 = str_repeat("*", 26).str_repeat("&nbsp;", 20).str_repeat("*", 12).str_repeat("&nbsp;", 20).str_repeat("*", 26)." <br>";

			echo str_repeat($s1, 3).str_repeat($s2, 3).str_repeat($s3, 3).str_repeat($s2, 3).str_repeat($s1, 3);
		?>
	</div>

	<div id="LoiChuc">	</div>

	<script>
		function thayDoiMau(){
			var a = document.getElementById("ngay83");
			if(a.style.color == "red") a.style.color = "orange";
			else if(a.style.color == "orange") a.style.color = "yellow";
			else if(a.style.color == "yellow") a.style.color = "blue";
			else if(a.style.color == "blue") a.style.color = "green";
			else a.style.color = "red";
		}

		var i = 0, r = "";
		function chuChay(){
			var s = "Chúc tất cả phụ nữ trên thế giới này mãi xinh đẹp, luôn là bông hoa thơm trong vườn hoa ngát hương, gặp nhiều may mắn hơn, hạnh phúc hơn, nhiều niềm vui, nhiều điều tuyệt diệu hơn trong cuộc sống.";
			
			var a = s.split(" ");

			if(i == a.length + 3) {
				i = 0; r = "";
			}

			r += a[i++] + " ";

			if(i <= a.length) document.getElementById("LoiChuc").innerHTML = r;
			else return;
		}
	</script>
</body>
</html>
