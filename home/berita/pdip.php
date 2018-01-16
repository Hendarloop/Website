<!DOCTYPE html>
<?php
		include "koneksi.php";
?>
<html>
<head>
<title>DPRD KOTA BEKASI</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/font.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/structure.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><img src ="../berita/images/favicon.png" width="40px" style="margin:-12px 0px 0px 0px;"></a></div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.php">Home</a></li>
            <li class="dropdown"><a href="#">Komisi</a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="pimpinan.php">Pimpinan DPRD</a></li>
					<li><a href="komisi-a.php">Komisi 1</a> </li>
					<li><a href="komisi-b.php">Komisi 2</a></li>
					<li><a href="komisi-c.php">Komisi 3</a></li> 
					<li><a href="komisi-d.php">Komisi 4</a></li>
				 </ul>	
			</li>
            <li class="dropdown"><a href="#">Fraksi</a>
			<ul class="dropdown-menu" role="menu">
					<li><a href="pdip.php">PDI-P</a> </li>
					<li><a href="golkar.php">GOLKAR</a></li>
					<li><a href="gerindra.php">GERINDRA</a></li> 
					<li><a href="hanura.php">HANURA</a></li>
					<li><a href="pan.php">PAN</a></li>
					<li><a href="pkb.php">PKB</a></li>
					<li><a href="pks.php">PKS</a></li>
					<li><a href="demokrat.php">DEMOKRAT</a></li>
					<li><a href="ppp.php">PPP</a></li>
				 </ul>
			</li>
            <li><a href="agenda.php">Agenda</a></li>
            <li><a href="maps.php">Maps</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <form id="searchForm">
      <input type="text" placeholder="Search...">
      <input type="submit" value="">
    </form>
  </div>
</header>
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-6">
        <div class="row">
          <div class="leftbar_content">
            <h2>DPRD KOTA BEKASI</h2><br><br><br>
			 <input type="hidden" value="7" name="id_kategori">   
            <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"></div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner">
                  <div class="stuff_article_inner"> <span class="stuff_date"><strong><?php echo date('d M '); ?></strong></span>
                    <h2>ANGGOTA FRAKSI PDI-P</h2>
                    <table border="1"><br><br><br>
							<div><tr bgcolor="#7dc34d" height="40px"><th width="20%"> &nbsp; Nama</th>
									 <th width="10%"> &nbsp; Alamat</th>
									 <th width="5%">&nbsp;Dapil </th></tr></div>
							<div><tr><td>&nbsp;Asan, ST, PNB</td><td>&nbsp;Jl. Raya Jakasetia Rt.04 Rw.01 Kel. Jakasetia</td><td>&nbsp;III (Tiga) Kec. Bekasi Selatan - Jatiasih</td></tr></div>
							<div><tr><td>&nbsp;Sudirman, SH</td><td>&nbsp;Kp. Rawa Pasung RT/RW. 007/003 Kel.Kalibaru</td><td>&nbsp;</td></tr></div>
							<div><tr><td>&nbsp;Wasimin</td><td>&nbsp;Kavling Bulak Macan Rt.04 Rw.22 Harapan Jaya</td><td>&nbsp;	VI (Enam) Bekasi Utara</td></tr></div>
							<div><tr><td>&nbsp;Reynold F Tambunan</td><td>&nbsp;Jl. Bintara Raya No.5 Jakasampurna, Bekasi Barat</td><td>&nbsp;V (Lima) Bekasi Barat - Medan Satria</td></tr></div>
							<div><tr><td>&nbsp;Tumpak Sidabutar, SE</td><td>&nbsp;Jl. Batu Giok V No.21 Bojong Rawalumbu</td><td>&nbsp;II (Dua) Bantar Gebang - Mustika Jaya</td></tr></div>
							<div><tr><td>&nbsp;Nita Hermawati, SH</td><td>&nbsp;Jl. Dangkul Kalimanggis Rt.03 Rw.06 </td><td>&nbsp;IV (Empat)</td></tr></div>
							<div><tr><td>&nbsp;Anim Imamudin, SE, MM</td><td>&nbsp;Kp. Kranggan RT/RW. 001/004 Kel. Jati Rangga</td><td>&nbsp;</td></tr></div>
							<div><tr><td>&nbsp;Lilik Hariyoso</td><td>&nbsp;Jl. Dewi Sartika RT/RW. 005/008 No.53 Kel. Margahayu</td><td>&nbsp;</td></tr></div>
							<div><tr><td>&nbsp;Ennie Widhiastuti</td><td>&nbsp;Jl. Dahlia No. 277 RT.006/006 Perum.Barata Kel.Harapan Jaya</td><td>&nbsp;VI (Enam)</td></tr></div>
							<div><tr><td>&nbsp;Nuryadi Darmawan</td><td>&nbsp;Komp. Depnaker Blok B 2 No. 66 RT.002/001 Kel. Jaka Setia</td><td>&nbsp;III (Tiga) Kec. Bekasi Selatan - Jatiasih</td></tr></div>
							<div><tr><td>&nbsp;Herman</td><td>&nbsp;Jl. Raya Hankam 46 Jati Melati Pondok Melati</td><td>&nbsp;IV (Empat)</td></tr></div>
							<div><tr><td>&nbsp;H. Tumai, SE</td><td>&nbsp;Kp. Babakan Gg. Ibu Sidin RT/RW. 002/003 No. 65 Kel. Mustika Sari</td><td>&nbsp;	II (Dua) Kec.Rawa Lumbu - Bantar Gebang</td></tr></div>
					   </table><br><br>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Copyright &copy; 2017 All Right Reserved</p>
          <p class="pull-right">DPRD Kota Bekasi</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>