<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<html>
<head>
	<script type="text/javascript">
		function goMovies() 
		{
			window.location.href='MyMovies.php';
		}
		function goMain()
		{
			window.location.href='Main.php';
		}
	</script>
</head>
<body>

</body>
</html>

<?php
	echo "Film düzenleme işlemi başarılı";
?>

<html>
	<head>
		<input type="button" name="goMovies" value="Filmlerime Dön" onclick="goMovies()">
		<input type="button" name="goMain" value="Ana Sayfaya Dön" onclick="goMain">
	</head>
</html>