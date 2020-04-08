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
if ($this->session->userdata('user') !== 'koki'){
		redirect('pegawai');
	}
?>
<!DOCTYPE html>
<html>
<php>
</php>
<head>
<meta charset="UTF-8">
	<title>Daftar Pegawai</title>
		
   <style>
  </style>
</head>
<body style="background-color: #55EFC4;">
	<script type="text/javascript">
		$(document).ready( function (){
	    	$('#table').DataTable({
	    		"pageLength": 5,
	    		"autoWidth" : false,
	    		"columnDefs": [{"width": "13%", "targets": 3 }] 
	    	});
	    	 $(".dataTables_wrapper").css("width","100%");
		} );
	</script>
		<div class="container-fluid " style="background-color:#1E4A60; border-radius: 5px; height:  85%; width: 70%; margin-top: 5%;text-align: center; " >
			<div class="row" style="width: 100%;height: 89%; text-align: center;">
				<div class="col" style="height: 100%;">
					<div class="row" style="margin-top: 3%">
						<div class="col-4">
							
						</div>
						<div class="col-4">
							<label style="width: 100%; font-size: 20px; color: #55EFC4;">Pesanan</label>
						</div>
						<div class="col-4">
							
						</div>
					</div>
					<div class="row" style="margin-left: 1%; padding-top: 5%; text-align: left;">
					<table id="table" class="display" style="background-color: #f2f2f2" align="center">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Pesanan</th>
								<th>Jumlah</th>							
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $key => $x) { ?>
							<tr>
								<td><?php echo ($key) ?></td>
								<td>						
									<?php foreach ($x as $produk) { 										
										echo $produk->produk ;
										echo "<br>";
									} ?>									
								</td>
								<td>
									<?php foreach ($x as $kuantitas) { 										
										echo $kuantitas->kuantitas ;
										echo "<br>";
									} ?>
								</td>
								<td>
									<form method="post" action="<?php base_url()?>koki/validasiProduksi">
										<input type="text" name="kdTrx" value="<?php echo ($key); ?>" hidden>
										<button type="submit" class="btn btn-primary" data-target="">Validasi</button>	
									</form>
								</td>										
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
					<button type="button" onclick="window.location='<?php echo base_url('pegawai');?>'" class="btn btn-danger" style="width: 80%;">Keluar</button>
				</div>

		</div>
	
</body>
</html>

