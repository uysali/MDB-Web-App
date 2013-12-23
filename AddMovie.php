<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->
<head>
	<script type="text/javascript">
		function goMain()
		{
			window.location.href='Main.php';
		}
	</script>

</head>

<div align="center">
	<h1>Movie DB</h1>
</div>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form4" method="post" action="MovieAdded.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Film Ekle </strong></td>
					</tr>
					<tr>
						<td width="78">Film Adı</td>
						<td width="6">:</td>
						<td width="294"><input name="filmAdi" type="text" id="filmAdi" ></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Gonder" value="Ekleme Istegi Gonder">
						<input type="button" name="Vazgec" value="Vazgec" onclick="goMain()"></td> 
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>