<!DOCTYPE html>
<html lang="tr">
<head>
</head>
<body style="background-color:rgb(189, 124, 124); padding: 100px; text-align: center;">


    <h1>İletişim</h1>
    <p>Aşağıdaki formu doldurarak bizimle iletişime geçebilirsiniz.</p>
    
    <form action="iletisim.php" method="POST" style="max-width: 600px; margin: 0 auto;">
        <label for="isim">İsim:</label>
        <input type="text" id="isim" name="isim" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <label for="mesaj">Mesajınız:</label>
        <textarea id="mesaj" name="mesaj" required style="width: 100%; padding: 10px; margin-bottom: 10px;" rows="5"></textarea>

        <button type="submit" style="background-color: #d9534f; color: white; padding: 10px 20px; border: none; cursor: pointer;">Gönder</button>
    </form>

    <div style="margin-top: 30px;">
        <h3>İletişim Bilgilerimiz</h3>
        <p>E-mail: 2025@gezirehberi.com</p>
        <p>Telefon: +90 555 101 1010</p>
        <p>Adres: Türkiye</p>
    </div>
</body>
</html>
