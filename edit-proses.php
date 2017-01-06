<?php

if(isset($_POST['simpan'])){
	
	
	include('koneksi.php');

	$id			= $_POST['id'];	
	$nis		= $_POST['nis'];	
	$nama		= $_POST['nama'];	
	$Gender		= $_POST['Gender'];	
	$hobby	= $_POST['hobby'];	
	

	$update = mysqli_query($koneksi,"UPDATE pegawai SET pegawai_nis='$nis', pegawai_nama='$nama', pegawai_Gender='$Gender', pegawai_hobby='$hobby' WHERE pegawai_id='$id'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>