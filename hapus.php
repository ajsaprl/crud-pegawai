<?php

if(isset($_GET['id'])){
	

	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysqli_query($koneksi,"SELECT pegawai_id FROM pegawai WHERE pegawai_id='$id'") or die(mysql_error());
	
	
	if(mysqli_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysqli_query($koneksi,"DELETE FROM pegawai WHERE pegawai_id='$id'");
		
		
		if($del){
			
			echo 'Data pegawai berhasil di hapus! ';		
			echo '<a href="index.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		}
		
	}
	
}else{
	
	
	echo '<script>window.history.back()</script>';
	
}
?>