<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />		<!-- Turkce karakter sorunu-->

<?php

	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());

	$sql=pg_query("SELECT COUNT (*) FROM kullanici");
	$result=pg_fetch_array($sql);
	$toplamUye=$result[0];
	echo "Toplam üye sayısı : ".$toplamUye;

	$sql=pg_query("SELECT COUNT(*) FROM film");
	$result=pg_fetch_array($sql);
	$toplamFilm=$result[0];
	echo "<br>Toplam film sayısı : ".$toplamFilm;

	$sql=pg_query("SELECT COUNT(*) FROM oyuncu");
	$result=pg_fetch_array($sql);
	$toplamOyuncu=$result[0];
	echo "<br>Toplam oyuncu sayısı : ".$toplamOyuncu;

	$sql=pg_query("SELECT COUNT(*) FROM yonetmen");
	$result=pg_fetch_array($sql);
	$toplamYonetmen=$result[0];
	echo "<br>Toplam yönetmen sayısı : ".$toplamYonetmen;

	$sql=pg_query("SELECT film_isim FROM film WHERE izleyen_sayisi=(SELECT MAX(izleyen_sayisi) FROM film)");
	$sql2=pg_query("SELECT MAX(izleyen_sayisi) FROM film");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$filmAdi=$result[0];
	$maxIzlenme=$result2[0];
	echo "<br>En çok izlenen film : $filmAdi ($maxIzlenme) izlenme";

	$sql=pg_query("SELECT film_isim FROM film WHERE izleyen_sayisi=(SELECT MIN(izleyen_sayisi) FROM film)");
	$sql2=pg_query("SELECT MIN(izleyen_sayisi) FROM film");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$filmAdi=$result[0];
	$minIzlenme=$result2[0];
	echo "<br>En az izlenen film : $filmAdi ($minIzlenme)";

	$sql=pg_query("SELECT SUM(izleyen_sayisi) FROM film");
	$result=pg_fetch_array($sql);
	$toplamFilmIzleme=$result[0];
	echo "<br>Toplam film izleme : $toplamFilmIzleme";

	$sql=pg_query("SELECT username FROM kullanici WHERE film_sayisi=(SELECT MAX(film_sayisi) FROM kullanici)");
	$sql2=pg_query("SELECT MAX(film_sayisi) FROM kullanici");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$uyeAdi=$result[0];
	$filmSayisi=$result2[0];
	echo "<br>En çok film izleyen üye : $uyeAdi ($filmSayisi)";

	$sql=pg_query("SELECT username FROM kullanici WHERE film_sayisi=(SELECT MIN(film_sayisi) FROM kullanici)");
	$sql2=pg_query("SELECT MIN(film_sayisi) FROM kullanici");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$uyeAdi=$result[0];
	$filmSayisi=$result2[0];
	echo "<br>En az film izleyen üye : $uyeAdi ($filmSayisi)";

	$sql=pg_query("SELECT AVG(film_sayisi) FROM kullanici");
	$result=pg_fetch_array($sql);
	$ortalamaFilm=$result[0];
	$ortalamaFilm=intval($ortalamaFilm);
	echo "<br>Ortalama film izleme sayısı : $ortalamaFilm";

	$sql=pg_query("SELECT username FROM kullanici WHERE following_count=(SELECT MAX(following_count) FROM kullanici)");
	$sql2=pg_query("SELECT MAX(following_count) FROM kullanici");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$maxfollowing=$result[0];
	$takipSayisi=$result2[0];
	echo "<br>En çok üyeyi takip eden kullanıcı : $maxfollowing ($takipSayisi)";

	$sql=pg_query("SELECT username FROM kullanici WHERE follower_count=(SELECT MAX(follower_count) FROM kullanici)");
	$sql2=pg_query("SELECT MAX(follower_count) FROM kullanici");
	$result=pg_fetch_array($sql);
	$result2=pg_fetch_array($sql2);
	$maxfollower=$result[0];
	$takipciSayisi=$result2[0];
	echo "<br>En çok takip edilen kullanıcı : $maxfollower ($takipciSayisi)";

?>