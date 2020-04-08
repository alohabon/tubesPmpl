<h3><?php echo $title; ?></h3>

<?php
	echo $this->session->flashdata('message');
?>
<form method="post" action="<?php echo base_url()?>login/proses_login">
<table>
	<tr><td>User ID</td><td>:</td><td><input type='text' name='uid'/></td></tr>
	<tr><td>Password</td><td>:</td><td><input type='text' name='pwd'/></td></tr>
</table>
<input type='submit' value='Login'/>
</form>