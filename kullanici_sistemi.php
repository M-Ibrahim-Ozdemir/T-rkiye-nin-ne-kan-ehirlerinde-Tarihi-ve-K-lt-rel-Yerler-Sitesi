
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Girişi</title>
    <style>
        body {
            background-color:rgb(191, 83, 83);
            font-family: Arial, sans-serif; 
            display: flex; /*kutu içinde öğerler uygun bi şekide boyutlandırılır*/
            justify-content: center; /*ana eksene gör hizlama*/ 
            align-items: center; /*carpraz eksene göre hizalama*/ 
            height: 100vh;
        }

    /* Form kutusunu merkezleme */
        .login {
            text-align: center;
            background-color:rgba(95, 88, 88, 0.51);
            border-radius: 50px; /*kenarları yuvarlar*/ 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.86);
            width: 400px;  
            padding: 50px;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: left;
        }
        input[type="text"],
        input[type="password"]{
            width: 100%; /*textlerin genişkliği*/ 
            padding: 10px;/*textlerin yüksekliği*/ 
            margin-bottom: 20px; /*aralarındaki boşluk*/ 
            border-radius: 5px;
        }

        input[type="submit"]{
            background-color:rgb(206, 13, 13);
            width: 100%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 11px;
        }

        /* Buton hover efekti */
        input[type="submit"]:hover {
            background-color:rgb(10, 53, 210);
        }

    </style>
</head>
<body>
    <div class="login">
        <h2 style = "margin-bottom: 20px; font-size: 28px; color: black; ">Kullanıcı Girişi</h2>
        <form action="" method="post">
            <label for="kullanici_adi">Kullanıcı Adı:</label>
            <input type="text" name="kullanici_adi" required>

            <label for="sifre">Şifre:</label>
            <input type="password" name="sifre" required>

            <input type="submit" name="submit" value="Giriş Yap">
        </form>

        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>


<?php
// Veritabanı bağlantısı
$host = "localhost"; /*veritaban sunucusunun adresi*/ 
$dbname = "kullanici_sistemi"; /*bağlanmak istenen veritaban adı dbname*/ 
$username = "root"; // XAMPP kullanıyorsan genellikle root olur
$password = "";     // XAMPP'te şifre boş bırakılır

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); /*Bu satırda PHP'nin PDO (PHP Data Objects) sınıfı kullanılarak MySQL veritabana bağlanılmaya çalışılıyor.*/ 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /*PDO::ATTR_ERRMODE : Bu, PDO'nun sabit hata modunu ayarlamak için kullanılır. öbürü:hata ile karşılaştığında normal bir hata yerine bir PDOExceptionnesnesi atmasını sağlar. */ 
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}

// Giriş işlemi
if (isset($_POST['submit'])) { /*formun gönderilip gmnderilmediğini kontrol eder*/ 
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    // Kullanıcıyı veritabanından kontrol et
    $stmt = $conn->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = :kullanici_adi");
    $stmt->bindParam(':kullanici_adi', $kullanici_adi);
    $stmt->execute(); /*yukardaki sorgu calısır*/ 
    $user = $stmt->fetch(PDO::FETCH_ASSOC); /*fetch(PDO::FETCH_ASSOC): Sorgu sonucu dönen döngü (ilişkisel dizi) olarak alır.*/ 
/*Eğer bir kullanıcı bulunuyorsa, $userdeğişkeni bu kişilerin haklarını içerir (örneğin, kullanıcı_adi, sifre, e-posta gibi sütunlar).*/


/*password_verify($sifre, $user['sifre']): Bu fonksiyon, kullanıcının formuna girdiği şifreyi ( $sifre) veri tabanında hash'lenmiş halde saklanan şifre ( $user['sifre']) ile karşılaştırır.*/ 
    if ($user && password_verify($sifre, $user['sifre'])) {
        // Giriş başarılı, yönlendirme yapılır
        header("Location: proje_gezilecek_yerler.php");
        exit();
    } else {
        // Giriş başarısız
        $error = "Geçersiz kullanıcı adı veya şifre!";
    }
}
?>








