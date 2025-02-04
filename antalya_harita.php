<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antalya Haritası</title>
</head>
<body>
  
<nav class = "city-buttons">
             <a href="proje_gezilecek_yerler.php">Anasayfa</a>
         </nav>

<h1>Antalya Haritası</h1>

    <!-- Şehir butonları -->
    <div class="city-buttons">
        <a href="istanbul_harita.php">İstanbul</a>
        <a href="ankara_harita.php">Ankara</a>
        <a href="izmir_harita.php">İzmir</a>
        <a href="antalya_harita.php">Antalya</a>
        <a href="bursa_harita.php">Bursa</a>
    </div>

    <!--Harita iframe-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d256325.65776554692!2d30.379830606076586!3d36.896893834605925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3918fd524d7ef%3A0x3e0cfa8ddf14e7b8!2sAntalya%20Aquarium!5e0!3m2!1str!2str!4v1700000000000!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    <style>
        nav {
          float: right; /* veya flexbox kullanarak da konumlandırabilirsiniz */
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(168, 76, 76);
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: white;
            display: flex; justify-content: center;
            font: optional;
            margin-left: 100px;  /*başlığın sol boşlugu arttırıp azaltır*/ 
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

        iframe {
            display: block;
            margin: 0 auto;
            border: 0;
        }
    </style>
</body>
</html>
