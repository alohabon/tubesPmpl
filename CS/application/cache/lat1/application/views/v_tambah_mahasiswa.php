<h3><?php echo $title; ?></h3>

<form method="post" action="<?php echo base_url()?>mahasiswa/proses_tambah">
<table>
	<tr><td>NIM</td><td>:</td><td><input type='text' name='nim'/></td></tr>
	<tr><td>Nama</td><td>:</td><td><input type='text' name='nama'/></td></tr>
</table>
<input type='submit' value='Simpan'/>
<a href="<?php echo base_url()?>mahasiswa/lihat_daftar">Kembali Lihat Daftar</a>
</form>