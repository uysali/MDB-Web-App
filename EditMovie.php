<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->
<head>
	<script type="text/javascript">
		function goMovies()
		{
			window.location.href='MyMovies.php';
		}

	</script>

</head>

<div align="center">
	<h1>Movie DB</h1>
</div>

<?php

	session_start();

	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 
	$tbl_name="film"; // Table name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=localhost dbname=movieDb user=mert password=qweasd")
	    or die('Could not connect: ' . pg_last_error());

	if(isset($_SESSION['user']))
	{
		echo "<b><u>Filmlerim</u></b><br>";
		echo "<u>id</u>&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<u>Film Adı</u><br>";

		$addedBy=$_SESSION['user'];
		$sql1="SELECT user_id FROM kullanici WHERE username='$addedBy'";
		$result=pg_query($sql1);
		$row=pg_fetch_row($result);
		$addedBy=$row[0];

		$sql="SELECT filmid,film_isim FROM $tbl_name WHERE user_id='$addedBy'";
		$result=pg_query($sql);
		$count = pg_num_rows($result);

		if($count>=1){

			while ($row = pg_fetch_row($result)) 
			{
				echo "$row[0]&nbsp;&nbsp;";
				echo ":&nbsp;&nbsp;";
				echo "$row[1] <br>";
			}

		}

		else
		{
			echo "Film Bulunamadı.";
		}

	}


?>

<table width="300" align="center">
	<form name="form6" method="post" action="MovieEdit.php">
		<tr>
			<td>
				<b>
					Film Düzelt
				</b>
			</td>
		</tr>
		<tr>
			<td>Film ID</td>
			<td>:</td>
			<td>
				<input type="text" name="filmid" id="filmid">
			</td>
		</tr>
		<tr>
			<td>Film Adı</td>
			<td>:</td>
			<td>
				<input type="text" name="filmAdi" id="filmAdi">
			</td>
		</tr>
		<tr>
			<td>Poster URL</td>
			<td>:</td>
			<td>
				<input type="text" name="poster" id="poster">
			</td>
		</tr>
		<tr>
			<td>Fragman URL</td>
			<td>:</td>
			<td>
				<input type="text" name="fragman" id="fragman">
			</td>
		</tr>
		<tr>
			<td>Yıl</td>
			<td>:</td>
			<td>
				<input type="text" name="yil" id="yil">
			</td>
		</tr>
		<tr>
			<td>Puanınız</td>
			<td>:</td>
			<td>
				<select name="puan">
					<option value="10">10</option>
					<option value="9">9</option>
					<option value="8">8</option>
					<option value="7">7</option>
					<option value="6">6</option>
					<option value="5">5</option>
					<option value="4">4</option>
					<option value="3">3</option>
					<option value="2">2</option>
					<option value="1">1</option>
					<option value="0">0</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Özet</td>
			<td>:</td>
			<td>
				<input type="text" name="ozet" id="ozet">
			</td>
		</tr>
		<tr>
			<td>Ülke</td>
			<td>:</td>
			<td>
				<input type="text" name="ulke" id="ulke">
			</td>
		</tr>
		<tr>
			<td>Hasılat</td>
			<td>:</td>
			<td>
				<input type="text" name="hasilat" id="hasilat">
			</td>
		</tr>
		<tr>
			<td>Bütçe</td>
			<td>:</td>
			<td>
				<input type="text" name="butce" id="butce">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="duzelt" id="duzelt" value="Düzelt">
				<input type="button" name="vazgec" id="vazgec" value="Vazgeç" onclick="goMovies()">
			</td>
		</tr>
	</form>
</table>