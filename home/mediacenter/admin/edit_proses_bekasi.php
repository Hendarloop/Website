<?php include('akses.php'); ?>
<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	$id				= $_POST['id'];	
	$keterangan		= $_POST['keterangan'];
	$dir_upload 	= "foto/";
	$fotonew		= $_FILES['file']['name'];
	$fotolast		= $_POST['foto'];
	$fotofix		= ($fotonew == "") ? $fotolast : $fotonew;
	$proses 		= "UPDATE tabel_gambar SET id_gambar='$id', keterangan='$keterangan', foto='$fotofix' WHERE id_gambar='$id'";
	$return 		= mysql_query($proses);
?>
	<?
		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		$cek = move_uploaded_file($_FILES['file']['tmp_name'], $dir_upload.$fotonew);}
		$return
	?>
	<?
		if($return){
			echo header("Location:bekasi.php");		
			//echo '<a href="lihat_dep.php?id='.$id.'"> Kembali </a>';	//membuat Link untuk kembali ke halaman edit
		} else {
			echo 'Data Gagal Update..!!! ';		
			echo '<a href="bekasi.php?id='.$id.'"> Kembali </a>';		
			} 
		}else{	
			echo '<script>window.history.back()</script>';
		}
	?>