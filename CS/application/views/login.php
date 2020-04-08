<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <meta charset="utf-8">
<?php
	if($this->session->flashdata('login') == 'gagal'){
		echo "<script>alert('Kode pegawai atau password salah!');</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<php>
</php>
<head>
	<title>Login Pegawai</title>	
</head>
<body style="background-color: #55EFC4;">
		<div class="container-fluid " style="background-color:#1E4A60; border-radius: 7px; height:  70%; width: 70%; margin-top: 7%; " >
			<div class="row" style="padding-top: 6%">
				<label style="color: #55EFC4; text-align: center;  width: 100%; font-size: 52; ">cake<b>SHOP</b></label>	
			</div>
			
			<form method="post" action="<?php base_url()?>pegawai/login">
				<div class="form-group" style="padding-top: 4%">
					<input type="text" placeholder="Kode Pegawai" name="kdPegawai" a style="background-color:#0E2C3D; color: white; text-align: center;  border-radius: 5px; border-style: none; width: 50%; height: 8%; font-size: 20px; margin-left: 25%" required>
				</div>
				<div class="form-group" style="padding-top: 1%">
					<input type="password"  placeholder="Password"  name="password" style="background-color:#0E2C3D; color: white;  border-style: none;text-align: center;  border-radius: 5px; width: 50%; height: 8%; font-size: 20px; margin-left: 25%" required>
				</div>
				<button type="submit" style="margin-top: 3%; background-color:#55EFC4;border-radius: 5px; border-style: none ;text-align: center;  width: 10%; font-size: 20px; margin-left: 45%;">Login</button>
			</form>

			<div class="row" style="padding-top: 3%">
				<a  href="" style="color:#55EFC4; text-align: center;  width: 100%; font-size: 20px;">
					forgot your password ?
				</a>
			</div>
		</div>
</body>
</html>
