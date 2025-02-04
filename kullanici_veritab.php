<?php
// Veritabanı bağlantı ayarları
$servername = "localhost";
$username = "root"; // xamp kullanıcı adı
$password = "";     // XAMPP şifre (boş olur)
$dbname = "kullanici_sistemi";

// MySQL'e bağlan
$conn = new mysqli($servername, $username, $password);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Veritabanı oluşturma sorgusu
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Veritabanı başarıyla oluşturuldu<br>";
} else {
    echo "Veritabanı oluşturulamadı: " . $conn->error . "<br>";
}

// Veritabanını seç
$conn->select_db($dbname);

// Tablo oluşturma sorgusu
$sql = "CREATE TABLE IF NOT EXISTS kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kullanici_adi VARCHAR(50) NOT NULL,
    sifre VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tablo başarıyla oluşturuldu<br>";
} else {
    echo "Tablo oluşturulamadı: " . $conn->error . "<br>";
}

// Varsayılan kullanıcı ekleme (sadece bir kere çalıştırılması için)
$sifre = password_hash('12345', PASSWORD_DEFAULT); // Şifreyi hashleyelim şifreyi veritabanda güvenli şekide saklamak için default ise temizler
/*Eğer şifreyi düz metin yapsaydık bir saldırgan veri tabanına erişim sağlarsa, kullanıcıların tüm şifrelerini kolayca görülebilir.*/ 
$sql = "INSERT INTO kullanicilar (kullanici_adi, sifre) VALUES ('admin', '$sifre')";
$sifre = password_hash('1579', PASSWORD_DEFAULT);
$sql = "INSERT INTO kullanicilar (kullanici_adi, sifre) VALUES ('efsane', '$sifre')";

if ($conn->query($sql) === TRUE) {
    echo "Kullanıcı başarıyla eklendi<br>";
} else {
    echo "Kullanıcı eklenemedi: " . $conn->error . "<br>";
}

// Bağlantıyı kapat
$conn->close();
?>
