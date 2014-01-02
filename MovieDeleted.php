<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<html>
	<head>
		<script type="text/javascript">
			function goBack()
			{
				window.location.href='DeleteMovie.php';
			}
		</script>
	</head>
	<body>

	</body>
</html>

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

	$sql="SELECT filmid FROM $tbl_name WHERE user_id='$addedBy'";
	$result=pg_query($sql);
	while ($row=pg_fetch_row($result)) 
	{
		if($row[0]==$filmid)
		{
				$sql="DELETE FROM $tbl_name WHERE filmid='$filmid'";
				$result=pg_query($sql);

				header("location:DeleteSuccess.php");
		}
	}

	echo "Yanlış film ID";

?>

<html>
	<head>
		<input type="button" id="goBack" value="Geri Dön" onclick="goBack()">
	</head>
</html>