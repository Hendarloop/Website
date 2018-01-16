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
	<script type="text/javascript" language="JavaScript">
		 function konfirmasi()
		 {
		 tanya = confirm("Anda Yakin Keluar ?");
		 if (tanya == true) return true;
		 else return false;
		 }
	</script>
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
<body>
<?php include('akses.php'); ?>
	<script src="IE9.js"></script>
	<nav>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="anggota.php">Anggota</a></li>
			<li><a href="agenda.php">Agenda</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li><a href="bekasi.php">Profil Bekasi</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
	<h3><font face="Cooper Black"> &nbsp; &nbsp;Tambah Profil Bekasi</font></h3>
	<p> &nbsp; &nbsp; <a href="bekasi.php" class="btn btn-primary btn-danger">Lihat Data</a></p>
	
	<form action="tambah_bekasi.php" method="POST" enctype="multipart/form-data">
		<table cellpadding="3" cellspacing="0" class="table table-bordered border">
			<tr>
				<td width="200">Keterangan</td>
				<td><div class="col-sm-6"><input type="text" name="keterangan" class="form-control" placeholder="Keterangan" size="30" required></div></td>
			</tr>	
			<tr>
				<td width="200">Foto</td>
				<td><div class="col-sm-4"><input type="file" name="file" class="form-control" ></div></td>
			</tr>
			
			<tr>
				<td width="200">&nbsp;</td>
				<td>  &nbsp;  &nbsp; <input type="submit" name="tambah" class="btn btn-primary" value="Tambah"> &nbsp; 
					<input type="reset" name="reset" class="btn btn-primary" value="Cancel"></td>
			</tr>
		</table>
	</form>
</body>
<!-- w27O1C -->
</html>