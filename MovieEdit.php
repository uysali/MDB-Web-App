<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

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
	$addedBy=$_SESSION['user'];
	$sql1="SELECT user_id FROM kullanici WHERE username='$addedBy'";
	$result=pg_query($sql1);
	$row=pg_fetch_row($result);
	$addedBy=$row[0];

	$filmid=$_POST['filmid'];
	$filmAdi=$_POST['filmAdi'];
	$poster=$_POST['poster'];	
	$fragman=$_POST['fragman'];
	$yil=$_POST['yil'];
	$puan=$_POST['puan'];
	$ozet=$_POST['ozet'];
	$ulke=$_POST['ulke'];
	$hasilat=$_POST['hasilat'];
	$butce=$_POST['butce'];

	$filmAdi=stripslashes($filmAdi);
	$poster=stripslashes($poster);
	$fragman=stripslashes($fragman);
	$yil=intval($yil);
	$puan=intval($puan);
	$ozet=stripslashes($ozet);
	$ulke=stripslashes($ulke);
	$butce=intval($butce);
	$hasilat=intval($hasilat);

	$sql="SELECT filmid FROM $tbl_name WHERE user_id='$addedBy'";
	$result=pg_query($sql);
	while ($row=pg_fetch_row($result)) 
	{
		if($row[0]==$filmid)
		{
				$sql="UPDATE $tbl_name SET posterurl='$poster',film_isim='$filmAdi',fragman_link='$fragman', yil='$yil',puan='$puan',
				ozet='$ozet', ulke='$ulke', hasilat='$hasilat', butce='$butce' WHERE user_id='$addedBy'";
				$result=pg_query($sql);

				header("location:EditSuccess.php");
		}
	}

	echo "Yanlış film ID";


?>