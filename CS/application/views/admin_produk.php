<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <meta charset="UTF-8">
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
	<title>Daftar Produk</title>
</head>
<body style="background-color: #55EFC4;">
	<script type="text/javascript">
		$(document).ready( function () {
	    	$('#table').DataTable({
	    		"pageLength": 3,
	    		"autoWidth" : false,
	    		"columnDefs": [{"width": "17%", "targets": 5 }] 
	    	});
	    	 $(".dataTables_wrapper").css("width","100%");
		} );
	</script>
		<div class="container-fluid " style="background-color:#1E4A60; border-radius: 5px; height:  85%; width: 70%; margin-top: 5%;text-align: center; " >
			<div class="row" style="width: 100%;height: 89%; text-align: center;">
				<div class="col" style="height: 100%;">
					<div class="row" style="margin-top: 3%">
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_produk" style="width: 100%; font-size: 20px; color: #55EFC4;">Produk</a>
						</div>
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_pegawai" style="width: 100%; font-size: 20px; color: #55EFC4;opacity: 0.5;">Pegawai</a>
						</div>
						<div class="col-4">
							<a href="<?php echo base_url('admin/')?>admin_pembayaran" style="width: 100%; font-size: 20px; color: #55EFC4; opacity: 0.5;">Pembayaran</a>
						</div>
					</div>
					<div class="row" style="margin-left: 1%; padding-top: 3%; text-align: left;">
					<table id="table" class="display" align="center" style="background-color: #f2f2f2">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Nama</th>
								<th>Harga</th>								
								<th>Deskripsi</th>
								<th>Gambar</th>								
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($produk as $data) {?>
							<tr>
								<td><?php echo $data->kdProduk; ?></td>
								<td><?php echo $data->nama; ?></td>								
								<td><?php echo $data->harga; ?></td>
								<td><?php echo $data->desc; ?></td>
								<td><img src="<?=base_url();?>images/produk/<?=$data->kdProduk;?>.jpg" style="height: 80px; width: 80px;"></td>
								<td>
									<button id='delete' data-toggle="modal" class="btn btn-primary" data-target="#edit<?php echo $data->kdProduk; ?>">Edit</button>	
									<button id='delete' data-toggle="modal" class="btn btn-danger" data-target="#hapus<?php echo $data->kdProduk; ?>">Delete</button>
								</td>



								<div class="modal" id ="hapus<?php echo $data->kdProduk;?>">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Hapus Data</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<h3>Yakin ingin menghapus <?php echo $data->kdProduk; ?>?</h3>
											</div>

											<!-- Modal footer-->
											<div class="modal-footer">
												<form method="post" action="hapusproduk">
													<div class="form-group">
														<input type="hidden" name="kdProduk" value="<?php echo $data->kdProduk;?>" id="kdProduk" required>
														<button type="submit" id="hapus" class="btn btn-danger">Delete Data</button>
													</div>
												</form>
											</div>								
										</div>
									</div>
								</div>

								<div class="modal" id ="edit<?php echo $data->kdProduk;?>">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Edit Data</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">												
											<form method="post"  action="editproduk" enctype="multipart/form-data" style=" width: 100%; ">								
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Kode produk</label><br>
													<input type="text" value="<?php echo $data->kdProduk;?>" disabled style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;">
													<input type="hidden"  name="kdProduk"  value="<?php echo $data->kdProduk;?>" reqiuired>
												</div>
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Nama Produk</label><br>
													<input type="text" name="nama"  value="<?php echo $data->nama;?>" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
												</div>	
												<div class="form-group" >
													<label style="color: #55EFC4; font-size: 17px;">Harga</label><br>
													<input type="number" name="harga" value="<?php echo $data->harga;?>" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;" reqiuired >	
												</div>						
												<div class="form-group">
													<label style="color: #55EFC4; font-size: 17px;">Deskripsi</label><br>				
													<input name="desc"  value="<?php echo $data->desc;?>" style="background-color:#0E2C3D; color: white;  border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;">
												</div>
												<div class="form-group">
														<label style="color: #55EFC4; font-size: 17px;">Gambar</label><br>				
														<input type="file" name="gambar">	
														
												</div>
												<center> <button type="submit" id="edit" class="btn btn-danger">Edit Data</button></center>
											</form>
												</div>
											<!-- Modal footer-->
											<div class="modal-footer">												
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
					<button type="button" data-toggle="modal" class="btn btn-primary" data-target="#tambah"  style="width: 80%;">Input produk</button>
				</div> 
				<div class="modal" id ="tambah">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Input Produk</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form method="post"  action="tambahproduk" enctype="multipart/form-data" style=" width: 100%; ">							
													<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Kode Produk</label><br>
														<input type="text" name="kdProduk" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;" required>
													</div>
														<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Nama Produk</label><br>
														<input type="text" name="nama" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width: 85%; height: 7%; font-size: 16px;
														 " required>
													</div>	
														<div class="form-group" >
														<label style="color: #55EFC4; font-size: 17px;">Harga</label><br>
														<input type="numbers" name="harga" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;" required>	
														</div>						
													<div class="form-group">
														<label style="color: #55EFC4; font-size: 17px;">Deskripsi</label><br>				
														<input type="text" name="desc" style="background-color:#0E2C3D; color: white; border-radius: 5px; border-style: none; width:85%; height: 7%; font-size: 16px;"
														required>	
														
													</div>
													<div class="form-group">
														<label style="color: #55EFC4; font-size: 17px;">Gambar</label><br>				
														<input type="file" name="gambar" required>	
														
													</div>
													<button type="submit" class="btn btn-success" style=" width: 80%; ">Simpan</button>
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
