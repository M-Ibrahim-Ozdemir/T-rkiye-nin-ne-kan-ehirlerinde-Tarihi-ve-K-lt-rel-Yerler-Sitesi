
<html>
<head>
</head>    

<body>

<?php
ini_set('display_errors', 1);//PHP'nin hata raporlama ayarlarını yapılandırır.(display_errors)=yani hatalar ekranda görüntülenir
error_reporting(E_ALL);  // Hata raporlamayı açıyoruz. Tüm hata türlerini raporlamak için kullanılır. E_ALL, PHP'deki tüm hata seviyelerini içerir (örneğin, uyarılar, hatalar).

$servername = "localhost"; //sunucu adı yerel makineyi belirtir
$username = "root"; //yerel sunucuda genelde kul.adı root olur
$password = ""; //şifre yerel sunucuda bpş bırakılır

// İlk bağlantıyı yapıyoruz (Veritabanı oluşturulacak bağlantı)
$conn = new mysqli($servername, $username, $password, "myDb"); //new mysqli mysql veritabanında bağlantı kurar. ve bağlantı için içine gereklı olanlar
//myDb bağlanmak istediğimiz veri tabanı adı. mysql' e myDb veritabanına bağlanmasıunı soler

// Bağlantıyı kontrol ediyoruz
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); //hata varsa die() fonksiyonu ile hata mesajını gösterir ve programı durdurur.
}
echo "Connected successfully to the server<br>";

// Veritabanı oluşturma (Veritabanı zaten varsa hata vermez)
$sql = "CREATE DATABASE IF NOT EXISTS myDB"; //SQL sorgusu, myDB adında bir veritabanı oluşturur.IF NOT EXISTS: Veritabanı zaten varsa, yeniden oluşturmaya çalışmaz (hata vermez).
if ($conn->query($sql) === TRUE) {  //query(): SQL sorgusunu MySQL sunucusuna gönderir ve sorgunun sonucunu kontrol eder. - sorgu başarılıysa true
    echo "Database 'myDB' created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Veritabanını seçiyoruz (Bağlantıyı myDB veritabanına yönlendiriyoruz)
$conn->select_db("myDB");  // Bu, yeni oluşturduğumuz veritabanına geçiş yapar

// Tablo oluşturma (Tablo zaten varsa hata vermez)
$sql = "CREATE TABLE IF NOT EXISTS efsane (        
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "TRUNCATE TABLE efsane"; //veriyi eklemeden önce tabloyu tamamen sıfırlıyoruz delete olursa id sıfırlanmıyo bunu kullan oyuzdemn
if ($conn->query($sql) === TRUE) {
  echo "Table 'efsane' created successfully<br>";
} else {
  echo "Error creating table: " . $conn->error . "<br>";
}

// Veri ekleme işlemi
$sql = "INSERT INTO efsane (firstname, lastname, email)  
VALUES ('Cabbar', 'Naptin', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error inserting record: " . $conn->error . "<br>";
}



// Tabloyu sorgulayıp görüntülüyoruz
$sql = "SELECT id, firstname, lastname, email, reg_date FROM efsane";
$result = $conn->query($sql); //bu sorgunun sonucunu $result değişkenine kaydeder

//veri varsa tabloyu olusturuyoruz
if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Registration Date</th></tr>";
  while($row = $result->fetch_assoc()) {   //fetch_assoc(): Her satırı bir dizi (array) olarak alır ve tablo içine yerleştirir.
      echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["reg_date"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();  // Bağlantıyı kapat
?>

</body>
</html>
