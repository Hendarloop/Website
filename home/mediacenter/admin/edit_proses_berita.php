<?php include('akses.php'); ?>
<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	$id				= $_POST['id'];	
	$keterangan     = $_POST['keterangan'];	
	$waktu 		= $_POST['waktu'];	
	$proses 		= "UPDATE tabel_berita SET id_berita='$id', keterangan='$keterangan', waktu='$waktu' WHERE id_berita='$id'";
	$return 		= mysql_query($proses);
?>
	<?
		if($return){
			echo header("Location:berita.php");		
			//echo '<a href="lihat_dep.php?id='.$id.'"> Kembali </a>';	//membuat Link untuk kembali ke halaman edit
		} else {
			echo 'Data Gagal Update..!!! ';		
			echo '<a href="anggota.php?id='.$id.'"> Kembali </a>';		
			} 
		}else{	
			echo '<script>window.history.back()</script>';
		}
	?>