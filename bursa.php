<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bursa Gezilecek Yerler</title>
       
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
        <h1>Bursa'da Gezilecek Yerler</h1>
    </header>


    <main>
        <?php $yerler = [
            [
                'name' => 'Uludağ', 'image' => 'uludağ.jpg',
                'description' => 'Uludağ, 2543 metre yüksekliğiyle Marmara Bölgesi’nin en büyük dağı, Türkiye nin en popüler kış sporları merkezi ve Bursa nın en turistik yeri konumunda. 1933 yılında kurulan ilk oteliyle kış turizmi alanında gelişmeye başlayan Uludağ, günümüzde kayak yapmak için Türkiye’de en çok tercih edilen yerlerden biri.
                Doğal güzellikleri özenle korunan ve çevresini saran Uludağ Milli Parkı’nda doğa yürüyüşü, dağ bisikleti, kaya tırmanma, dağcılık ve kampçılık gibi pek çok spor yapabileceğiniz Uludağ; uluslararası standartlarındaki kayak merkezleri, 5 yıldızlı otelleri, orman köşkleri ve bungalov otelleriyle özellikle kış aylarında tüm dünyadan turistleri misafir ediyor.
                Bursa doğa gezileri rotaları arasında olan dağ yamaçlarındaki yemyeşil yaylaları ve buzul gölleriyle benzersiz doğa manzaraları sunan Uludağ’ı sadece kış aylarında değil, ilkbahar ve yaz aylarında da fotoğraf safarileri, jeep gezileri ve bisiklet turlarıyla keşfe çıkabilirsiniz.',
                'rating' => 5
            ],
            [
                'name' => 'Panorama 1326 Bursa Fetih Müzesi', 'image' => 'bursa_fetih_muzesi.jpg',
                'description' => 'Osmangazi ilçesi Gökdere Bulvarı üzerinde 2018 yılında ziyarete açılan ve dünyanın tam panoramik en büyük müzesi olan Panorama 1326 Bursa Fetih Müzesi; 8.388 m2 alanı, etkileyici mimarisi ve zengin koleksiyonları ile dünya çapında bir ilgi görüyor.
                Osmanlıların beylikten imparatorluğa uzanan yolculuğunu detaylı bir şekilde panoramik sergilerle anlatan müze, her yıl binlerce kişi tarafından ziyaret ediliyor. Tarihsel döngülere göre özenle düzenlemiş müzede yılın her döneminde gerçekleştirilen kültür ve sanat faaliyetleri, tarih söyleşileri, atölyeler ve konferanslar da tarih severlerin çok ilgisini çekiyor.',
                'rating' => 5
            ],
            [
                'name' => 'İznik Gölü',  'image' => 'iznik_golu.jpg',
                'description' => 'Bursa nın en çok ziyaret edilen doğal güzelliklerinden olan İznik Gölü, Türkiye nin 5. en büyük tatlı su gölü. 11 kilometre genişliğe sahip olan ve her mevsim büyüleyici manzaralarıyla sadece Bursa da değil Türkiye de yapılan doğa gezilerinin değişmez adreslerinden biri haline gelen İznik Gölü; sazan, yayın ve gümüş balıklarıyla dolu olduğu için balık avlama etkinlikleri için de tercih ediliyor.
                 Küçük balıkçı tekneleri ile gölde gezilere çıkabilir ve sessiz ortamın tadını çıkarabilirsiniz. Yaz aylarında uçurtma sörfü, deniz paraşütü, kano ve yelken gibi su sporlarını yaparak güzel vakitler geçirebilirsiniz.
                 İznik Gölü nün çevresi iyi düzenlenmiş yürüyüş parkurları, bisiklet yolları ve mesire alanlarıyla doğayla baş başa kalmak için Bursa’da gidebileceğiniz en güzel yerlerden, ayrıca göl kenarında temiz havada tatlı su balıkları tadabileceğiniz balık restoranlar, çay bahçeleri ve kafeler de hizmet veriyor. Yaz aylarında tertemiz sularında yüzebileceğiniz İznik Gölü kıyısında çam ve çınar ağaçları altında sıralanan rengarenk balıkçı teknelerinin fotoğraflarını çekmeyi de unutmayın.',
                'rating' => 4
            ],
            [
                'name' => 'Hanlar Bölgesi', 'image' => 'hanlar_bolgesi.jpg',
                'description' => 'Osmanlı nın ilk zamanlarında Orhan Gazi döneminde inşa edilen ve Osmanlı Devleti’nin ilk başkenti Bursa da ticaretin kalbinin attığı yer olan Hanlar Bölgesi, 700 yıllık tarihi ile bugün de şehrin en popüler alışveriş alanlarından biri konumunda.
                UNESCO Dünya Miras Listesi ne alınması için başvuruda bulunulan Hanlar Bölgesi’nde Koza Han, Fidan Han, Pirinç Han, İpek Han, Emir Han, Geyve Han, Çukur Han ve Tuz Han gibi Osmanlı taş mimarisinin en güzel örneklerini sergileyen hanlarda sıralanan kuyumcular, antikacılar, el sanatı ve tekstil mağazalarında alışveriş yapabilir ve usta şeflerin hizmet verdiği restoranlarda Osmanlı mutfağından gurme yemekler tadabilirsiniz.
                Bursa kent merkezinde Çömlekçiler Caddesi, Cemal Nâdir Caddesi ve Atatürk Caddesi arasında yer alan Hanlar Bölgesi, 106.000 m2 gibi geniş bir alanı kapsıyor. Klasik taş ve ahşap mimarili iki katlı dükkanlarıyla mimari açıdan da öneme sahip Hanlar Bölgesi, Bursa’da alışveriş yapabileceğiniz en güzel hanları size bir arada sunuyor.',
                'rating' => 4
            ],
            [
                'name' => 'Türk İslam Eserleri Müzesi (Yeşil Medrese)', 'image' => 'turk_islam_eserleri_muzesi.jpg',
                'description' => '1419 yılında Sultan 1. Mehmet tarafından inşa ettirilen yeşil kompleksin en eski medresesi olan Yeşil Medrese, günümüzde Türk İslam Eserleri Müzesi olarak hizmet veriyor. Moloz ve kesme taş ile inşa edilen ilk medreselerden biri olmasıyla ünlü Yeşil Medrese, mimari öneminin yanı sıra Türk İslam Eserleri Müzesi nin zengin koleksiyonları için de ziyaret ediliyor.
                Selçuklu sikkeleri, geleneksel Türk el sanat ürünleri, yöresel giysiler, seramik koleksiyonu, oyma ve kakma eserler koleksiyonu, İznik ve Kütahya çini koleksiyonlarının yanında Selçuklu, Beylik ve Osmanlı dönemine uzanan çok geniş bir koleksiyona da sahip olan müze,
                Türk kültürüne ilgi duyanların ülkemizde mutlaka gezmesi gereken yerlerden biri, Selçuklu ve Osmanlı dönemine unutulmaz bir yolculuk yapabilirsiniz.', 
                'rating' => 4
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


    