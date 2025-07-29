<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
$id = $_POST['id'];
$baslik = $_POST['baslik'];
$icerik = $_POST['icerik'];
$tarih = $_POST["tarih"];
$saat = $_POST["saat"];
$tarihvesaat = $_POST["tarih"].' '.$_POST["saat"];
if ($baslik != null || $icerik != null || $tarihvesaat != null) {
	$sql = "UPDATE yazilar SET baslik = '$baslik', icerik = '$icerik', tarih='$tarihvesaat' WHERE id=$id";
	$sonuc = $baglanti->query($sql);
	if ($sonuc === true) {
		echo "Successfull (İlgili yazı veritabanında başarılı güncellendi.)";
		echo "<br><br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
	} else {
		echo "Unsuccessfull (İlgili yazı veritabanında güncellenemedi! Lütfen tekrar deneyiniz.)";
		echo "<br><br><a href='duzenle.php?id=".$id.">BACK (GERİ)</a>";
	}	
} else {
	echo "Fill the fields (Yazı düzenleme alanlarını doldurunuz! Lütfen tekrar deneyiniz.)";
	echo "<br><br><a href='duzenle.php?id".$id."'>BACK (GERİ)</a>";
}
$baglanti->close();
?>
