<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h2>Data</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data pegawai</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th> 
			<th>NIP</th> 
			<th>Name</th> 
			<th>Gender</th>	
			<th>Hobby</th> 
			<th>Photo</th>
			<th>Opsi</th> 
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		$query = mysqli_query($koneksi,"SELECT * FROM pegawai ORDER BY pegawai_nis DESC") or die(mysql_error());
		

		if(mysqli_num_rows($query) == 0){	
			
	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			
			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				
				
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['pegawai_nis'].'</td>';	
					echo '<td>'.$data['pegawai_nama'].'</td>';	
					echo '<td>'.$data['pegawai_gender'].'</td>';	
					echo '<td>'.$data['pegawai_hobby'].'</td>';	
					echo '<td>'.$data['pegawai_img'].'</td>';	
					echo '<td><a href="edit.php?id='.$data['pegawai_id'].'">Edit</a> / <a href="hapus.php?id='.$data['pegawai_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>