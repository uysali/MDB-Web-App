<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<html>
	<head>
		<script type="text/javascript">
			function goAdd()
			{
				window.location.href='AddMovie.php';
			}

			function goDelete()
			{
				window.location.href='DeleteMovie.php';
			}

			function goEdit()
			{
				window.location.href='EditMovie.php';
			}
		</script>
	</head>
<body>

</body>
</html>

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

	if(!isset($_SESSION['user']))
	{
		echo "Bu sayfayı görebilmeniz için giriş yapmanız gerekmektedir";
		echo '<div>
			<a href="Login.php">Login</a>
		</div>';
	}


	elseif(isset($_SESSION['user']))
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



		echo '
		<br><br>
		<table border="1" align="left">
			<tr>
				<td>
					<input type="button" name="filmEkle" id="filmEkle" value="Film Ekle" onclick="goAdd()">
				</td>
				<td>
					<input type="button" name="filmSil" id="filmSil" value="Film Sil" onclick="goDelete()">
				</td>
				<td>
					<input type="button" name="filmEdit" id="filmEdit" value="Film Düzenle" onclick="goEdit()">
				</td>
			</tr>
		</table>
		';

	}

?>