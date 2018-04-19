<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	body{
		font-size: 20px;
	} 
	button, input{
		font-size: 16px;
	}
</style>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label>Nhập mật khẩu MySQL: </label>
		<input type="text" name="matkhau">
		<button type="submit"> SUBMIT</button>
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$dbpassword = $_POST['matkhau'];
			$dbservername = 'localhost';
			$dbusername = 'root';

			//Kiểm tra kết nối
			$conn = new mysqli($dbservername, $dbusername, $dbpassword);
			if($conn -> connect_error){
				die("Kết nối thất bại. Lỗi: ".$conn-> connect_error);
			}
			echo "Kết nối thành công php và mysql<br>";

			//Tạo cơ sở dữ liệu tanT6
			$sql = 'CREATE DATABASE IF NOT EXISTS tanT6';
			if($conn-> query($sql) === TRUE){
				echo "Tạo cơ sở dữ liệu tanT6 thành công<br>";
			}
			else exit("Tạo database thất bại. Lỗi: ".$conn-> error);

			//Chọn cơ sở dữ liệu tanT6
			mysqli_select_db($conn, 'tanT6');

			//xóa bảng thongtin nếu đã tồn tại trước đó
			$sql = "DROP TABLE IF EXISTS thongtin";
			if($conn->query($sql) === TRUE){
				echo "Thực hiện thành công xóa bảng thongtin nếu đã tồn tại trước đó<br>";
			}
			else exit("Thất bại khi thực hiện truy vấn DROP TABLE IF EXISTS thongtin".$conn-> error);

			//Tạo bảng thongtin
			$sql = "CREATE TABLE thongtin (id int(11) unsigned auto_increment PRIMARY KEY NOT NULL,
			masv varchar(10) NOT NULL,
			tensv varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
			ngaysinh date NOT NULL,
			gioitinh varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
			diachi varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
			sdt varchar(20) NOT NULL)";
			if($conn->query($sql) === TRUE){
				echo "Tạo thành công bảng thongtin<br>";
			}
			else exit("Tạo bảng thất bại. Lỗi: ".$conn-> error);

			//Chèn dữ liệu vào bảng thongtin
			mysqli_set_charset($conn,"utf8");
			$sql = "INSERT INTO thongtin (masv, tensv, ngaysinh, gioitinh, diachi, sdt) VALUES 
			('SV001', 'Nguyễn Văn A', '1997-01-02', 'Nam', 'Quảng Trị', '0974433226'),
			('SV002', 'Trần Thị B', '1997-02-23', 'Nữ', 'Huế', '0989898989'),
			('SV003', 'Nguyễn C', '1997-10-30', 'Nam', 'Quảng Nam', '0988988988')";

			if($conn->query($sql) === TRUE){
				echo "Thêm thành công cơ sở dữ liệu vào bảng thongtin"."<br>";
			}
			else exit("Thêm thất bại dữ liệu vào bảng thongtin. Lỗi: ".$conn-> error);

			//tạo bảng cho html
			echo "<h2>DỮ LIỆU TRONG BẢNG thongtin</h2>
				<table border=\"1px\" cellspacing=\"0\" cellpadding=\"5\">
					<tr>
						<th>ID</th>
						<th>Mã sinh viên</th>
						<th>Tên sinh viên</th>
						<th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th>Số ĐT</th>
					</tr>";

			//Hiển thị dữ liệu của bảng thongtin
			$sql = "SELECT * FROM thongtin";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$ngaysinh = date_create($row['ngaysinh']);
					echo "<tr>
							<td>".$row['id']."</td>
							<td>".$row['masv']."</td>
							<td>".$row['tensv']."</td>
							<td>".date_format($ngaysinh,'d/m/Y')."</td>
							<td>".$row['gioitinh']."</td>
							<td>".$row['diachi']."</td>
							<td>".$row['sdt']."</td>
						</tr>";
				}
			}

			$conn->close();
		}
	 ?>
	</table>
</body>
</html>
