<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->
<head>
	<script type="text/javascript">
		function goMovies()
		{
			window.location.href='MyMovies.php';
		}

	</script>

</head>

<div align="center">
	<h1>Movie DB</h1>
</div>

<table width="300" align="center">
	<form name="form6" method="post" action="MovieAdded.php">
		<tr>
			<td>
				<b>
					Film Ekle
				</b>
			</td>
		</tr>
		<tr>
			<td>Film Adı</td>
			<td>:</td>
			<td>
				<input type="text" name="filmAdi" id="filmAdi">
			</td>
		</tr>
		<tr>
			<td>Poster URL</td>
			<td>:</td>
			<td>
				<input type="text" name="poster" id="poster">
			</td>
		</tr>
		<tr>
			<td>Fragman URL</td>
			<td>:</td>
			<td>
				<input type="text" name="fragman" id="fragman">
			</td>
		</tr>
		<tr>
			<td>Yıl</td>
			<td>:</td>
			<td>
				<input type="text" name="yil" id="yil">
			</td>
		</tr>
		<tr>
			<td>Puanınız</td>
			<td>:</td>
			<td>
				<select name="puan">
					<option value="10">10</option>
					<option value="9">9</option>
					<option value="8">8</option>
					<option value="7">7</option>
					<option value="6">6</option>
					<option value="5">5</option>
					<option value="4">4</option>
					<option value="3">3</option>
					<option value="2">2</option>
					<option value="1">1</option>
					<option value="0">0</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Özet</td>
			<td>:</td>
			<td>
				<input type="text" name="ozet" id="ozet">
			</td>
		</tr>
		<tr>
			<td>Ülke</td>
			<td>:</td>
			<td>
				<input type="text" name="ulke" id="ulke">
			</td>
		</tr>
		<tr>
			<td>Hasılat</td>
			<td>:</td>
			<td>
				<input type="text" name="hasilat" id="hasilat">
			</td>
		</tr>
		<tr>
			<td>Bütçe</td>
			<td>:</td>
			<td>
				<input type="text" name="butce" id="butce">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="ekle" id="ekle" value="Ekle">
				<input type="button" name="vazgec" id="vazgec" value="Vazgeç" onclick="goMovies()">
			</td>
		</tr>
	</form>
</table>