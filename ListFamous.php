<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<div align="center">
	<h1>Movie DB</h1>
</div>

<?php
	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=localhost dbname=movieDb user=mert password=qweasd")
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
	$result_str = "";

	$count = pg_num_rows($result);

	if($count>=1){

		while ($row = pg_fetch_row($result)) 
		{
			echo "Result : $row[0] <br>";
			$result_str .= "Result : $row[0] \n";
		}

		session_start();
		$_SESSION['sessionVar'] = $result_str;
	}

	else
	{
		echo "Oyuncu Bulunamadı.";
	}


?>



<br>
<br>
<br>
<br>

<form name="reportFamous" method="post" action="DownloadReport.php">
				<strong>Rapor indirmek için dosya türü seçin</strong>
				<br>
				<br>
				<input name="Radio" type="radio" id="Radio" value="Pdf" checked>PDF
				<br>
				<input name="Radio" type="radio" id="Radio" value="Txt">TXT
				<br>
				<input name="Radio" type="radio" id="Radio" value="Html">HTML
				<br>
				<br>
				<br>
				<input name="indir" type="submit" value="İndir">
			</form>