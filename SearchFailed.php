<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->
<head>

	<div align="center">
		<h1>Movie DB</h1>
	</div>
	
	<script type="text/javascript">
		function goMain()
		{
			window.location.href='Main.php';
		}

		function goAdd()
		{
			window.location.href='AddMovie.php';
		}
	</script>

</head>

<?php

	echo "Film Bulunamadı. Eklemek ister misiniz?";

?>

<input name="Back" type="Button" value="Geri" onclick="goMain()">
<input name="Add" type="Button" value="Ekle" onclick="goAdd()">