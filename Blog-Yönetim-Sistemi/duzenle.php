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
		$tarihvesaat[] = explode(" ", $row["tarih"]);	
		foreach($tarihvesaat as [$tar, $saa]) {
			$tarih = $tar;
			$saat = $saa;
		}
		// Duzenleme formu
		echo '
		<form action="duzenleme.php" method="post">
			ID:<br><input type="text" name="id" value="'.$row["id"].'"/><br><br>
			HEADER (BAŞLIK):<br><input type="text" style="width:750px" name="baslik" value="'.$row["baslik"].'"/><br><br>
			CONTENT (İÇERİK):<br><textarea cols="100" rows="25" name="icerik">'.$row["icerik"].'</textarea><br><br>
			DATE/TIME (TARİH/SAAT):<br><input type="date" style="width:200px" name="tarih" value="'.$tarih.'"/>
			<input type="time" style="width:100px" name="saat" value="'.$saat.'"/><br><br>
			<button type="submit">EDIT (DÜZENLE)</button>
		</form>';
	}
} else {
	echo "No record! (İlgili yazı veritabanında bulunamadı! Lütfen tekrar deneyiniz.)";
    echo "<br><br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
}
$baglanti->close();
?>
