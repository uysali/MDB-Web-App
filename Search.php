<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<table border="1" align="center">
	<tr>
		<td width="200">
			<b>İsim ile Ara</b>
		</td>
		<td width="350">
			<b>Filmleri Listele</b>
		</td>
		<td width="350">
			<b>Oyuncuları Listele</b>
		</td>
		<td width="350">
			<b>Kullanıcıları Listele</b>
		</td>
	</tr>
	<tr>
		<td>
			<form name="form3" method="post" action="SearchByName.php">
				<input name="SearchByName" type="text" id="SearchByName">
				<br>
				<strong>Filmin tam adını giriniz!</strong>
				<br>
				<br>
				<input name="Radio" type="radio" id="Radio" value="Film" checked>Film
				<br>
				<input name="Radio" type="radio" id="Radio" value="Oyuncu">Oyuncu
				<br>
				<input name="Radio" type="radio" id="Radio" value="Yonetmen">Yönetmen
				<br>
				<input name="Radio" type="radio" id="Radio" value="Kullanici">Kullanıcı
				<br>
				<br>
				<br>
				<input name="ara" type="submit" value="Ara">
			</form>
		</td>

		<td>
			<form name="form4" method="post" action="ListMovies.php">
				<table>
					<tr>
						<td>
							<b>İçerdiği Kelime :</b>
						</td>
						<td>
							<input type="text" name="content" id="content">
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<b>MDB Puanı Min :</b>
						</td>
						<td>
							<input type="text" name="mdbMin" id="mdbMin">
							<strong>(0 - 10)</strong>
						</td>
					</tr>
					<tr>
						<td>
							<b>MDB Puanı Max :</b>
						</td>
						<td>
							<input type="text" name="mdbMax" id="mdbMax">
							<strong>(0 - 10)</strong>
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<b>IMDB Puanı Min :</b>
						</td>
						<td>
							<input type="text" name="imdbMin" id="imdbMin">
							<strong>(0 - 10)</strong>
						</td>
					</tr>
					<tr>
						<td>
							<b>IMDB Puanı Max :</b>
						</td>
						<td>
							<input type="text" name="imdbMax" id="imdbMax">
							<strong>(0 - 10)</strong>
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<input type="submit" name="filmAra" value="Filmleri Listele">
						</td>
					</tr>
				</table>
			</form>
		</td>

		<td>
			<form name="form5" method="post" action="ListFamous.php">
				<table>
					<tr>
						<td>
							<b>Oyuncu Adı İçeriği :</b>
						</td>
						<td>
							<input type="text" name="actorname" id="actorname">
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>	
					<tr>
						<td>
							<b>MDB Oyuncu Puanı Min :</b>
						</td>
						<td>
							<input type="text" name="oyuncuMinPuan" id="oyuncuMinPuan">
						</td>
					</tr>
					<tr>
						<td>
							<b>MDB Oyuncu Puanı Max :</b>
						</td>
						<td>
							<input type="text" name="oyuncuMaxPuan" id="oyuncuMaxPuan">
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<input type="submit" name="oyuncuAra" value="Oyuncuları Listele">
						</td>
					</tr>
				</table>
			</form>
		</td>
			
		<td>
		<form name="form6" method="post" action="ListUsers.php">
				<table>
					<tr>
						<td>
							<b>Kullanıcı Adı İçeriği :</b>
						</td>
						<td>
							<input type="text" name="username" id="username">
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<b>Takipçi Sayısı Min :</b>
						</td>
						<td>
							<input type="text" name="takipMin" id="takipMin">
						</td>
					</tr>
					<tr>
						<td>
							<b>Takipçi Sayısı Max :</b>
						</td>
						<td>
							<input type="text" name="takipMax" id="takipMax">
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<input type="submit" name="kullaniciAra" value="Kullanıcıları Listele">
						</td>
					</tr>
				</table>
			</form>
			
		</td>
	</tr>

</table>