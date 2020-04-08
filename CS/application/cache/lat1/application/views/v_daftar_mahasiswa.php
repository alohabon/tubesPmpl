<h3><?php echo $title; ?></h3>
<table border=1>
	<thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			foreach ($mhs['entries']->result_array() as $mhs_entry){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo ($mhs_entry['nim'] != NULL) ? $mhs_entry['nim'] : '-';  ?></td>
			<td><?php echo $mhs_entry['nama'] ?></td>
			<td>
				<a href="<?php echo base_url()?>mahasiswa/lihat_detail/<?php echo $mhs_entry['nim']; ?>">View</a>
				<a href="<?php echo base_url()?>mahasiswa/form_ubah/<?php echo $mhs_entry['nim'] ?>">Edit</a>
				<a href="<?php echo base_url()?>mahasiswa/proses_hapus/<?php echo $mhs_entry['nim'] ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<a href="<?php echo base_url()?>mahasiswa/form_tambah">Tambah Data</a>

