<!DOCTYPE html>
<html>
<head>
	<title>Kebutuhan</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="../admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../kas/admin/themes/ui-lightness/ui.all.css">
	<script src="../admin/js/jquery-1.8.0.min.js"></script>
	<script src="../admin/ui/ui.core.js"></script>
	<script src="../admin/ui/ui.datepicker.js"></script>
	<script src="../admin/ui/i18n/ui.datepicker-id.js"></script>
	<style>
		body {
			padding-top: 15px;
			/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
    </style>	
</head>

<script type="text/javascript" language="JavaScript">
	 function konfirmasi()
	 {
	 tanya = confirm("Anda Yakin Ingin Keluar ?");
	 if (tanya == true) return true;
	 else return false;
	 }
</script>
<body>
<?php include('akses.php'); ?>
	  <style type="text/css">
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
	<script src="IE9.js"></script>
	<nav>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="lihat_keb.php">Kebutuhan</a>
				<ul>
					<li><a href="lihat_kar.php">Karyawan</a></li>
					<li><a href="lihat_dep.php">Departemen</a></li>
					<li><a href="lihat_jab.php">Jabatan</a></li>
				</ul>
			</li>
			<li><a href="lihat_trans.php">Transaksi</a></li>
			<li><a href="lihat_kas.php">Kas Kecil</a></li>
			<li><a href="#">Laporan</a>
				<ul>
					<li><a href="laporan_pk.php">Laporan PK</a></li>
					<li><a href="laporan_pr.php">laporan PR</a></li>
				</ul>
			</li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
	   	 

<?php
	include ("koneksi.php");	
	
?>
	
	<br><br>
	<h3><font face="Cooper Black"> &nbsp; &nbsp;DATA KEBUTUHAN</font></h3>
	
	 <div class="col-sm-3"><input type="text" name="cari" class="form-control" placeholder="Kode Kebutuhan"></div><input type="submit" class="btn btn-primary btn" value="Cari"><br><br>
	
	
	<table class="table table-bordered border" width="50px">
		<tr bgcolor="#CCCCCC" >
			<th width="50"><p align="center">No</p></th>
			<th><p align="center">Kode Kebutuhan</p></th>
			<th><p align="center">Nama Kebutuhan</p></th>
			<th><p align="center">Jenis Transaksi</p></th>
			<th><p align="center">Aksi</p></th>
		</tr>
		
		<?php
			//iclude file koneksi ke database
			include('koneksi.php');
			$no=1;
			$kode	= $_POST["kode_kebutuhan"];
			$cari   = mysql_query("SELECT * FROM tabel_kebutuhan WHERE kode_kebutuhan like '%$kode%'");
			if ($cari) {
				$jumlah 	= mysql_num_rows($cari);
			}
			{
				if($cari) {
				while ($data = mysql_fetch_array ($cari))
					{
						echo '<tr>';
						echo '<td align=center>'.$no.'</td>';	//menampilkan nomor urut
						echo '<td>'.$data['kode_kebutuhan'].'</td>';	//menampilkan data nis dari database
						echo '<td>'.$data['nama_kebutuhan'].'</td>';	//menampilkan data nama lengkap dari database
						echo '<td>'.$data['kode_trans'].'</td>';	//menampilkan data kelas dari database
						// echo '<td>'.$data['siswa_jurusan'].'</td>';	//menampilkan data jurusan dari database
						echo '<td align=center><a href="edit.php?id='.$data['kode_kebutuhan'].'">Edit</a> |
							  <a href="hapus.php?id='.$data['kode_kebutuhan'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '</tr>';
					
					// $no++;
					
					
					}
				}
			}
		?>
		
	<p> &nbsp; &nbsp;  <a href="tambah.php" class="btn btn-primary btn-danger"> Tambah </a> &nbsp; &nbsp; <?php echo "<b>Kode Kebutuhan <b>$kode</b> Berjumlah : $jumlah Kebutuhan <br>"; ?></p>
	</table>
	
	
	<?php
//	}
		
	?>
	
</body>
</html>