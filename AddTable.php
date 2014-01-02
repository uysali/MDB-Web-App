<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());


	$tabloAdi=$_POST['tabloAdi'];
	$alanlar=$_POST['alan'];

	$tabloAdi=stripslashes($tabloAdi);
	$alanlar=stripslashes($alanlar);

	$fields=explode(',', $alanlar);

	$sql="CREATE TABLE $tabloAdi "

?>