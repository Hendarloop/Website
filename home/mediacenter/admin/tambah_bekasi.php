<?php
if(isset($_POST['tambah'])){	
	include('koneksi.php');
	$keterangan	= $_POST['keterangan'];	
	$dir_upload = "foto/";
	$foto		= $_FILES ['file']['name'];
	$input	    = mysql_query("INSERT INTO tabel_gambar (keterangan, foto) VALUES 
						('$keterangan', '$foto')") or die(mysql_error());
?>
	<?php
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			$cek = move_uploaded_file($_FILES['file']['tmp_name'],$dir_upload.$foto);}

	

	?>	
	<?php
		if($input){
			echo  header("Location:bekasi.php");		
		} else {	
			echo 'Data Gagal di Proses! ';		
			echo '<a href="tambah.php"> Ulangi  </a>';		
		}
		} else {	
			echo '<script>window.history.back()</script>';
		}
	?>