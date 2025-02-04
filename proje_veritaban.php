<html>
<head>
    <style>
        table {
            width: 100%; /* Tabloyu genişletiyoruz */
            margin: auto; /* Ortalıyoruz */
                               /*border-collapse: collapse /* Hücre sınırlarını birleştiriyoruz */
            flex-grow: 1;    
            background-size: cover;                
         }

        th, td {
            padding: 20px; /* Hücreleri büyütüyoruz */
            text-align: center; /* Yazıları ortalıyoruz */
        }

        th {
            background-color:rgb(161, 131, 131); /* Başlık hücreleri için arka plan rengi */
        }

    td {
        font-size: 18px; /* Yazı boyutunu büyütüyoruz */
            background-color:rgb(235, 137, 137); 
        }

        table, th, td {
            border: 2px solid black; /* Tablonun kenarlarını kalınlaştırıyoruz */
        }
    </style>
</head>    

<body>

<?php
ini_set('display_errors', 1); // Hata raporlamayı açar.
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";

// Veritabanı bağlantısı oluşturma
$conn = new mysqli($servername, $username, $password, "myDb");

// Bağlantı hatası varsa programı durdur ve hata mesajını göster
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Veritabanını seç
$conn->select_db("myDb");

// Tablo oluşturma (id ekledik)
$sql = "CREATE TABLE IF NOT EXISTS gezi (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sehirler VARCHAR(30) NOT NULL,
    yerler VARCHAR(50) NOT NULL
)";
$conn->query($sql);

// Tabloyu sıfırlama
$sql = "TRUNCATE TABLE gezi";
$conn->query($sql);

// Aynı şehir için birden fazla yer ekleme
$sql = "INSERT INTO gezi (sehirler, yerler) VALUES
    ('Ankara', 'Anıtkabir'),
    ('Ankara', 'Anadolu Medeniyetler Müzesi'),
    ('Ankara', 'Ankara Kalesi'),
    ('Ankara', 'Ulucanlar Cezaevi Müzesi'),
    ('Ankara', 'Altınpark'),
    ('Ankara', 'Mogan Gölü'),
      ('İstanbul', 'Topkapı Sarayı'),
      ('İstanbul', 'Galata Kulesi'),
      ('İstanbul', 'Kapalı Çarşı'),
      ('İstanbul', 'Göztepe 60. Yıl Parkı'),
      ('İstanbul', 'Yerebatan Sarnıcı'),
        ('İzmir', 'Foça'),
        ('İzmir', 'Bergama'),
        ('İzmir', 'Efes Antik Kenti'),
        ('İzmir', 'Efes Müzesi'),
        ('İzmir', ' İzmir Doğal Yaşam Parkı'),
           ('Antalya', 'Antalya Müzesi'),
           ('Antalya', 'Aspendos Antik Tiyatrosu'),
           ('Antalya', ' Antalya Aquarium'),
           ('Antalya', ' Damlataş Mağarası'),
           ('Antalya', ' Köprülü Kanyon Milli Parkı'),
           ('Antalya', ' Kızıl Kule'),
                ('Bursa', ' Uludağ'),
                ('Bursa', ' Panorama 1326 Bursa Fetih Müzesi'),
                ('Bursa', ' İznik Gölü'),
                ('Bursa', ' Hanlar Bölgesi'),
                ('Bursa', 'Türk İslam Eserleri Müzesi (Yeşil Medrese)')";

$conn->query($sql);

// Tabloyu sorgulayıp görüntüleme
$sql = "SELECT sehirler, GROUP_CONCAT(yerler SEPARATOR '<br>') AS yerler_listesi FROM gezi GROUP BY sehirler"; /*AS yerler_listesi: Sonuçta oluşacak olan birleştirilmiş veriye bir takma ad (alias) veririz. Burada bu yeni sütun adını yerler_listesi olarak adlandırıyoruz. Bu, seçilen yerler listesini ifade eder.*/ 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Şehirler</th><th>Yerler</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sehirler"] . "</td><td>" . $row["yerler_listesi"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
