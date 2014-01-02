<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<div align="center">
	<h1>Movie DB</h1>
	<h4>Admin Panel</h4>
</div>

<table border="0" align="center">
	<tr>
		<td width="200">
			<b>Tablo İşlemleri</b>
		</td>
		<td>
			Tablo Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tablo Alanları(Alanları virgül ile ayırınız)
		</td>
	</tr>
	<tr>
		<td>
			Tablo Ekle
		</td>
		<form name="form7" method="post" action="AddTable.php">
			<td>
				<input type="text" name="tabloAdi" id="tabloAdi">

				<input type="text" name="alan" id="alan" style="width:400">
			</td>
			<td>
				<input type="submit" name="tabloEkle" id="tabloEkle" value="Ekle">
			</td>
		</form>
	</tr>
	<tr>
		<td>
			Tablo Sil
		</td>
		<td>
			<input type="text" name="isim" id="isim">
		</td>
		<td>
			<input type="button" name="tabloSil" id="tabloSil" value="Sil">
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Kayıt İşlemleri
			</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>Yönetici İşlemleri</b>
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			<input type="text" name="userId" id="userId">
		</td>
		<td>
			<input type="button" name="adminEkle" id="adminEkle" value="Yönetici Ekle">
		</td>
		<td>
			<input type="button" name="adminSil" id="adminSil" value="Yönetici Sil">
		</td>
	</tr>

</table>