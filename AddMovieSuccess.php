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
	</script>

</head>

<?php

	echo "Film ekleme başarılı.";
	echo "<br>";
	echo "Sitemizin gelişmesine katkıda bulunduğunuz için teşekkür ederiz.";
	echo "<br>";
	echo "Ana sayfaya dönebilirsiniz";

?>

<input type="button" name="goMain" id="goMain" value="Ana Sayfa" onclick="goMain()">