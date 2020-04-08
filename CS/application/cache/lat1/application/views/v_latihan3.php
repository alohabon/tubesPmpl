<h3><?php echo $title; ?></h3>
<table border=1>
	<thead>
		<tr><th>No</th><th>Nama</th><th>Asal</th>
		</tr>
	</thead>
	<tbody>
      <?php 
		$no = 1;
		foreach ($daf_mhs as $mhs){
			echo "<tr><td>".$no++."</td>"; 
			echo "    <td>".$mhs['nama']."</td>";
			echo "    <td>".$mhs['asal']."</td></tr>";
		}
      ?>
	</tbody>
</table>
