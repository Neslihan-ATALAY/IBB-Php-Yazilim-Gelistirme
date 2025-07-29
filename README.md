# IBB-Php-Yazilim-Gelistirme

#Tech İstanbul #İBB #Php ile Yazılım Geliştirme #Php #MySql #Blog #Yazilar #Yazi Ekle #Düzenle #Sil #Detay.

Proje 1: Blog Yazısı Yönetimi Sistemi
-----------------------------------------

Amaç: Kullanıcıların blog yazısı ekleyebileceği, düzenleyebileceği ve silebileceği bir sistem.

Neden Önemli?
----------------
CRUD işlemlerinin temelini oluşturur. Veritabanına veri nasıl girilir, düzenlenir, silinir öğretilir.

Veritabanı Şeması
-----------------------
CREATE DATABASE blog;
USE blog;
CREATE TABLE yazilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(255),
    icerik TEXT,
    tarih DATETIME DEFAULT CURRENT_TIMESTAMP
);


Dosyalar
----------------
Dosya: Açıklama
----------------
index.php: Tüm yazıları listeler.
ekle.php: Yeni yazı ekleme formu ve işlemi.
duzenle.php?id=1: Belirtilen ID'ye göre yazıyı düzenler.
sil.php?id=1: Belirtilen ID'ye göre yazıyı siler.

Öğrenilen Konular
-------------------
* MySQLi ile veritabanı işlemleri
* CRUD işlemleri
* GET/POST metotları
* Dinamik içerik gösterimi
