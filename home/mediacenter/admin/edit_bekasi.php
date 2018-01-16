<!DOCTYPE html>
<html>
<head>
	<title>Bekasi</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="../admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../admin/themes/ui-lightness/ui.all.css">
	<script src="../admin/js/jquery-1.8.0.min.js"></script>
	<script src="../admin/ui/ui.core.js"></script>
	<script src="../admin/ui/ui.datepicker.js"></script>
	<script src="../admin/ui/i18n/ui.datepicker-id.js"></script>
	<style type="text/css">
	body {
			padding-top: 15px;
			/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
    </style>
</head>
<script type="text/javascript" language="JavaScript">
	 function konfirmasi()
	 {
	 tanya = confirm("Anda Yakin Keluar ?");
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
	<script type="text/javascript">	 
			$(document).ready(function(){
				$("#tgl").datepicker({
					dateFormat : "yy-mm-dd",
					changeMonth : true,
					changeYear : true
				 });
			 });
	</script>
	<nav>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<!-- <li><a href="anggota.php">Anggota</a></li>  -->
			<li><a href="agenda.php">Agenda</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li><a href="bekasi.php">Profil Bekasi</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>	
	<h3><font face="Cooper Black" style="margin-left:-13px;"> &nbsp; &nbsp; Edit Profil Bekasi </font></h3>
	<p> &nbsp; &nbsp; <a href="bekasi.php" class="btn btn-primary btn-danger">Lihat Data</a></p>
	 
	<?php
	include('koneksi.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM tabel_gambar WHERE id_gambar='$id'");	
		if(mysql_num_rows($show) == 0){	
			echo '<script>window.history.back()</script>';
		} else {
			$data = mysql_fetch_assoc($show);	
		}
	?>
	<form action="edit_proses_bekasi.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0" class="table table-bordered border">
			<tr>
				<td width="200">Keterangan</td>
				<td><div class="col-sm-6"><input type="text" name="keterangan" size="30"  class="form-control"  value="<?php echo $data['keterangan']; ?>" required></div></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td width="200">Foto</td>
				<td><div class="col-sm-4"><input type="file" name="file" class="form-control" ></div>
				<input type='hidden' name='foto' img src=' value='<? $data['foto'] ?>>
				</td>
			</tr>
			<tr>
				<td width="200">&nbsp;</td>
				<td> &nbsp;  &nbsp; <input type="submit" name="simpan" class="btn btn-primary"name="simpan" value="Simpan">
				    <button type="submit" class="btn btn-primary"><a href="bekasi.php"  style="text-decoration:none"><font color="#fff"> Batal </font></a></button></td></td>
			</tr>
		</table>
	</form>
</body>
</html>