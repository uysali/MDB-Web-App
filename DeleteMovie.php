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

			echo "<br><br>";

			echo '<table align="left">
						<form name="form8" method="post" action="MovieDeleted.php">
							<tr>
								<td>
									<b>Film Sil</b>
								</td>
							</tr>
							<tr>
								<td>Film ID</td>
								<td>:</td>
								<td>
									<input type="text" name="filmid" id="filmid">
								</td>
								<td>
									<input type="submit" id="sil" value="Sil">
								</td>
							</tr>
						</form>
					</table>';

		}

		else
		{
			echo "Film Bulunamadı.";
		}
	}	

?>
