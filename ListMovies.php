<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());


		$content = $_POST['content'];
		$content = stripslashes($content);

	$mdbMax = intval($_POST['mdbMax']);
	$mdbMin = intval($_POST['mdbMin']);
	$imdbMax = intval($_POST['imdbMax']);
	$imdbMin = intval($_POST['imdbMin']);

	if(empty($_POST['mdbMax']))
	{
		$mdbMax = 10;
	}

	if(empty($_POST['mdbMin']))
	{
		$mdbMin = 0;
	}
	
	if(empty($_POST['imdbMax']))
	{
		$imdbMax = 10;
	}	

	if(empty($_POST['imdbMin']))
	{
		$imdbMin = 0;
	}

	$sql = "SELECT film_isim FROM film WHERE film_isim LIKE '%$content%' AND puan>='$mdbMin' AND puan<='$mdbMax' AND imdb_puan>='$imdbMin' AND imdb_puan<=$imdbMax";

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
		echo "Film Bulunamadı.";
	}


?>