<h3><?php echo $title; ?></h3>
<table border=1>
	<thead>
		<tr>
			<th>No</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no = 1;
			foreach ($barang['entries']->result_array() as $barang_entry){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo ($barang_entry['idbarang'] != NULL) ? $barang_entry['idbarang'] : '-';  ?></td>
			<td><?php echo $barang_entry['namabarang'] ?></td>
			<td>
				<a href="<?php echo base_url()?>barang/lihat_detail/<?php echo $barang_entry['idbarang']; ?>">View</a>
				<a href="<?php echo base_url()?>barang/form_ubah/<?php echo $barang_entry['idbarang'] ?>">Edit</a>
				<a href="<?php echo base_url()?>barang/proses_hapus/<?php echo $barang_entry['idbarang'] ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<a href="<?php echo base_url()?>barang/form_tambah">Tambah Data</a>
