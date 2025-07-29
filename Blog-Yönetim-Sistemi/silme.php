<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
$sql = "DELETE FROM yazilar WHERE id=".$_REQUEST['ID']."";
$sonuc = $baglanti->query($sql);
if ($sonuc === true) {
    echo "Successfull (Yazı veritabanından başarılı silindi.)";
    echo "<br><br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
} else {
    echo "Unsuccessfull (İlgili yazı veritabanından silinemedi! Lütfen tekrar deneyiniz.)";
    echo "<br><br><a href='sil.php?id".$_REQUEST['ID'].">BACK (GERİ)</a>";
}
$baglanti->close();
?>
