<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=localhost dbname=movieDb user=mert password=qweasd")
	    or die('Could not connect: ' . pg_last_error());

	$category=$_POST['Radio'];

	if($category=="Film")
	{
		$tbl_name="film";
		$movieName=$_POST['SearchByName'];
		$movieName=stripslashes($movieName);

		$sql="SELECT film_isim FROM film WHERE film_isim='$movieName'";

		$result=pg_query($sql);

		$count=pg_num_rows($result);
	}

	elseif($category=="Oyuncu")
	{
		$tbl_name="oyuncu";
		$actorName=$_POST['SearchByName'];

		$sql="SELECT oyuncu_name FROM oyuncu WHERE oyuncu_name='$actorName'";

		$result=pg_query($sql);

		$count=pg_num_rows($result);
	}

	elseif($category=="Yonetmen")
	{
		$tbl_name="yonetmen";
		$directorName=$_POST['SearchByName'];

		$sql="SELECT yonetmen_isim FROM yonetmen WHERE yonetmen_isim='$directorName'";

		$result=pg_query($sql);

		$count=pg_num_rows($result);
	}

	elseif($category=="Kullanici")
	{
		$tbl_name="kullanici";
		$username1=$_POST['SearchByName'];

		$sql="SELECT username FROM kullanici WHERE username='$username1'";

		$result=pg_query($sql);

		$count=pg_num_rows($result);
	}

	$sql="SELECT film_isim,yil FROM film WHERE film_isim='$movieName'";

	$result=pg_query($sql);

	$count=pg_num_rows($result);

	if($count==1){

		while ($row = pg_fetch_row($result)) 
		{
			echo "Result : $row[0] <br>";
		}

	}

	else
	{
		header("location:SearchFailed.php");

	}

?>