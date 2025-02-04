<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstanbul Gezilecek Yerler</title>
       
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
        <h1>Ankara'da Gezilecek Yerler </h1>
    </header>

    <main>
        <?php $yerler = [
            [
                'name' => 'Anıtkabir', 'image' => 'anıtkabir.jpg',
                'description' => 'Ankara’da yer alan Anıtkabir, hepimizin bildiği gibi Mustafa Kemal Atatürk’ün ölümünde defnedildiği bir anıt mezar. Modern mimarinin izlerinin görüldüğü Anıtkabir, aynı zamanda Selçuklu ve Osmanlı mimari detaylarıyla da süslenmiş.750.000 m²’lik bir alan üzerinde yer alan Anıtkabir; Barış Parkı ve Anıt Bloğu’ndan oluşuyormuş.
                 Yapılan hazırlıklar sonrası projenin inşasına 1944 yılında başlanmış. İnşaat 9 yıl sürmüş. inşaat dört farklı aşamaya ayrılarak parça parça yapılmış. Atatürk’ün çok sevdiği ve “Burası güzel bir anıt yeri” dediği Rasattepe, Anıtkabir’in inşa edildi yer olmuştur. Anıt Blok bölümünün girişinde yer alan aslanlı yoldaki 24 heykel, 24 Oğuz boyunu temsil eder.             
                 Yolun devamında özel günlerde kutlamaların ve anma törenlerinin yapıldığı Tören Meydanı ve devamında ise Atamız’ın yattığı Mozole bölümü yer alıyor. Her biri farklı özelliğe sahip kulelerin yer aldığı Anıtkabir, tam bir mimari harikası diyebiliriz. Kulelerin isimleri ise şöyle; Hürriyet, Mehmetçik, Barış, 23 Nisan, Misak-ı Milli, İnkılap, Cumhuriyet, Müdafa-i Hukuk.
                 Anıtkabir’in yeşillendirilmesi için de özel emek harcanmıştır. Barış Parkı bölümü 100’den fazla ağaç türüne ev sahipliği yapıyor. Dikilen ağaç sayısı ise inanılmaz, tam 48 bin 500 adet. Anıtkabir anıtının sınırları içerisinde bir de Atatürk ve Kurtuluş Savaşı Müzesi yer alıyor. Bu müzede Atatürk’e ait saat, cüzdan gibi kişisel eşyalar vardır.',
                 'rating' => 5
            ],
            [
                'name' => 'Anadolu Medeniyetleri Müzesi', 'image' => 'anadolu_medeniyet_muzesi.jpg',
                'description' => 'Anadolu Medeniyetleri Müzesi, binlerce eşsiz eserin sergilendiği koleksiyonları ile Türkiye nin en önemli müzelerinden biri olarak karşımıza çıkıyor. Öyle ki Avrupa Müze Formu nun EMYA ödülüne layık görülmüştür. 
                 Kalkolitik Çağ, Eski Tunç Çağı, Asur Ticaret Kolonileri Çağı, Hitit İmparatorluk Çağı, Frig dönemi, Geç Hitit dönemi ve Urartu dönemine uzanan kapsamlı koleksiyonları, Göbeklitepe replikaları tüm dünyadan tarih, kültür ve arkeoloji meraklarını kendine çekiyor.',
                'rating' => 4
            ],
            [
                'name' => 'Ankara Kalesi',  'image' => 'ankara_kalesi.jpg',
                'description' => 'Ankara nın Altındağ ilçesinde yer alan ve şehrin en önemli tarihi simgelerinden biri olan Ankara Kalesi’nin M.Ö. 2. yüzyılda Galatlar tarafından yapıldığı tahmin ediliyor.
                 Bölgeye yüksek bir tepe üzerinde etkileyici bir manzara sunan Ankara Kalesi tarih boyunca Roma, Bizans, Selçuklu ve Osmanlı İmparatorluğuna ev sahipliği yapmış. Ankara Kalesi nde 110 metre yüksekliğindeki 5 köşeli 42 kuleyi gezebilir, iç kale odalarını inceleyebilir ve surlardan muhteşem fotoğraflar çekebilirsin.',
                'rating' => 4
            ],
            [
                'name' => 'Ulucanlar Cezaevi Müzesi', 'image' => 'ulucanlar_cezaevi_muzesi.jpg',
                'description' => 'Ankara’da yeni hücre sistemine göre yapılması planlanan cezaevleri açıldıktan sonra, 2006 yılında Ulucanlar’da bulunan mahkûmlar da yeni cezaevlerine nakledilmeye başlandı. Ankara Büyükşehir Belediyesi ilk etapta bu cezaevini bir ayakkabı çarşısına dönüştürmeyi istemekteydi. Diğer yandan, Ankara Mimarlar Odası bu cezaevinin bir müzeye dönüştürülmesi yönünde Adalet Bakanlığı’na bir öneride bulundu. 
                 Mimarlar Odası, yaklaşık 1 yıl boyunca çeşitli sivil toplum örgütlerini de bir araya getirerek nasıl bir müze olması gerektiğine dair çalışmalar yürüttü ve 2011 de müze açıldı. Ulucanlar Cezaevi Müzesi nde 81 yıl boyunca düşünceleri yüzünden hapse girmiş gazeteci, yazar, şair, siyasetçi gibi kişilerin ayrıntılı bilgileri, ailelerinden temin edilmiş özel eşyaları ve cezaevinde iken çekilmiş fotoğrafların sergilendiği avlular bulunmaktadır.',
                'rating' => 5
            ],
            [
                'name' => 'Altınpark', 'image' => 'altınpark.jpg',
                'description' => '640.000 m2 alanı ile Ankara nın en büyük parkı olan Altınpark ın %85 i yeşil alanlar ve göletlerden oluşuyor. Şehrin en huzurlu alanlarından olan Altınpark, 1985 yılında açıldı. Yılın her dönemi kültürel, sanatsal etkinliklerin düzenlendiği açık ve kapalı etkinlik alanları, yürüyüş yolları, spor salonları, çocuk oyun alanları, 
                 dünya mutfaklarından lezzetler sunan restoranları ve Türk Sokağı ile Ankara nın mutlaka görülmesi gereken yerlerinden biri olan Altınpark, olimpik yüzme havuzu ve mini golf sahası ile de her yaş grubu için farklı eğlenceler sunuyor.', 
                'rating' => 5
            ],
            [
                'name' => 'Mogan Gölü', 'image' => 'mogan_golu.webp',
                'description' => 'Ankara merkezine 20 kilometre uzaklıkta, Eymir Gölü nün de parçası olan bir havzada yer alan Mogan Gölü, Türkiye deki 15 özel koruma alanından biri. Kendine özgü bitki çeşitliliği, büyüleyici manzaralara sahip sulak alanları ve vahşi yaşam güzellikleriyle doğal yapısını koruyan ender yerlerden biri olan bu set gölü, 63 km2 gibi geniş bir alanı kapsıyor.
                 Gölbaşı olarak da bilinen Mogan Gölü nün çevresini saran iyi düzenlenmiş yürüyüş yolları ve seyir teraslarında güzel bir gezi yapabilir, gölün ev sahipliği yaptığı 200’den fazla su kuşu ve göçmen kuşun fotoğraflarını çekebilirsin. Mogan Gölü nün 25 metre yüksekliğindeki deniz fenerine de Mogan Gölü nün tamamının manzaralarını izlemek için uğrayabilirsin.', 
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


    




