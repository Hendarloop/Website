<!DOCTYPE html>
<html>
<head>
	<title>Media Center</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
		<link rel="stylesheet" href="../admin/assets/css/bootstrap.css">
		<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../admin/assets/css/style.css">
		<script src="../admin/assets/js/bootstrap.js"></script>
		<script src="../admin/assets/js/bootstrap.min.js"></script>
		<script src="../admin/assets/js/jquery.js"></script>
		
		<style type="text/css">
			body {
				padding-top: 15px;
				/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
			}
			
			
			*{
			margin:0;padding:0;
			font-family: ubuntu,segoe ui,calibri,lucida grande,sans-serif;
			}
			html{height:100%;}
			body{
				background:url("wallpaper.jpg");
				background-size:100% 100%;
				height:100%;
			}
			nav{margin-top:0;}
			nav ul {
				list-style:none;
				background-image:-webkit-linear-gradient(top,#ebebeb,#D7D7D7);
				background-color:#D7D7D7;
				margin-top: -14px;
				box-shadow:0 1px 3px rgba(0,0,0,.5);
			}
			nav ul:after{
				content:" ";
				display:block;
				clear:both;
			}
			nav ul li{
				float:left;
				position:relative;
			}

			nav ul li a{
				color:#444;
				display:block;
				padding: 13px 35px;
				text-decoration:none;
				font-size: 12px;
			}
			nav ul ul{
				position:absolute;
				display:none;
				top:100%;
				background:white;
				border-bottom-left-radius:3px;
				border-bottom-right-radius:3px;
			}
			nav ul ul li{
				float:none;
			}
			nav ul li:hover > a, nav ul ul li:hover > a  {
				color :white;
				background-image:-webkit-linear-gradient(top, #506def,#2041DE);
				background-color:#506def;
			}
			
			nav ul li:hover > ul{
				display:block;
			}
			nav ul ul ul{
				position:absolute;
				left:100%;
				top:0;
				border-top-right-radius:3px;
			}
		</style>
	
</head>
<body>
<?php include('akses.php'); ?>
<script type="text/javascript" language="JavaScript">
	 function konfirmasi()
	 {
	 tanya = confirm("Anda Yakin Ingin Keluar ?");
	 if (tanya == true) return true;
	 else return false;
	 }
</script>
	<nav>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<!-- <li><a href="anggota.php">Anggota</a></li> -->
			<li><a href="agenda.php">Agenda</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li><a href="bekasi.php">Profil Bekasi</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
	<h3><font face="Cooper Black"> &nbsp; &nbsp;DATA ANGGOTA DEWAN </font></h3>
	
	<form action="cari_dep.php" method="POST">
	<div class="col-sm-3" style="margin-left:-33px;"><input type="text" name="nama" class="form-control" placeholder="Nama Anggota"></div><input type="submit" class="btn btn-primary btn" value="Cari"></p>
	<table cellpadding="5" cellspacing="0" border="1" class="table table-bordered border">
		<tr bgcolor="#CCCCCC">
			<th><p align="center">No</th>
			<th><p align="center">Nama</th>
			<th><p align="center">Alamat</th>
			<th><p align="center">Tgl Lahir</th>
			<th><p align="center">Fraksi</th>
			<th><p align="center">Komisi</th>
			<th><p align="center">Foto</th>
			<th><p align="center">Aksi</th>
		</tr>
		
	<?php
		include('koneksi.php');
		
		function TanggalIndo($date){
			$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		 
			$tahun = substr($date, 0, 4);
			$bulan = substr($date, 5, 2);
			$tgl   = substr($date, 8, 2);	 
			$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
			return($result);
		}
		
		$query = mysql_query("SELECT * FROM tabel_anggota ORDER BY id_anggota DESC LIMIT 50") or die(mysql_error());		
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			} else {				
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){		
				echo '<tr>';
					echo '<td align=center>'.$no.'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['alamat'].'</td>';
					echo '<td>'.TanggalIndo($data['tgl_lahir']).'</td>';
					echo '<td>'.$data['fraksi'].'</td>';
					echo '<td>'.$data['komisi'].'</td>';
		?>
			<td  align="center"><img class="transi-and-center" src="foto/<?php echo"$data[foto]"; ?>" width="20" height="20">
					
	<?php
		echo '<td align=center><a href="edit_anggota.php?id='.$data['id_anggota'].'">Edit</a>';
				//echo ' | <a href="hapus_dep.php?id='.$data['id_anggota'].'" onclick="return confirm(\'Yakin?\')">Hapus</a>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '</td></tr>';
				
				$no++;			
			}	
		}
	?>
	
	<p> &nbsp;  &nbsp; <a href="form_anggota.php" class="btn btn-primary btn-danger"> Tambah </a> 
	</table>	
</body>
</html>