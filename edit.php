<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data pegawai</h3>
	
	<?php
	
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$show = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE pegawai_id='$id'");
	

	if(mysqli_num_rows($show) == 0){
		
	
		echo '<script>window.history.back()</script>';
		
	}else{
	
		
		$data = mysqli_fetch_assoc($show);	
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['pegawai_nis']; ?>" required></td>	
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['pegawai_nama']; ?>" required></td> 
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<select name="Gender" required>
						<option value="">Pilih Gender</option>
						<option value="Male" <?php if($data['pegawai_gender'] == 'Male'){ echo 'selected'; } ?>>Male</option>	
						<option value="Female" <?php if($data['pegawai_gender'] == 'Female'){ echo 'selected'; } ?>>Female</option>	
					</select>
				</td>
			</tr>
			<tr>
				<td>hobby</td>
				<td>:</td>
				<td>
					<select name="hobby" required>
						<option value="">Pilih hobby</option>
						<option value="Sepak Bola" <?php if($data['pegawai_hobby'] == 'Sepak Bola'){ echo 'selected'; } ?>>Sepak Bola</option>	
						<option value="Voli" <?php if($data['pegawai_hobby'] == 'Voli'){ echo 'selected'; } ?>>Voli</option>	
						<option value="Tenis Meja" <?php if($data['pegawai_hobby'] == 'Tenis Meja'){ echo 'selected'; } ?>>Tenis Meja</option>	
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>