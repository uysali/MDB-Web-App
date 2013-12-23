<?php
	echo "Succesfully Registered <br>";
	echo "You can now log in <br>";
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