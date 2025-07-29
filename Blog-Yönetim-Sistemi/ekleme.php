<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
$baslik = $_POST["baslik"];
$icerik = $_POST["icerik"];
$tarih = $_POST["tarih"];
$saat = $_POST["saat"];
$tarihvesaat = $tarih." ".$saat;
if ($baslik != null || $icerik != null || $tarih != null) {
	$sql = "INSERT INTO yazilar(baslik, icerik, tarih) VALUES('$baslik', '$icerik', '$tarihvesaat')";
	if ($baglanti->query($sql) === TRUE) {
		echo "Successfull (Yazı veritabanına başarılı eklendi.)";
		echo "<br><br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
	} else {
		echo "Unsuccessfull (Yazı veritabanına eklenemedi! Lütfen tekrar deneyiniz.)";
		echo "<br><br><a href='ekle.php'>BACK (GERI)</a>";
	}
	
} else {
	echo "Fill the fields! (Yazı ekleme alanlarını doldurunuz! Lütfen tekrar deneyiniz.)";
	echo "<br><br><a href='ekle.php'>BACK (GERİ)</a>";
}
$baglanti->close();
?>
