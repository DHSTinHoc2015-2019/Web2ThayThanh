<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài tập thực hành 7 - Trần Quang Tân</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php
	$openFile = fopen("input.txt", 'r') or die("Không mở được file");
	echo "<h1 style='margin: 20px; padding-left: 100px;'>".fgets($openFile)."</h1>";
	
	$arr = array();

	$i = 0;
	while (!feof($openFile)) {
		$arr[$i++] = fgets($openFile);
	}

	fclose($openFile);
	?>

	<div class="container">
		<div class="row">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Mã sinh viên:</label>
					<input type="text" class="form-control" name="ma">
				</div>
				<div class="form-group">
					<label>Tên sinh viên:</label>
					<input type="text" class="form-control" name="ten">
				</div>
				<div class="form-group">
					<label>Thành phố</label>
					<select class="form-control" name="diachi">
						<?php 
							for($j = 0; $j < count($arr); $j++){
								echo "<option value=\"$arr[$j]\">$arr[$j]</option>";
							}
						 ?>
				    </select>
				</div>
				<div>
					<button type="submit" class="btn btn-success">Ghi vào file</button>
				</div>
			</form>
		</div>
	</div>
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$ma = $_POST['ma'];
			$ten = $_POST['ten'];
			$diachi = $_POST['diachi'];

			$ghiFile = fopen("output.txt", "w") or die("Unable to open file!");
			fwrite($ghiFile, "Mã sinh viên: ".$ma."\n");
			fwrite($ghiFile, "Tên sinh viên: ".$ten."\n");
			fwrite($ghiFile, "Địa chỉ: ".$diachi."\n");
		}

	 ?>
</body>
</html>
