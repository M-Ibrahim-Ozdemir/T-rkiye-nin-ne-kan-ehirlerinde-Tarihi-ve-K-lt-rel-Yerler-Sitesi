<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gezilecek Yerlerin Haritası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: darkred;
            text-align: center;
        }

        .city-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .city-buttons a {
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .city-buttons a:hover {
            background-color: darkred;
        }

        .map-container {
            position: relative;
            display: flex;
            justify-content: center;
        }

        iframe {
            width: 600px;
            height: 450px;
            border: 0;
        }

        .marker {
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: red;
            border-radius: 50%;
            border: 2px solid white;
        }

        /* Galata Kulesi */
        .galata {
            top: 40%;
            left: 48%;
        }

        /* Kapalı Çarşı */
        .kapali-carsi {
            top: 35%;
            left: 47%;
        }

        /* Göztepe 60.Yıl Parkı */
        .goztepe {
            top: 60%;
            left: 65%;
        }

        /* Yerebatan Sarnıcı */
        .yerebatan {
            top: 38%;
            left: 47%;
        }
    </style>
</head>
<body>
    <h2>Gezilecek Yerlerin Haritaki Yerleri</h2>

    <!-- Şehir butonları -->
    <div class="city-buttons">
        <a href="istanbul_harita.php">İstanbul</a>
        <a href="ankara_harita.php">Ankara</a>
        <a href="izmir.php">İzmir</a>
        <a href="antalya.php">Antalya</a>
        <a href="bursa.php">Bursa</a>
    </div>

    <!-- Harita ve işaretçiler -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12093.746585740058!2d28.978358452528436!3d41.00823740602605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba0a7f924def%3A0x9efb1ff4c9a1a5b9!2zSXRzdGFuYnVsLCBUw7Zya2l5ZQ!5e0!3m2!1str!2str!4v1603894095871!5m2!1str!2str" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
        <!-- İşaretçileri ekliyoruz -->
        <div class="marker galata"></div>
        <div class="marker kapali-carsi"></div>
        <div class="marker goztepe"></div>
        <div class="marker yerebatan"></div>
    </div>
</body>
</html>
