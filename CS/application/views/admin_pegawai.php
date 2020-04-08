<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php 
if ($this->session->userdata('user') !== 'admin'){
		redirect('pegawai');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Daftar Pegawai</title>
</head>

<body style="background-color: #55EFC4;">
	<script type="text/javascript">
		$(document).ready( function (){
	    	$('#table').DataTable({
	    		"pageLength": 5,
	    		"autoWidth" : false,
	    		"columnDefs": [{"width": "17%", "targets": 4 }] 
	    	});
	    	 $(".dataTables_wrapper").css("width","100%");
		} );
	</script>
		<div class="container-fluid " style="background-color:#1E4A60; border-radius: 5px; height:  85%; width: 70%; margin-top: 5%;text-align: center; " >
			<div class="row" style="width: 100%;height: 89%; text-align: center;">
				<div class="col" style="height: 100%;">
					<div class="row" style="margin-top: 3%">
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_produk" style="width: 100%; font-size: 20px; color: #55EFC4; opacity: 0.5;">Produk</a>
						</div>
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_pegawai" style="width: 100%; font-size: 20px; color: #55EFC4">Pegawai</a>
						</div>
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_pembayaran" style="width: 100%; font-size: 20px; color: #55EFC4; opacity: 0.5;">Pembayaran</a>
						</div>
					</div>
					<div class="row" style="margin-left: 1%; padding-top: 5%; text-align: left;">
					<table id="table" class="display" style="background-color: #f2f2f2" align="center">
						<thead>
							<tr>
								<th style="width: 8%">Kode</th>
								<th style="width: 20%;">Nama</th>								
								<th style="width: 10%;">Pekerjaan</th>
								<th>Alamat</th>
								<th style="width: 18%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pegawai as $data) {?>
							<tr>
								<td><?php echo $data->kdPegawai; ?></td>
								<td><?php echo $data->nama; ?></td>
								<td><?php echo $data->pekerjaan; ?></td>
								<td><?php echo $data->alamat; ?></td>
								<td>
									<button id='delete' data-toggle="modal" class="btn btn-primary" data-target="#edit<?php echo $data->kdPegawai; ?>">Edit</button>	
									<button id='delete' data-toggle="modal" class="btn btn-danger" data-target="#hapus<?php echo $data->kdPegawai; ?>">Delete</button>
								</td>



								<div class="modal" id ="hapus<?php echo $data->kdPegawai;?>">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Hapus Data</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<h3>Yakin ingin menghapus <?php echo $data->kdPegawai; ?>?</h3>
											</div>

											<!-- Modal footer-->
											<div class="modal-footer">
												<form method="post" action="hapusPegawai">
													<div class="form-group">
														<input type="hidden" name="kdPegawai" value="<?php echo $data->kdPegawai;?>" id="kdPegawai" required>
														<button type="submit" id="hapus" class="btn btn-danger">Delete Data</button>
													</div>
												</form>
											</div>								
										</div>
									</div>
								</div>

								<div class="modal" id ="edit<?php echo $data->kdPegawai;?>">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Edit Data</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">												
											<form method="post"  action="editPegawai" style=" width: 100%; ">								
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Kode Pegawai</label><br>
													<input type="text" value="<?php echo $data->kdPegawai;?>" disabled style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
													<input type="hidden"  name="kdPegawai"  value="<?php echo $data->kdPegawai;?>" >
												</div>
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Nama Pegawai</label><br>
													<input type="text" name="nama"  value="<?php echo $data->nama;?>" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
												</div>	
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Alamat</label><br>
													<input type="text" name="alamat" value="<?php echo $data->alamat;?>" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;" required>	
												</div>						
												<div class="form-group">
													<label style="color: #55EFC4; font-size: 17px;">Jenis Pekerjaan</label><br>				
													<select name="pekerjaan"  value="<?php echo $data->pekerjaan;?>" style="background-color:#0E2C3D; color: white;  border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
														<option value="<?php echo $data->pekerjaan;?>" selected hidden><?php echo $data->pekerjaan;?></option>
														<option value="admin">Admin</option>
														<option value="koki">Koki</option>
														<option value="pengantar">Pengantar</option>
													</select>
												</div>
												<center><button type="submit" id="edit" class="btn btn-danger">Edit Data</button></center>
											</form>
																						
											</div>								
										</div>
									</div>
								</div>


							</tr>
							<?php } ?>
						</tbody>
						<tfoot>
						</tfoot>
					</table>				
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<button type="button" onclick="window.location='<?php echo base_url('pegawai');?>/logout'" class="btn btn-danger" style="width: 80%;">Keluar</button>
				</div>
				<div class="col-4">
					<button type="button" data-toggle="modal" class="btn btn-primary" data-target="#tambah"  style="width: 80%;">Input Pegawai</button>
				</div> 
				<div class="modal" id ="tambah">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Input Pegawai</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form method="post"  action="tambahPegawai" style=" width: 100%; ">							
													<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Kode Pegawai</label><br>
														<input type="text" name="kdPegawai" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
													</div>
														<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Nama Pegawai</label><br>
														<input type="text" name="nama" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
													</div>																				
														<div class="form-group">
														<label style="color: #55EFC4; font-size: 17px;">Jenis Pekerjaan</label><br>							
														<select name="pekerjaan"  style="background-color:#0E2C3D; color: white;  border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required >
														<option value="admin">Admin</option>
														<option value="koki">Koki</option>
														<option value="pengantar">Pengantar</option>
														</select>
													</div>
														<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Alamat</label><br>
														<input type="text" name="alamat" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;" required >	
													</div>	
														<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;" required>Password</label><br>
														<input type="password" name="password" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;" required>	
														</div>
													<button type="submit" class="btn btn-success" style=" width: 80%; margin-top: 2%">Simpan</button>
												</form>	
											</div>

											<!-- Modal footer-->
											<div class="modal-footer">
											</div>									
												
										</div>
									</div>

				<div class="col-4">
					
				</div>
				
			</div>
		</div>
	
</body>
</html>

