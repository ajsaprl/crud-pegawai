<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data pegawai</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<select name="Gender" required>
						<option value="">Choose one</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>
					<select name="hobby" required>
						<option value="">Choose one</option>
						<option value="Sepak Bola">Sepak Bola</option>
						<option value="Voli">Voli</option>
						<option value="Tenis Meja">Tenis Meja</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label class="control-label">Profile Img.</label></td>
				<td><input class="input-group" type="file" name="pegawai_img" accept="image/*" method="post"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>