<?php
if(isset($_POST['tambah'])){	
	include('koneksi.php');
	$nama		= $_POST['nama'];	
	$tgl	 	= $_POST['tgl'];	
	$alamat 	= $_POST['alamat'];	
	$fraksi		= $_POST['fraksi'];	
	$komisi		= $_POST['komisi'];	
	$jabatan	= $_POST['jabatan'];	
	$dapil		= $_POST['dapil'];	
	$telepon	= $_POST['telp'];	
	$dir_upload = "foto/";
	$foto		= $_FILES ['file']['name'];
	$input	    = mysql_query("INSERT INTO tabel_anggota (nama, alamat, tgl_lahir, fraksi, komisi, jabatan, dapil, no_telp, foto) VALUES 
						('$nama', '$alamat', '$tgl', '$fraksi', '$komisi', '$jabatan', '$dapil', '$telepon', '$foto')") or die(mysql_error());
?>
	<?php
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			$cek = move_uploaded_file($_FILES['file']['tmp_name'],$dir_upload.$foto);}

	

	?>	
	<?php
		if($input){
			echo  header("Location:anggota.php");		
		} else {	
			echo 'Data Gagal di Proses! ';		
			echo '<a href="tambah.php"> Ulangi  </a>';		
		}
		} else {	
			echo '<script>window.history.back()</script>';
		}
	?>