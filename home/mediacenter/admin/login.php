<?php
	ob_start();
	session_start();
		$user		= $_POST['username'];
		$password	= $_POST['password'];
		$_SESSION['username'] = $user;
		$Open 		= mysql_connect("localhost","root","");
	
	if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
		$Koneksi = mysql_select_db("db_kas");
	
	if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		
	$sql = "SELECT * FROM user where username='$user'";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	$row = mysql_fetch_array($qry);

	if ($num==0 OR $password!=$row['password']) {
?>
	<script language="JavaScript">
		alert('Username atau Password tidak sesuai !');
		document.location='beranda.php';
	</script>
	<?php
	}
	else {
		$_SESSION['login']=1;
		header("Location: beranda.php");
	}
	mysql_close($Open); //Tutup koneksi engine MySQL
?>