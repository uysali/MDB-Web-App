<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->
<div align="center">
	<h1>Movie DB</h1>
</div>

<head>
	<script type="text/javascript">
		function goMain()
		{
			window.location.href='Main.php';
		}

		function goMovies()
		{
			window.location.href='MyMovies.php'
		}

		function goSearch()
		{
			window.location.href='Search.php';
		}

		function goStatistics()
		{
			window.location.href='Statistics.php'
		}
	</script>

</head>

<?php 
	session_start();
	if (isset($_SESSION['user']))
	{
		if(isset($_SESSION['admin']))
		{
			echo '<div align="right">
			<a href="AdminPanel.php"> Admin Panel</a>
			</div>';
		}
		echo '<div align="right">
			"Merhaba ';
			echo $_SESSION['user'];
		echo '"</div>';
		echo '<div align="right">
		<a href="Logout.php"> Logout</a>
		</div>';
	}

	else
	{
		echo '<div align="right">
			<a href="Login.php"> Login </a>
			/
			<a href="Register.php"> Register </a>
			</div>';

	}

?>


<table border="1" align="center">
	<tr>
		<td width="200">
			<input type="Button" name="anaSayfa" id="anaSayfa" value="Ana Sayfa" style="width:200px" onclick="goMain()">
		</td>

		<td width="200">
			<input type="Button" name="ayarlar" id="ayarlar" value="Ayarlarım" style="width:200px">
		</td>

		<td width="200">
			<input type="Button" name="filmlerim" id="filmlerim" value="Filmlerim" style="width:200px" onclick="goMovies()">
		</td>

		<td width="200">
			<input type="Button" name="arama" id="arama" value="Arama" style="width:200px" onclick="goSearch()">
		</td>

		<td width="200">
			<input type="Button" name="istatistik" id="istatistik" value="İstatistikler" style="width:200px" onclick="goStatistics()">
		</td>

		<td width="200">
			<input type="Button" name="hakkimizda" id="hakkimizda" value="Hakkımızda / İletişim" style="width:200px">
		</td>

	</tr>
</table>
