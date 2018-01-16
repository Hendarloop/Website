<?php
if(isset($_POST['tambah'])){	
	include('koneksi.php');
	$keterangan	= $_POST['keterangan'];	
	$waktu 	= $_POST['waktu'];	
	$input	    = mysql_query("INSERT INTO tabel_berita (keterangan, waktu) VALUES 
						('$keterangan', '$waktu')") or die(mysql_error());
?>	
	<?php
		if($input){
			echo  header("Location:berita.php");		
		} else {	
			echo 'Data Gagal di Proses! ';		
			echo '<a href="tambah.php"> Ulangi  </a>';		
		}
		} else {	
			echo '<script>window.history.back()</script>';
		}
	?>