<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trần Quang Tân - Bài tập tuần 4</title>
</head>
<body style="font-size: 20px; font-weight: bold; margin-top: 3em; margin-left: 10em; margin-right: 10em;">
	<?php 
		function SoLonThuHai($mang)
		{
			//Trường hợp mảng rỗng hoặc chỉ có 1 phần tử thì không có số lớn thứ 2 của mảng
			if(count($mang) <= 1) return "Không tồn tại số lớn thứ hai của mảng";
			
			//Trường hợp mảng có 2 phần tử trở lên
			$max1 = $mang[0];
			$max2 = $mang[1];
			$temp = 0;

			//Đặt lại số lớn nhất là max1 và số lớn thứ 2 là max2
			if($max1 < $max2){
				$temp = $max1; $max1 = $max2; $max2 = $temp;
			}

			
			for ($i=1; $i < count($mang); $i++) { 
				if($mang[$i] > $max1) {
					$max2 = $max1;
					$max1 = $mang[$i];
				}
			}

			if($max1 == $max2) return "Không tồn tại số lớn thứ hai của mảng";
			return $max2;
		}

		function ViTriSoLonThuHai($so, $mang){
			for ($i=0; $i < count($mang); $i++) { 
				if($mang[$i] == $so){
					return $i;
				}
			}
			return -1;
		}

		echo '<h2 style="text-align: center;">BÀI TẬP TÌM SỐ LỚN THỨ HAI CỦA MẢNG</h2>';
##############################################################
		
		//Ví dụ về mảng đưa ra là rỗng
		echo "VÍ DỤ CHO MỘT MẢNG LÀ RỖNG<br>";
		$arr = array();

		echo "Cho mảng: [";
		for ($i=0; $i < count($arr); $i++) {
			if($i < count($arr) - 1){
				echo $arr[$i].", ";
			}
			else echo $arr[$i];
		}
		echo "]<br>==>";

		$soLon2 = SoLonThuHai($arr);
		if($soLon2 != "Không tồn tại số lớn thứ hai của mảng"){
			echo "Số lớn thứ hai của mảng: ".$soLon2."<br>";
			echo "Vị trí của số lớn thứ hai: ".ViTriSoLonThuHai($soLon2, $arr);
		}
		else echo $soLon2;

		echo "<hr>";		
##############################################################

		//Ví dụ về mảng đưa ra chỉ gồm 1 phần tử
		echo "VÍ DỤ CHO MỘT MẢNG GỒM 1 PHẦN TỬ<br>";
		$arr = array(1);

		echo "Cho mảng: [";
		for ($i=0; $i < count($arr); $i++) {
			if($i < count($arr) - 1){
				echo $arr[$i].", ";
			}
			else echo $arr[$i];
		}
		echo "]<br>==>";

		$soLon2 = SoLonThuHai($arr);
		if($soLon2 != "Không tồn tại số lớn thứ hai của mảng"){
			echo "Số lớn thứ hai của mảng: ".$soLon2."<br>";
			echo "==>Vị trí của số lớn thứ hai: ".ViTriSoLonThuHai($soLon2, $arr);
		}
		else echo $soLon2;

		echo "<hr>";		
##############################################################

		//Ví dụ về mảng đưa ra gồm 2 phần tử bằng nhau
		echo "VÍ DỤ CHO MỘT MẢNG GỒM CÁC PHẦN TỬ BẰNG NHAU<br>";
		$arr = array(1, 1);

		echo "Cho mảng: [";
		for ($i=0; $i < count($arr); $i++) {
			if($i < count($arr) - 1){
				echo $arr[$i].", ";
			}
			else echo $arr[$i];
		}
		echo "]<br>==>";

		$soLon2 = SoLonThuHai($arr);
		if($soLon2 != "Không tồn tại số lớn thứ hai của mảng"){
			echo "Số lớn thứ hai của mảng: ".$soLon2."<br>";
			echo "==>Vị trí của số lớn thứ hai: ".ViTriSoLonThuHai($soLon2, $arr);
		}
		else echo $soLon2;

		echo "<hr>";		
##############################################################

		//Ví dụ về mảng đưa ra gồm 2 phần tử khác nhau
		echo "VÍ DỤ CHO MỘT MẢNG GỒM CÁC PHẦN TỬ KHÁC NHAU<br>";
		$arr = array(0, 4, 2, 3, 4, 4, 5, 5, 4);

		echo "Cho mảng: [";
		for ($i=0; $i < count($arr); $i++) {
			if($i < count($arr) - 1){
				echo $arr[$i].", ";
			}
			else echo $arr[$i];
		}
		echo "]<br>==>";

		$soLon2 = SoLonThuHai($arr);
		if($soLon2 != "Không tồn tại số lớn thứ hai của mảng"){
			echo "Số lớn thứ hai của mảng: ".$soLon2."<br>";
			echo "==>Vị trí của số lớn thứ hai: ".ViTriSoLonThuHai($soLon2, $arr);
		}
		else echo $soLon2;

		echo "<hr>";		
##############################################################

	?>
</body>
</html>
