<?php include('akses.php'); ?>
<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	$id				= $_POST['id'];	
	$nama			= $_POST['nama'];
	$alamat		    = $_POST['alamat'];
	$tgl			= $_POST['tgl'];	
	$alamat			= $_POST['alamat'];	
	$fraksi 		= $_POST['fraksi'];	
	$komisi	 		= $_POST['komisi'];	
	$jabatan 		= $_POST['jabatan'];	
	$dapil	 		= $_POST['dapil'];	
	$telp			= $_POST['telp'];
	$dir_upload 	= "foto/";
	$fotonew		= $_FILES['file']['name'];
	$fotolast		= $_POST['foto'];
	$fotofix		= ($fotonew == "") ? $fotolast : $fotonew;
	$proses 		= "UPDATE tabel_anggota SET id_anggota='$id', nama='$nama', alamat='$alamat', tgl_lahir='$tgl', fraksi='$fraksi',
							  komisi='$komisi', jabatan='$jabatan', dapil='$dapil', no_telp='$telp', foto='$fotofix' WHERE id_anggota='$id'";
	$return 		= mysql_query($proses);
?>
	<?
		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		$cek = move_uploaded_file($_FILES['file']['tmp_name'], $dir_upload.$fotonew);}
		$return
	?>
	<?
		if($return){
			echo header("Location:anggota.php");		
			//echo '<a href="lihat_dep.php?id='.$id.'"> Kembali </a>';	//membuat Link untuk kembali ke halaman edit
		} else {
			echo 'Data Gagal Update..!!! ';		
			echo '<a href="anggota.php?id='.$id.'"> Kembali </a>';		
			} 
		}else{	
			echo '<script>window.history.back()</script>';
		}
	?>