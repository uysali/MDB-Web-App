<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<div align="center">
	<h1>Movie DB</h1>
</div>

<?php
	echo "Kayıt işlemi başarılı <br>";
	echo "Artık giriş yapabilirsiniz <br>";
?>

<head>
	<script type="text/javascript">
		function goLogin()
		{
			window.location.href='Login.php';
		}
	</script>

</head>

<input type="button" name="ToLogin" value="Login" onclick="goLogin()"></td> 