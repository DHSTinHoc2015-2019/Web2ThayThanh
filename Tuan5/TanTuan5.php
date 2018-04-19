<?php 
	$tinh = array("24"=>"Hà Nội",
	"58"=>"TP Hồ Chí Minh",
	"15"=>"Đà Nẵng",
	"1"=>"An Giang",
	"2"=>"Bà Rịa-Vũng Tàu",
	"5"=>"Bạc Liêu",
	"3"=>"Bắc Giang",
	"4"=>"Bắc Kạn",
	"6"=>"Bắc Ninh",
	"7"=>"Bến Tre",
	"9"=>"Bình Dương",
	"8"=>"Bình Định",
	"10"=>"Bình Phước",
	"11"=>"Bình Thuận",
	"12"=>"Cà Mau",
	"14"=>"Cao Bằng",
	"13"=>"Cần Thơ",
	"16"=>"Đăk Lăk",
	"17"=>"Đăk Nông",
	"18"=>"Điện Biên", 
	"19"=>"Đồng Nai",
	"20"=>"Đồng Tháp",
	"21"=>"Gia Lai",
	"22"=>"Hà Giang",
	"23"=>"Hà Nam",
	"25"=>"Hà Tĩnh",
	"26"=>"Hải Dương", 
	"27"=>"Hải Phòng",
	"28"=>"Hậu Giang",
	"29"=>"Hoà Bình",
	"30"=>"Hưng Yên", 
	"32"=>"Kiên Giang", 
	"33"=>"Kon Tum",
	"31"=>"Khánh Hòa",
	"34"=>"Lai Châu",
	"36"=>"Lạng Sơn",
	"37"=>"Lào Cai",
	"35"=>"Lâm Đồng",
	"38"=>"Long An",
	"39"=>"Nam Định",
	"41"=>"Ninh Bình",
	"42"=>"Ninh Thuận",
	"40"=>"Nghệ An",
	"43"=>"Phú Thọ",
	"44"=>"Phú Yên",
	"45"=>"Quảng Bình",
	"46"=>"Quảng Nam",
	"48"=>"Quảng Ninh",
	"47"=>"Quảng Ngãi",
	"49"=>"Quảng Trị",
	"50"=>"Sóc Trăng",
	"51"=>"Sơn La",
	"52"=>"Tây Ninh",
	"57"=>"Tiền Giang",
	"60"=>"Tuyên Quang",
	"53"=>"Thái Bình ",
	"54"=>"Thái Nguyên",
	"55"=>"Thanh Hóa ",
	"56"=>"Thừa Thiên-Huế",
	"59"=>"Trà Vinh",
	"61"=>"Vĩnh Long",
	"62"=>"Vĩnh Phúc",
	"63"=>"Yên Bái"
	);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trần Quang Tân - Bài tập thực hành tuần 5</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<style type="text/css">
		body{
			background-color: #2C333D; font-size: 16px;
		}
		.header{
			margin: 2em;
		}
		label{
			font-weight: bold;
		}
		#tieude{
			color: white; font-weight: bold; text-align: center
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="container">
			<h2 id="tieude">BÀI TẬP THƯC HÀNH 5</h2>
			<hr>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-5 rounded" style="background: white;">
				<br>
				<form id="_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					
		    		<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Mã SV</label>
				    	<div class="col-md-9">
				    		<input name="ma" type="text" class="form-control" id="">
				    	</div>
		    		</div>
					
					<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Mật khẩu</label>
				    	<div class="col-md-9">
				    		<input name="matkhau" type="password" class="form-control" id="matkhauid">
				    		<input type="checkbox" name="" onclick="thayDoiHienThi()">
				    		<span>Hiện mật khẩu</span>
				    	</div>
		    		</div>

					<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Họ tên</label>
				    	<div class="col-md-9">
				    		<input name="ten" type="text" class="form-control" id="">
				    	</div>
		    		</div>

		    		<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Ngày sinh</label>
				    	<div class="col-md-9">
				    		<input name="ngaysinh" type="date" class="form-control" id="">
				    	</div>
		    		</div>
					
					<div class="form-group row">
		    			<label class="col-md-3">Giới tính</label>
				    	<div class="col-md-3">
				    		<input name="gioitinh" type="radio" id="" value="Nam" checked="true">Nam
				    	</div>
				    	<div class="col-md-3">
				    		<input name="gioitinh" type="radio" id="" value="Nữ">Nữ
				    	</div>
				    	<div class="col-md-3">
				    	</div>
		    		</div>

		    		<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Số ĐT</label>
				    	<div class="col-md-9">
				    		<input name="sdt" type="text" class="form-control" id="">
				    	</div>
		    		</div>

		    		<div class="form-group row">
		    			<label class="col-md-3 col-form-label">Tỉnh/TP</label>
				    	<div class="col-md-5">
				    		<select id="" name="diachi" class="custom-select">
								<option selected="selected" value="">--Chọn--</option>
								<option value="24">Hà Nội </option>
								<option value="58">TP Hồ Chí Minh </option>
								<option value="15">Đà Nẵng </option>
								<option value="1">An Giang </option>
								<option value="2">Bà Rịa-Vũng Tàu </option>
								<option value="5">Bạc Liêu </option>
								<option value="3">Bắc Giang </option>
								<option value="4">Bắc Kạn </option>
								<option value="6">Bắc Ninh </option>
								<option value="7">Bến Tre </option>
								<option value="9">Bình Dương </option>
								<option value="8">Bình Định </option>
								<option value="10">Bình Phước </option>
								<option value="11">Bình Thuận </option>
								<option value="12">Cà Mau </option>
								<option value="14">Cao Bằng </option>
								<option value="13">Cần Thơ </option>
								<option value="16">Đăk Lăk </option>
								<option value="17">Đăk Nông </option>
								<option value="18">Điện Biên </option>
								<option value="19">Đồng Nai </option>
								<option value="20">Đồng Tháp </option>
								<option value="21">Gia Lai </option>
								<option value="22">Hà Giang </option>
								<option value="23">Hà Nam </option>
								<option value="25">Hà Tĩnh </option>
								<option value="26">Hải Dương </option>
								<option value="27">Hải Phòng </option>
								<option value="28">Hậu Giang </option>
								<option value="29">Hoà Bình </option>
								<option value="30">Hưng Yên </option>
								<option value="32">Kiên Giang </option>
								<option value="33">Kon Tum </option>
								<option value="31">Khánh Hòa</option>
								<option value="34">Lai Châu </option>
								<option value="36">Lạng Sơn </option>
								<option value="37">Lào Cai </option>
								<option value="35">Lâm Đồng </option>
								<option value="38">Long An </option>
								<option value="39">Nam Định </option>
								<option value="41">Ninh Bình </option>
								<option value="42">Ninh Thuận </option>
								<option value="40">Nghệ An </option>
								<option value="43">Phú Thọ </option>
								<option value="44">Phú Yên </option>
								<option value="45">Quảng Bình </option>
								<option value="46">Quảng Nam </option>
								<option value="48">Quảng Ninh </option>
								<option value="47">Quảng Ngãi </option>
								<option value="49">Quảng Trị </option>
								<option value="50">Sóc Trăng</option>
								<option value="51">Sơn La </option>
								<option value="52">Tây Ninh </option>
								<option value="57">Tiền Giang </option>
								<option value="60">Tuyên Quang </option>
								<option value="53">Thái Bình </option>
								<option value="54">Thái Nguyên </option>
								<option value="55">Thanh Hóa </option>
								<option value="56">Thừa Thiên-Huế </option>
								<option value="59">Trà Vinh </option>
								<option value="61">Vĩnh Long </option>
								<option value="62">Vĩnh Phúc </option>
								<option value="63">Yên Bái </option>
							</select>
				    	</div>
						<div class="col-md-4"></div>
		    		</div>

		    		<div class="form-group row">
		    			<label class="col-3 col-form-label">Sở thích</label>
				    	<div class="col-9">
				    		<textarea name="sothich" id="" cols="30" rows="3"></textarea>
				    	</div>
		    		</div>

		    		<div class="form-group row">
		    			<div class="col-md-6">
		    				<button id="btnSubmit" type="submit" class="btn btn-outline-primary">Hiển thị thông tin</button>
		    			</div>

		    			<div class="col-md-6">
		    				<button id="btnReset" type="reset" class="btn btn-outline-danger" onclick="nhapLai();">Nhập lại thông tin</button>
		    			</div>
		    		</div>
				</form>
			
			</div>

			<div class="col-md-1">
				<!-- <p style="font-weight: bold;background-color: white;">BÀI TẬP TUẦN 5</p> -->
			</div>

			<div id="contentRight" class="col-md-6" style="background: white; font-size: 1.5em;">
				<div class="container" id="ma" style="margin-top: 0.5em;">

					<?php
						$arr = array(
							'ma' => array(
								'tiengViet' => "Mã sinh viên",
								'loi' => "không",
							),
							'matkhau' => array(
								'tiengViet' => "Mật khẩu",
								'loi' => "không",
							),
							'ten' => array(
								'tiengViet' => "Tên sinh viên",
								'loi' => "không",
							),
							'ngaysinh' => array(
								'tiengViet' => "Ngày sinh",
								'loi' => "không",
							),
							'sdt' => array(
								'tiengViet' => "Số điện thoại",
								'loi' => "không",
							),
							'diachi' => array(
								'tiengViet' => "Địa chỉ",
								'loi' => "không",
							),
							'sothich' => array(
								'tiengViet' => "Sở thích",
								'loi' => "không",
							),
						);

						$ma = $ten = $ngaysinh = $gioitinh = $diachi = $sothich = $matkhau = $sdt = "";
						if($_SERVER["REQUEST_METHOD"] == "POST"){
							$ma = $_POST['ma'];
							$matkhau = $_POST['matkhau'];
							$ten = $_POST['ten'];
							$ngaysinh = $_POST['ngaysinh'];
							$gioitinh = $_POST['gioitinh'];
							$sdt = $_POST['sdt'];
							$diachi = $_POST['diachi'];
							$sothich = $_POST['sothich'];

							//Kiểm tra điều kiện chưa nhập thông tin
							if(empty($ma)) $arr["ma"]["loi"] = "có";
							if(empty($matkhau)) $arr["matkhau"]["loi"] = "có";
							if(empty($ten)) $arr["ten"]["loi"] = "có";
							if(empty($ngaysinh)) $arr["ngaysinh"]["loi"] = "có";
							if(empty($sdt)) $arr["sdt"]["loi"] = "có";
							if(empty($diachi)) $arr["diachi"]["loi"] = "có";
							if(empty($sothich)) $arr["sothich"]["loi"] = "có";

							$flag = false; //Cờ xét lỗi chung, Nếu cờ không thay đổi tức bạn đã nhập đúng thông tin
							//in_array("str/int", mảng): kiểm tra có phần tử "str/int" có trong mảng hay không
							foreach ($arr as $key => $value) {
								if(in_array("có", $arr[$key])) {
									echo "Bạn chưa nhập ".$value['tiengViet']."<br>";
									$flag = true;
								}
							}
							
							//Kiểm tra định dạng dữ liệu nhập vào
							if(!$flag){
								//Kiểm tra mã sinh viên (chỉ bao gồm số và chữ cái có độ dài từ 6-20)
								if(!preg_match("/^[0-9A-Za-z]{6,20}$/", $ma)){
									echo "<b>Mã sinh viên nhập sai</b>. Mã gồm chữ số, chữ cái, có độ dài 6-20.<br>";
									$flag = true;
								}

								//Kiểm tra mật khẩu
								if(!preg_match("/^[A-Za-z0-9]{6,20}$/", $matkhau)){
									echo "<b>Mật khẩu nhập sai</b>. Mật khẩu gồm chữ số, chữ cái, độ dài từ 6-20.<br>";
									$flag = true;
								}

								//Kiểm tra họ tên
								if (!preg_match("/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*$/",$ten)) {
									echo "<b>Tên sinh viên nhập sai</b><br>";
									$flag = true;
								}
								
								//Kiểm tra số điện thoại
								if(!preg_match("/^\d*$/", $sdt)) {
									echo "<b>Số điện thoại nhập sai</b><br>";
									$flag = true;
								}

								if(!$flag){
									echo "<h2>THÔNG TIN SINH VIÊN</h2>";
									echo "<b>Mã sinh viên: </b>".$ma."<br>";
									echo "<b>Mật khẩu: </b>".$matkhau."<br>";
									echo "<b>Tên sinh viên: </b>".$ten."<br>";
									echo "<b>Giới tính: </b>".$gioitinh."<br>";
									echo "<b>Số điện thoại: </b>".$sdt."<br>";
									echo "<b>Tỉnh/Thành phố: </b>".$tinh[$diachi]."<br>";
									echo "<b>Sở thích: </b>".$sothich."<br>";
								}
							}
						}
				 	?>	
				</div>
			</div>
		</div>
	</div>

	<script>
		function thayDoiHienThi() {
			var x = document.getElementById("matkhauid");
			if (x.type === "password") {
		        x.type = "text";
		    } else {
		        x.type = "password";
		    }
		}

		function nhapLai(){
			document.getElementById('contentRight').style.display = 'none';
		}
	</script>
</body>
</html>
