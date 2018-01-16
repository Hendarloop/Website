<?php
if(isset($_POST['tambah'])){	
	include('koneksi.php');
	$tgl		= $_POST['tgl'];	
	$jam	 	= $_POST['jam'];	
	$agenda 	= $_POST['agenda'];	
	$tempat		= $_POST['tempat'];	
	$keterangan	= $_POST['keterangan'];	
	$input	    = mysql_query("INSERT INTO tabel_agenda (tanggal, jam, agenda, tempat, keterangan) VALUES 
						('$tgl', '$jam', '$agenda', '$tempat', '$keterangan')") or die(mysql_error());
?>	
	<?php
		if($input){
			echo  header("Location:agenda.php");		
		} else {	
			echo 'Data Gagal di Proses! ';		
			echo '<a href="tambah.php"> Ulangi  </a>';		
		}
		} else {	
			echo '<script>window.history.back()</script>';
		}
	?>