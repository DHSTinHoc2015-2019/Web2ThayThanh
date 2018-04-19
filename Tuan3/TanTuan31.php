<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trần Quang Tân - Bài tập tuần 3</title>
</head>
<style>
	#thongTin{
		margin-top: 2em; margin-left: 2em;
	}
</style>
<body style="font-size: 20px;">
	<?php 
		$sinhVien = array(
			'SV001' => array( 
				'tenSV' => 'Nguyễn Văn A',
				'diemMon1' => 6,
				'diemMon2' => 7,
				'diemMon3' => 8,
				'diemTB' => 0,
			),

			'SV002' => array( 
				'tenSV' => 'Nguyễn Thị B',
				'diemMon1' => 7,
				'diemMon2' => 8,
				'diemMon3' => 9,
				'diemTB' => 0,
			),

			'SV003' => array( 
				'tenSV' => 'Trần Văn C',
				'diemMon1' => 8,
				'diemMon2' => 9,
				'diemMon3' => 10,
				'diemTB' => 0,
			),
		);
	
		$tbmax = 0;
		foreach ($sinhVien as $key_ma => $value_array_ThongTin) {
			echo '<p id="thongTin"><span style="color: red; font-weight: bold">'."THÔNG TIN CỦA SINH VIÊN: ".$key_ma."</span><br>";
			echo "Tên sinh viên: ".$value_array_ThongTin['tenSV']."<br>";
			echo "Điểm môn 1: ".$value_array_ThongTin['diemMon1']."<br>";
			echo "Điểm môn 2: ".$value_array_ThongTin['diemMon2']."<br>";
			echo "Điểm môn 3: ".$value_array_ThongTin['diemMon3']."<br>";
			
			$diemTrungBinh = ($value_array_ThongTin['diemMon1'] + $value_array_ThongTin['diemMon2'] + $value_array_ThongTin['diemMon3'])/3;
			
			echo "Điểm trung bình: ".$diemTrungBinh."<br><br>";
			if($diemTrungBinh >= $tbmax) $tbmax = $diemTrungBinh;
		}
		echo "Điểm trung bình max: ".$tbmax."</p>";
	 ?>
</body>
</html>
