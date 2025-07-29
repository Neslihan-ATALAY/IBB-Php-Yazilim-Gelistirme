<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
// Ekleme formu
echo '
    <form action="ekleme.php" method="post">
        <br>
        HEADER (BAŞLIK)<br><input type="text" style="width:750px" name="baslik"/><br><br>
        CONTENT (İÇERİK)<br><textarea name="icerik" rows="25" cols="100"></textarea><br><br>
        DATE/TIME (TARİH/SAAT)<br><input type="date" style="width:200px" name="tarih"/>  
        <input type="time" style="width:100px" name="saat"/><br><br>
        <button type="submit">ADD NEW (YENİ YAZI EKLE)</button>
    </form>';
echo "<br><a href='index.php'>HOMEPAGE (ANASAYFA)</a>";
$baglanti->close();
//print_r(getdate()); $tarih = date("d-m-Y h:i:sa");
?>
