<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<div align="center">
	<h1>Movie DB</h1>
</div>

<head>
	<script type="text/javascript">
		function goMain()
		{
			window.location.href='Main.php';
		}
	</script>

</head>

<?php

	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 
	$tbl_name="film"; // Table name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=localhost dbname=movieDb user=mert password=qweasd")
	    or die('Could not connect: ' . pg_last_error());

	$filmAdi=$_POST['filmAdi'];
	$afis=$_POST['filmAfis']
	$fragman=$_POST['fragman'];
	$yil=$_POST['yil'];
	$puan=$_POST['puan'];
	$ozet=$_POST['ozet'];
	$ulke=$_POST['ulke'];
	$hasilat=$_POST['hasilat'];
	$butce=$_POST['butce'];

	$filmAdi=stripslashes($filmAdi);
	$afis=stripslashes($afis);
	$fragman=stripslashes($fragman);
	$yil=stripslashes($yil);
	$puan=stripslashes($puan);
	$ozet=stripslashes($ozet);
	$ulke=stripslashes($ulke);
	$butce=stripslashes($butce);
	$hasilat=stripslashes($hasilat);


	$sql="INSERT INTO $tbl_name VALUES(DEFAULT,'$filmAfis','$filmAdi',1,0,'$fragman','$yil','$puan',0,'$ozet','$ulke','$hasilat','$butce')";
	$result=pg_query($sql);
	$count=pg_num_rows($result);

	header("location:AddMovieSuccess.php");

?>
