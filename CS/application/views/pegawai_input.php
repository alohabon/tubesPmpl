<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<php>
</php>
<head>
	<title>Login Pegawai</title>	
</head>
<body style="background-color: #55EFC4;">
		<div class="container" style="background-color:#1E4A60; border-radius: 5px; height:  85%; width: 70%; margin-top: 5%; text-align: center;" >
			<div class="row" style="width: 100%;height: 89%;">
				<div class="col" style="height: 100%;">
					<div class="row" style="margin-top: 3%">
						<div class="col-4">
							<a href="" style="width: 100%; font-size: 20px; color: #55EFC4; opacity: 0.5;">Produk</a>
						</div>
						<div class="col-4">
							<a href="" style="width: 100%; font-size: 20px; color: #55EFC4">Pegawai</a>
						</div>
						<div class="col-4">
							<a href="" style="width: 100%; font-size: 20px; color: #55EFC4; opacity: 0.5;">Pembayaran</a>
						</div>
					</div>
					<div class="row" style="margin-left: 8%; padding-top: 3%; text-align: left;">
						<form method="post"  action="<?php base_url()?>admin/tambahPegawai" style=" width: 100%; ">										
							<div class="form-group" >
								<label style="color: #55EFC4; font-size: 17px;">Kode Pegawai</label><br>
								<input type="text" name="kdPegawai" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;">
							</div>
							<div class="form-group" >
								<label style="color: #55EFC4; font-size: 17px;">Nama Pegawai</label><br>
								<input type="text" name="nama" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;">
							</div>	
							<div class="form-group" >
								<label style="color: #55EFC4; font-size: 17px;">Alamat</label><br>
								<input type="text" name="alamat" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;">	
							</div>						
							<div class="form-group">
								<label style="color: #55EFC4; font-size: 17px;">Jenis Pekerjaan</label><br>							
								<select name="pekerjaan"  style="background-color:#0E2C3D; color: white;  border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;">
									<option value="admin">Admin</option>
									<option value="koki">Koki</option>
									<option value="pengantar">Pengantar</option>
								</select>
							</div>
							<div class="form-group" >
								<label style="color: #55EFC4; font-size: 17px;">Password</label><br>
								<input type="password" name="password" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;">	
							</div>				
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<button type="button" onclick="window.location='<?php echo base_url('home/');?>login'" class="btn btn-danger" style="width: 80%;">Keluar</button>
				</div>
				<div class="col-4">
					<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('home/')?>admin_pegawai_tambah'" style=" width: 80%;">Show Pegawai</button>
				</div>
				<div class="col-4">
					<button type="submit" class="btn btn-success" style=" width: 80%; ">Simpan</button>
					</form>	
				</div>
			</div>
		</div>
	
</body>
</html>