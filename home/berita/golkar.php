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
                    <font size="5">ANGGOTA FRAKSI GOLKAR</font><br><br><br>
                    <table border="1">
							<div><tr bgcolor="#7dc34d" height="40px"><th width="20%"> &nbsp; Nama</th>
									 <th width="10%"> &nbsp; Alamat</th>
									 <th width="5%">&nbsp;Dapil </th></tr></div>
							<div><tr><td>&nbsp;Solecha</td><td>&nbsp;Pekayon Jaya Rt.01 Rw.01 Kel. Pekayon Jaya </td><td>&nbsp;III (Tiga) Kec. Bekasi Selatan - Jatiasih</td></tr></div>
							<div><tr><td>&nbsp;H.Edi, S.Sos</td><td>&nbsp;Jl. Lame Rt ,03/05Kel. Jatikarya Jatisampurna</td><td>&nbsp;</td></tr></div>
							<div><tr><td>&nbsp;Machrul Falak H, ST</td><td>&nbsp;Kp. Rawa Bugel Rt.03 Rw.03 No.20 Marga Mulya</td><td>&nbsp;	VI (Enam) Bekasi Utara</td></tr></div>
							<div><tr><td>&nbsp;H.Maryadi, S.Sos</td><td>&nbsp;Jl.Pejuang Jaya Blok G 178 Rt.03 Rw.15</td><td>&nbsp;V (Lima) Bekasi Barat - Medan Satria</td></tr></div>
							<div><tr><td>&nbsp;Dariyanto, S.Kom</td><td>&nbsp;	Jl. RS. Mekar Sari No.26 Rt.03 Rw.03 Kel. Bekasi Jaya</td><td>&nbsp;I (Satu)</td></tr></div>
							<div><tr><td>&nbsp;Komarudin</td><td>&nbsp;Kp. Ciketing Selatan Rt.03 Rw.06 Ciketing Udik. Bantargebang</td><td>&nbsp;II (Dua)</td></tr></div>
							<div><tr><td>&nbsp;Ury Huryati, SE</td><td>&nbsp;Jl. Raya Narogong No.230 Rt.04/01 Kec.Bojong Rawa Lumbu</td><td>&nbsp;II (Dua)</td></tr></div>
							<div><tr><td>&nbsp;Rahmawati, S.Farm</td><td>&nbsp;Jl. Bonjol No.12 Rt.007/03 Jakasetia Bekasi Selatan</td><td>&nbsp;I (Satu)</td></tr></div>						
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