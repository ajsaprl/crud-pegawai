<?php

if(isset($_POST['tambah'])){
	
	
	include('koneksi.php');
	
	
	$nis		= $_POST['nis'];	
	$nama		= $_POST['nama'];	
	$Gender		= $_POST['Gender'];	
	$hobby	= $_POST['hobby'];	
	$img	= $_POST['pegawai_img'];	


	
	$input = mysqli_query($koneksi,"INSERT INTO pegawai VALUES(NULL, '$nis', '$nama', '$Gender', '$hobby', '$img')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>