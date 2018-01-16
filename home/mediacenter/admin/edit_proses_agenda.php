<?php include('akses.php'); ?>
<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	$id				= $_POST['id'];	
	$tgl			= $_POST['tgl'];
	$jam		    = $_POST['jam'];
	$agenda			= $_POST['agenda'];	
	$tempat 		= $_POST['tempat'];	
	$keterangan     = $_POST['keterangan'];	
	$proses 		= "UPDATE tabel_agenda SET id_agenda='$id', tanggal='$tgl', jam='$jam', agenda='$agenda', tempat='$tempat',
							  keterangan='$keterangan' WHERE id_agenda='$id'";
	$return 		= mysql_query($proses);
?>
	<?
		if($return){
			echo header("Location:agenda.php");		
			//echo '<a href="lihat_dep.php?id='.$id.'"> Kembali </a>';	//membuat Link untuk kembali ke halaman edit
		} else {
			echo 'Data Gagal Update..!!! ';		
			echo '<a href="anggota.php?id='.$id.'"> Kembali </a>';		
			} 
		}else{	
			echo '<script>window.history.back()</script>';
		}
	?>