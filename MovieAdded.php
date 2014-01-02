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

	session_start();

	$filmAdi=$_POST['filmAdi'];
	$poster=$_POST['poster'];	
	$fragman=$_POST['fragman'];
	$yil=$_POST['yil'];
	$puan=$_POST['puan'];
	$ozet=$_POST['ozet'];
	$ulke=$_POST['ulke'];
	$hasilat=$_POST['hasilat'];
	$butce=$_POST['butce'];

	$addedBy=$_SESSION['user'];
	$sql1="SELECT user_id FROM kullanici WHERE username='$addedBy'";
	$result=pg_query($sql1);
	$row=pg_fetch_row($result);
	$addedBy=$row[0];

	$filmAdi=stripslashes($filmAdi);
	$poster=stripslashes($poster);
	$fragman=stripslashes($fragman);
	$yil=intval($yil);
	$puan=intval($puan);
	$ozet=stripslashes($ozet);
	$ulke=stripslashes($ulke);
	$butce=intval($butce);
	$hasilat=intval($hasilat);
	
	echo $filmAdi;
	echo $poster;
	echo $fragman;
	echo $yil;
	echo $puan;
	echo $ozet;
	echo $ulke;
	echo $hasilat;
	echo $butce;
	echo $addedBy;




	$sql="INSERT INTO $tbl_name VALUES(DEFAULT,'$poster','$filmAdi',1,0,'$fragman','$yil','$puan',0,'$ozet','$ulke','$hasilat','$butce','$addedBy')";
	$result=pg_query($sql);
	$count=pg_num_rows($result);

	header("location:AddMovieSuccess.php");

?>
