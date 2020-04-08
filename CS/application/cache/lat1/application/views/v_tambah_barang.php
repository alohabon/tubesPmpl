<h3><?php echo $title; ?></h3>

<form method="post" action="<?php echo base_url()?>barang/proses_tambah">
<table>
	<tr><td>ID BARANG</td><td>:</td><td><input type='text' name='idbarang'/></td></tr>
	<tr><td>Nama Barang</td><td>:</td><td><input type='text' name='namabarang'/></td></tr>
</table>
<input type='submit' value='Simpan'/>
<a href="<?php echo base_url()?>barang/lihat_daftar">Kembali Lihat Daftar</a>
</form>
