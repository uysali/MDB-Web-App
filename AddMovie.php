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
		<form name="form6" method="post" action="MovieAdded.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Film Ekle </strong></td>
					</tr>
					<tr>
						<td width="150">Film Adı</td>
						<td width="6">:</td>
						<td width="294"><input name="filmAdi" type="text" id="filmAdi" ></td>
					</tr>
					<tr>
						<td>Afiş URL</td>
						<td>:</td>
						<td width="294"><input name="filmAfis" type="text" id="filmAfis" ></td>
					</tr>
					<tr>
						<td>Fragman URL</td>
						<td>:</td>
						<td><input name="fragman" type="text" id="fragman" ></td>
					</tr>
					<tr>
						<td>Yıl</td>
						<td>:</td>
						<td><input name="yil" type="text" id="yil"></td>
					</tr>
					<tr>
						<td>Puanınız</td>
						<td>:</td>
						<td><form>
							<select name="puan">
							<option value="ten">10</option>
							<option value="nine">9</option>
							<option value="eight">8</option>
							<option value="seven">7</option>
							<option value="six">6</option>
							<option value="five">5</option>
							<option value="four">4</option>
							<option value="three">3</option>
							<option value="two">2</option>
							<option value="one">1</option>
							<option value="zero">0</option>
							</select>
							</form>
						</td>
					</tr>
					<tr>
						<td>Özet</td>
						<td>:</td>
						<td><input name="ozet" type="text" id="ozet" ></td>
					</tr>
					<tr>
						<td>Ülke</td>
						<td>:</td>
						<td><input name="ulke" type="text" id="ulke" ></td>
					</tr>
					<tr>
						<td>Hasılat</td>
						<td>:</td>
						<td><input name="hasilat" type="text" id="hasilat" ></td>
					</tr>
					<tr>
						<td>Bütçe</td>
						<td>:</td>
						<td><input name="butce" type="text" id="butce" ></td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Ekle" value="Ekle">
						<input type="button" name="Vazgec" value="Vazgeç" onclick="goMain()"></td> 
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>