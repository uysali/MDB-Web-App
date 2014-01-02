<head>
	<script type="text/javascript">
		function goRegister()
		{
			window.location.href='Register.php';
		}
	</script>

</head>


<div align="center">
	<h1>Movie DB</h1>
</div>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="CheckLogin.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Member Login </strong></td>
					</tr>
					<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="294"><input name="myusername" type="text" id="myusername" value="ibrahim"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="mypassword" type="password" id="mypassword" value="123456"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Login">
						<input type="button" name="Register" value="Register" onclick="goRegister()"></td> 
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>
