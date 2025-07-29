<?php
include 'baglan.php';
$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($baglanti->connect_error) {
	die("Bağlantı Hatası: " . $baglanti->connect_error);
}
echo '<br><br><center><table><tr><td><h1>BLOG YAZILARI</h1></td><td><form action="ekle.php">
		<button type="submit" name="ekle">ADD NEW (YENİ YAZI EKLE)</button>
	</form><td/></tr></table></center><br>';
$sql = "SELECT * FROM yazilar ORDER BY tarih desc";
$sonuc = $baglanti->query($sql);
if ($sonuc->num_rows > 0) {
	// Listeleme formu
	echo '<form action="" method="POST"><table>
		<tr><th>ID</th><th>HEADER (BAŞLIK)</th><th>CONTENT (İÇERİK)</th><th>DATE/TIME(TARİH/SAAT)</th>
		<th>EDIT (DÜZENLE)</th><th>DELETE (SİL)</th><th>DETAIL (DETAY)</th></tr>';
		while($row = $sonuc->fetch_assoc()) {
			echo '<tr>
				<td>&nbsp;<input type="label" disabled name="id" value="'.$row['id'].'">&nbsp;</td>
				<td>&nbsp;<input type="label" name="baslik" value="'.$row['baslik'].'">&nbsp;</td>
				<td>&nbsp;<input type="label" name="icerik" value="'.$row['icerik'].'">&nbsp;</td>
				<td>&nbsp;&nbsp;&nbsp;<input type="label" name="tarih" value="'.$row['tarih'].'">&nbsp;&nbsp;&nbsp;</td>
				<td>&nbsp;<a href="duzenle.php?ID='.$row['id'].'">EDIT (DÜZENLE)</a>&nbsp;</td>
				<td>&nbsp;<a href="sil.php?ID='.$row['id'].'">DELETE (SİL)</a>&nbsp;</td>
				<td>&nbsp;<a href="detay.php?ID='.$row['id'].'">DETAIL (DETAY)</a>&nbsp;</td>	
			</tr>';
		}
		echo '</table>
	</form>';
} else {
	echo "<br><br>No record! (Yazılar listesinde hiç kayıt yoktur!)";
}
$baglanti->close();
?>
