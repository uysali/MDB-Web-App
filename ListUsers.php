<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());

	$username = $_POST['username'];
	$username = stripslashes($username);
	$takipMax = intval($_POST['takipMax']);
	$takipMin = intval($_POST['takipMin']);

	if(empty($_POST['takipMax']))
	{
		$takipMax = 999999;
	}

	if(empty($_POST['takipMin']))
	{
		$takipMin = 0;
	}

	$sql = "SELECT username FROM kullanici WHERE username LIKE '%$username%'AND follower_count<='$takipMax' AND follower_count>='$takipMin'";

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
		echo "Kullanıcı Bulunamadı.";
	}


?>