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
	table{
		margin: 3em; text-align: center;
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
	?>

	<?php $tbmax = 0; ?>
	<table border="1" cellpadding="5" cellspacing="0" width="90%">
		<tr>
			<th>Mã sinh viên</th>
			<th>Tên sinh viên</th>
			<th>Điểm môn 1</th>
			<th>Điểm môn 2</th>
			<th>Điểm môn 3</th>
			<th>Điểm trung bình</th>
		</tr>
    
		<?php 
			foreach ($sinhVien as $key_ma => $value_array_ThongTin) {
				echo "<tr>";
				echo "<td>".$key_ma."</td>";
				
				echo "<td>".$value_array_ThongTin['tenSV']."</td>";
				echo "<td>".$value_array_ThongTin['diemMon1']."</td>";
				echo "<td>".$value_array_ThongTin['diemMon2']."</td>";
				echo "<td>".$value_array_ThongTin['diemMon3']."</td>";
				$diemTrungBinh = ($value_array_ThongTin['diemMon1'] + $value_array_ThongTin['diemMon2'] + $value_array_ThongTin['diemMon3'])/3;
				
				echo "<td>".$diemTrungBinh."</td>";
				echo "</tr>";
				if($diemTrungBinh >= $tbmax) $tbmax = $diemTrungBinh;
			}
	    ?>
    </table>
    <h3 style="margin: 2em;"><?php echo "Điểm trung bình max: ".$tbmax; ?></h3>
</body>
</html>
