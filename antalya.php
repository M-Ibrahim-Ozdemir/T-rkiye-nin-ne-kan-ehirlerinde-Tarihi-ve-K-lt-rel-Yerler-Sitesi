<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antalya' da Gezilecek Yerler</title>
       
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
        <h1>Antalya' da Gezilecek Yerler</h1>
    </header>


    <main>
        <?php $yerler = [
            [
                'name' => 'Antalya Müzesi', 'image' => 'antalya_muzesi.jpg',
                'description' => 'Ülkemizdeki en zengin içeriğe sahip müzelerden biri olan Antalya Müzesi, Öğretmen Süleyman Fikri Erten tarafından 1922 yılında kurulmuş. 1988 yılında Avrupa Konseyi Özel Ödülü’nü alan Antalya Müzesi’nde; Doğa Tarihi ve Prehistorya Salonu, Seramik Salonu, Bölge Kazıları Salonu,
                 İmparatorlar Salonu, Tanrılar Salonu, Mozaik Salonu, Mermer Portreler Salonu, Perge Tiyatrosu Salonu, Lahitler Salonu, Sualtı – Küçük Buluntu – İkona – Sikke Salonu isimlerinde şahane güzellikteki salonlar bulunuyor. Salonların her birinde sizleri zamanda yolculuğa çıkaracak ayrı güzellikler bekliyor.',
                'rating' => 5
            ],
            [
                'name' => 'Aspendos Antik Tiyatrosu', 'image' => 'aspendos_antik_tiyatrosu.webp',
                'description' => 'Bölgede kendi adına madeni para bastıran ilk şehirlerden birisi olan Aspendos, Antalya’nın Serik İlçesi’ndeki Belkıs Köyü’nde yer alıyor. Pamfilya’nın en zengin şehirlerinden birisi olan Aspendos, Roma İmparatorluğu dönemine ait en iyi korunmuş antik tiyatrolardan birisine sahip olması ile ziyaretçilerini büyülüyor. 
                 12 bin kişilik Aspendos Antik Tiyatrosu, Aspendoslu Theodorus’un oğlu Mimar Zenon tarafından inşa edilmiş.
                 Etkileyici bir görünüme ve çok iyi akustiğe sahip olan Aspendos Antik Tiyatrosu, haftanın her günü 08:00 – 17:00 saatleri arasında ziyaret açık.',
                'rating' => 5
            ],
            [
                'name' => 'Antalya Aquarium',  'image' => 'antalya_aquarium.jpg',
                'description' => 'Ülkemizde turistlerin en çok ziyaret ettiği yerler arasında ilk beşe giren Antalya Aquarium, dünyanın en büyük tünel akvaryumudur.  2012 yılında açılmış. Konyaaltı nda konumlanıyor. ilham, eğlence ve eğitimi bir arada sunuyor. 40 tematik akvaryumun ardından 131 metrelik uzunluğu ve 3 metrelik genişliği ile dünyanın en büyük tünel akvaryumudur.
                 Dünyanın dört bir yanından hikayeler anlatıyor. Su altının sihirli dünyasını keşfedebileceğiniz gibi Kar Dünyası ve Buz Müzesi’de gerçek kardan kar topları yapabilir, WildPark’da dünyanın en zehirli, en renkli ve en ilginç türleri arasında tropik bir maceraya adım atabilir, 
                 Oceanride XD Cinema’da Kaptan Barbossa ile dünya denizlerini çok boyutlu sinema teknolojisi ile gezebilirsiniz. Akvaryum gezinizi, holywood yeşil perde sistemi ile hazırlanan hatıra fotoğrafları ve özel hediyelik eşyalarla unutulmaz anılara dönüştürebilirsiniz. Macera dolu bir günü McDonalds, Mado ve Artizan Gelato İtalyan Dondurması gibi ünlü lezzet seçenekleri ile tamamlayabilirsiniz.',
                'rating' => 5
            ],
            [
                'name' => 'Damlataş Mağarası', 'image' => 'damlatas_magarası.jfif',
                'description' => 'Alanya İlçesi’ndeki Damlataş Mağarası, il merkezine 133 kilometre, ilçe merkezine sadece 2 kilometre uzaklıkta yer alıyor. 1948 yılında liman inşaatında kullanılacak taş için ocak açılması sırasında bulunan mağara, Alanya Kalesi’nin batı kıyısında konumlanıyor.
                 Sarkıtlardan damlamaya devam eden su damlaları nedeniyle Damlataş adını alan mağara, ülkemizin turizme açılan ilk mağarası olma özelliğini taşıyor. Damlataş Mağarası’nın ortamında normalden 8-10 kat fazla karbondioksit ve yüksek oranda nem bulunduğu için mağaranın havasının astım hastalığına iyi geldiği düşünülüyor.',
                'rating' => 4
            ],
            [
                'name' => 'Köprülü Kanyon Milli Parkı', 'image' => 'kanyon_milli_park.jpg',
                'description' => 'Antalya’nın Manavgat ilçesindeki Köprülü Kanyon Milli Parkı, il merkezine 85 kilometre, ilçe merkezine 63 kilometre uzaklıkta konumlanıyor. 1973 yılında Milli Park olarak ilan edilen Köprülü Kanyon, Antalya’nın ziyaret edilmesi gereken doğal güzellikleri arasında bulunuyor. Rafting yapmak isteyenler tarafından sıklıkla tercih edilen Köprülü Kanyon Milli Parkı’nda rafting yapılabilen bölgenin başlangıcındaki iki adet tarihi köprü, parka ismini veriyor.', 
                 'rating' => 4
            ],
            [
                'name' => 'Kızıl Kule', 'image' => 'kızıl_kule.jfif',
                'description' => 'Alanya Limanı’ndaki Kızıl Kule, Alanya Kalesi ile birlikte kentin simgelerinden bir tanesi olarak bizleri selamlıyor. Sekizgen planlı Kızıl Kule, 1226 yılında Selçuklu Sultanı I. Alaeddin Keykubat tarafından Sinop Kalesi’ni yapan Halepli yapı ustası Ebu Ali Reha el Kettani’ye yaptırılmış.
                 13. yüzyıl Selçuklu eseri olan Kızıl Kule yapılırken sağlamlığını arttırmak için harcında yumurta akı kullanılmış. Kalenin kırmızı rengi ise dış yüzeyine sürülmüş olan yumurta sarısından geliyormuş.
                 Denizden gelecek saldırılara karşı limanı ve tersaneyi korumak amacıyla yapılan Kızıl Kule’nin, birinci katı 1979 yılında Alanya Etnografya Müzesi olarak ziyarete açılmış.', 
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


    