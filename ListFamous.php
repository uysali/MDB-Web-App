<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());

	$actorname = $_POST['actorname'];
	$actorname = stripslashes($actorname);
	$puanMax = intval($_POST['oyuncuMaxPuan']);
	$puanMin = intval($_POST['oyuncuMinPuan']);

	if(empty($_POST['oyuncuMaxPuan']))
	{
		$puanMax = 10;
	}

	if(empty($_POST['oyuncuMinPuan']))
	{
		$puanMin = 0;
	}

	$sql = "SELECT oyuncu_name FROM oyuncu WHERE oyuncu_name LIKE '%$actorname%'AND oyuncu_puan<='$puanMax' AND oyuncu_puan>='$puanMin'";

	$result = pg_query($sql);

	$count = pg_num_rows($result);

	if($count>=1){

		while ($row = pg_fetch_row($result)) 
		{
			echo "Result : $row[0] <br>";
		}

	}

	else
	{
		echo "Oyuncu Bulunamadı.";
	}


?>