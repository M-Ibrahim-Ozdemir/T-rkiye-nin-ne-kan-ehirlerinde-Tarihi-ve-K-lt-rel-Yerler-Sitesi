<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İzmir'de Gezilecek Yerler</title>
       
    <style>       
       body {
            font-family:Arial, Helvetica, sans-serif;
            background-color:rgb(133, 60, 60);
            
        }

        header {
            background-color:rgb(107, 19, 19);
            color: white;
            padding: 40px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        main {
            padding: 20px;
        }

        /* Yerlerin genel stili */
        .yer {
            background-color: white;
            margin-bottom: 20px;
            border-radius: 50px; /*kenar yuvarlama*/ 
            padding: 19px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.77); /*bir öğeyi kutu gölge derinşik yapan */ 
        }

        h2 {
            font-size: 2rem;
            color: #333;
            text-align: center;
        }

        img {
            border-radius: 50px;
            margin-bottom: 15px;  /*resim yazı arasındaki fark*/ 
        }

        p {
            color:rgb(0, 0, 0);
            line-height: 1.6;
        }

        .rating {
            margin-top: 10px;
        }

        /* Yıldızların stili */
        .rating p {
            color: #ff9800;
            font-size: 1.2rem;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 2 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
    </head>

    <body>

    <header>
        <h1>İzmir' de Gezilecek Yerler</h1>
    </header>


    <main>
        <?php $yerler = [
            [
                'name' => 'Foça', 'image' => 'foca.jpg',
                'description' => 'Antik çağlarda bölgede yaşayan sevimli foklardan ismini alan Foça, İzmir e 70 kilometre uzaklıktadır. Çandarlı ve İzmir Körfezi arasındaki bir yarımada üzerinde yer alan Foça, doğal bir liman olduğu için tarih boyunca stratejik açıdan önemli bir yer olmuş.
                 Günümüzde ise Foça; sakin atmosferi, klasik evleri, sahil boyunca uzanan yürüyüş yolları, rengarenk balıkçı tekneleri ve şirin kafeleri ile İzmir’in en sevilen tatil noktalarından biri.
                 M.Ö. 500 yıllarda inşa edilmiş Athena Tapınağı, Anadolu nun en eski antik tiyatrosu, ünlü Herodot Duvarı, Cenevizliler tarafından 11. yüzyılda inşa edilen Beş Kapılar Kalesi, Şeytan Hamamı, Değirmenli Tepe üzerinde yer alan güzel yel değirmenleri ile İzmir tarih ve kültür gezilerinin değişmez adreslerinden biri olan Foça,
                 Eski Foça ve Foça olarak iki bölüme ayrılıyor. Nesli tükenmekte olan Akdeniz foklarına da ev sahipliği yapan bu güzel ilçe; Arnavut kaldırımlı sokaklarını süsleyen taş evler ve salaş balık restoranlarıyla İzmir’in mutlaka görülmesi gereken yerleri arasında.',
                'rating' => 5
            ],
            [
                'name' => 'Bergama', 'image' => 'bergama.jpg',
                'description' => 'Uzun yıllar Pergamon Krallığı’nın merkezi olan ve efsanevi Bergama Antik Kenti ile tüm dünyadan arkeoloji ve tarih meraklarını kendine çeken Bergama, İzmir merkezine 110 kilometre uzaklıkta yer alıyor. Birbirinden güzel tarihi hazineleri ile ön plana çıkan sessiz ilçe, tam bir açık hava müzesi konumunda.
                 Türkiye nin en önemli arkeoloji müzelerinden biri olan Bergama Müzesi ne ev sahipliği yapan ilçe; UNESCO Dünya Mirası Listesi nde yer alan Bergama Antik Kenti, muhteşem taş mimarisiyle dikkat çeken ve Ege bölgesinin en büyük camilerinden biri olarak Bergama Ulu Camii, büyüleyici Bergama Zeus Sunağı, MS. 2. yüzyılda Roma döneminde inşa edilmiş Kızıl Avlu (Sarepeion Tapınağı),
                 14.000 kitabın bulunduğu Bergama İlçe Halk Kütüphanesi ve fıstık çamlarıyla ünlü Kozak Yaylası ile İzmir tatillerinde keşfedilmesi gereken önemli yerlerden biri.',
                'rating' => 4
            ],
            [
                'name' => 'Efes Antik Kenti',  'image' => 'efes_antik_kent.jpg',
                'description' => 'Türkiye nin en çok ziyaret edilen tarihi hazinelerinden biri olan Efes Antik Kenti, her biri UNESCO Dünya Mirası Listesi’ne giren Çukuriçi Höyük, Ayasuluk Tepesi, Efes Antik Kenti ve Meryem Ana Evi gibi farklı bölümlerden oluşuyor. Antik dönemin en büyük ve güçlü kentlerinden biri olan Efes Antik Kenti, uzun tarihinde Herakletos ve Hermodor pek çok filozof ve bilim insanı da yetiştirmiş.
                 Rehberli turlarla keşfe çıkabileceğiniz bu büyüleyici antik kentte 24.000 kişi kapasitesiyle antik dönemin en büyük açık hava tiyatrosu olan Efes Antik Tiyatrosu, Celsius Kütüphanesi, Hadrian Tapınağı, Curates Caddesi ve etkileyici teras evleri arasında tarihte bir yolculuğa çıkacaksınız.
                 Antik tiyatrosunda her yıl pek çok uluslararası önemli etkinlik de düzenlenen Efes Antik Tiyatrosu, İzmir gezilerinde kesinlikle ziyaret edilmesi gereken tarihi yerler arasında.',
                'rating' => 4
            ],
            [
                'name' => 'Efes Müzesi', 'image' => 'efes_muzesi.jpg',
                'description' => 'İzmir in Selçuk ilçesinde bulunan dünyaca ünlü Efes Antik Kenti’nde yapılan kazılarda elde edilen paha biçilmez tarihi eserlerin sergilendiği Efes Müzesi, Türkiye nin en önemli arkeoloji müzelerinden biri. Efes Artemis heykeli, başı mermer Artemis heykeli, Mısırlı rahip heykeli,
                 İsis heykeli ve Sokrates başı gibi pek çok ünlü esere ev sahipliği yapan müzenin koleksiyonlarında tanrı heykellerinden antik sikkelere kadar antik çağlardan Osmanlı dönemine uzanan binlerce paha biçilmez eseri inceleyebilirsiniz.',
                'rating' => 5
            ],
            [
                'name' => 'İzmir Doğal Yaşam Parkı', 'image' => 'izmir_dogal_yasam_parkı.webp',
                'description' => 'Şasalı Doğal Yaşam Parkı olarak da bilinen İzmir Doğal Yaşam Parkı, Çiğli ilçesi Ahmet Piriştina Caddesi üzerinde 425.000 m2 alan üzerinde yer alıyor. Çocuklu ailelerin İzmir de ilk uğraması gereken yerlerden biri olan İzmir Doğal Yaşam Parkı nın içerisinde sevimli lemurlardan ceylanlara ve zebralara kadar 125 ten farklı türde 1500 e yakın hayvanı yakından görebilirsiniz.
                 Hayvanat bahçesi, çiçek bahçeleri, kuğular ve ördeklerin yüzdüğü yapay göletini çevreleyen yürüyüş parkurları ve bisiklet yolları ile güzel zaman geçirebileceğiniz yaşam parkında çocuk hayvanat bahçesinde ise cüce keçiler, pony atlar ve Kamerun koyunları gibi sevimli hayvanlar arasında çocuklarınızla birlikte eğlenceli bir zaman geçirebilirsiniz.
                 Tropik merkez, büyük gölet, Afrika savana, Asya filleri, papağan parkı, yırtıcı kuş barınağı, vahşi hayvan barınağı ve maymun adası gibi pek çok farklı bölümü bulunan İzmir Doğal Yaşam Parkı nı haftanın her günü saat 09:00 ile 1800 arasında ziyaret edebilirsiniz.', 
                 'rating' => 5
            ]
        ];

      
        foreach ($yerler as $yer) {
            echo "<div class='yer'>   
                    <h2>{$yer['name']}</h2>
                    <img src='{$yer['image']}' alt='{$yer['name']}' style='width:100%'>
                    <p>{$yer['description']}</p>
                  
                    <div class='rating'>
                    <p>Yıldızlar: ";

                   for ($i = 1; $i <= $yer['rating']; $i++) {
                   echo "⭐";
                  
                }  
                echo "</p></div><div>"; /*sondaki divi kaldırınca gölge kutusu değişiyor anlamadım*/ 

                }             
        ?>
         </main>
         <footer>
        <p>© 2025 İstanbul Gezi Rehberi</p>
    </footer>

</body>
</html>


    