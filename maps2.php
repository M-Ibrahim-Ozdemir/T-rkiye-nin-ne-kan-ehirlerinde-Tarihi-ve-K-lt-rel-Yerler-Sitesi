<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Türkiye'de Gezilecek Şehir Haritası</title>
    <style>
      
      body {
            font-family:'Times New Roman', Times, serif;
            margin:0;
            padding: 0px;
            height: 100vh;
            display:flex; /*içindeki öğeleri esnek bi şekidel yerlestirir*/ 
            flex-direction: column;
            text-align: center;
            background-color:rgb(133, 54, 54);
        }

        h1 {
            color: white;
            padding: auto;
            font-size: 2em;
        }

        .map-container {
            background-image: url('turkiyeharitasi.jpg');
            position: relative;
            width: 100%;
            height: 100%;
            flex-grow: 1;  /*Haritanın geri kalan alanı tam kaplamsı için*/ 
            margin: 20px auto;
            background-size: cover; /*arka plan resminin öğe içine tam sığması için*/ 
            background-position: center; /*arka plan resminin konumu için. resimin tam ortada yer almasını sağlar*/ 
            border: 2px dashed #ddd; /*dashed adında kenarlık*/
        }

        .city { /*geneldir yani tüm şehir noktalarını kapsar*/ 
            position: absolute; /*konumlandırmak için bu özellik*/ 
            border-radius: 50%; /*noktanın köşelerini yuvarlatır */ 
            width: 20px;
            height: 20px;
            background-color: red;
            cursor: pointer; /*fare işaretcisi*/
        }

/*Şehir noktalarının koordinat konumlarını sayfa boyutlarına göre daha orantılı olması için % ile ayarladık */ 
.istanbul {
    top: 9%;
    left: 14%;
}

.ankara {
    top: 36%;   /*yukardan aşağıya*/ 
    left: 35%;  /*soldan sağa*/ 
}

.izmir {
    top: 54%;
    left: 2.5%;
}

.antalya {
    top: 80%;
    left: 23%;
}

.bursa {
    top: 19%;
    left: 17%;
}
    </style>
</head>
<body>
    <h1>Gezilecek Yerlerin Haritaki Yerleri</h1>

    <!-- Harita konteyneri ve şehir noktaları -->
    <div class="map-container"> <!--Harita içeren kapsayıcı-->
<!--div:  **Grup Oluşturma**: Birden fazla öğeyi bir arada gruplamak için kullanılır. Örneğin, bir harita ve üzerindeki şehir noktalarını tek bir konteyner içinde tutmak, bu öğelerin birlikte çalıştırılmasını ve hala çalıştırılabilmelerini sağlar. -->

        <a href="istanbul_harita.php">
            <div class="city istanbul" title="İstanbul"></div>
        </a>
        <a href="ankara_harita.php">
            <div class="city ankara" title="Ankara"></div>           
        </a>
        <a href="izmir_harita.php">    
            <div class="city izmir" title="İzmir"></div>
        </a>
        <a href="antalya_harita.php">
            <div class="city antalya" title="Antalya"></div>
        </a>
        <a href="bursa_harita.php">
            <div class="city bursa" title="Bursa"></div>
        </a>

</div>
</body>
</html>
