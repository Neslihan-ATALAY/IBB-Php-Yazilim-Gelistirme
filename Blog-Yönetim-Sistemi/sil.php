<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
$sql = "SELECT * FROM yazilar WHERE id=".$_REQUEST['ID']."";
$sonuc = $baglanti->query($sql);
if ($sonuc->num_rows > 0) {
	while($row = $sonuc->fetch_assoc()) {
		//Silme formu
		echo "Confirm ('".$row['baslik']."' başlıklı ve '".$row["tarih"]."' tarihli saatli yazı silinsin mi?)";
		echo '<br><br>
		<a href="silme.php?ID='.$row["id"].'">OK (Yazı Silinsin)</a>   
		<a href="index.php">CANCEL (Yazı Silinmesin)</a>';
	}
} else {
	echo "No record! (İlgili yazı veritabanında bulunamadı! Lütfen tekrar deneyiniz.)";
	echo "<br><br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
}
$baglanti->close();
?>
