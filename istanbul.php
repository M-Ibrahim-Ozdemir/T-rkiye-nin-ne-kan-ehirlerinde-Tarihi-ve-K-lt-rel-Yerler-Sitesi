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
           
        }
    </style>
    </head>

    <body>
    <header style=" background-color: rgba(103, 10, 10, 0.78);
            color: white;
            padding: 40px;
            text-align: center;">
        <h1 style=" margin: 0;font-size: 2.5rem;">İstanbul'da Gezilecek Yerler</h1>
    </header>

    <main style= "padding: 20px">
        <?php $yerler = [
            [
                'name' => 'Topkapı Sarayı', 'image' => 'topkapı_sarayı.jpg',
                'description' => 'Osmanlı İmparatorluğu, dünyanın en geniş sınırlara ulaşmış ve yüzyıllarca hakimiyetini sürdürmüş imparatorluklarından biri.
                 Bu köklü tarihin ve ihtişamlı yapının 400 yıl boyunca yönetildiği, sultanların ve ailelerinin yaşadığı Topkapı Sarayı ise bütün görkemiyle Tarihi Yarımada’da görülmeyi bekliyor.
                 Osmanlı’nın en şatafatlı düğünlerine, tahta çıkma törenlerine ya da entrikalarına ve hüzünlü hikayelerine şahit olan bu sarayda, kendinizi tarihin kollarına bırakarak eşsiz bir tarihe tanık olabilirsiniz.
                 Topkapı Sarayı Müzesi ve Harem Gezisi’nde görülecek yerler arasında sarayın Harem bölümü, Hırka-ı Saadet Dairesi ve Has Oda bölümü, Babü’s Saade bölümü ve Köşkler Bahçesi bölümü bulunuyor.',
                'rating' => 5
            ],
            [
                'name' => 'Galata Kulesi', 'image' => 'galata_kulesi.webp',
                'description' => 'İstanbul’un siluetini çizen en önemli simgelerden biri 528 yılında inşa edilen yapı, İstanbul Boğazı ve Haliç’e akim konumda, bir fener kulesi olarak inşa edilmiş ama dönem dönem zindan olarak da kullanılmış.
                 Kuleye birlikte çıkan âşıkların sonunda evlendikleri, kuleyle ilgili rivayetlerin en popüler olanı .',
                'rating' => 5
            ],
            [
                'name' => 'Kapalı Çarşı',  'image' => 'kapalı_carsı.jpg',
                'description' => 'Tarihi Yarımada’nın en gözde duraklarından biri de Beyazıt’ta 550 yıldır ayakta duran Kapalı Çarşı. Yabancıların Grand Bazaar adıyla tanıdığı Kapalı Çarşı, içinde kaybolacağınız sokakları ve dünya altın piyasasına yön veren kuyumcularıyla ünlü.
                 İstanbul’un en eski çarşısının içinde ticaretin hâlâ ne kadar canlı olduğunu ve burada satılan her şeyin İstanbul’un kadim ruhunu yansıttığını göreceksiniz.',
                'rating' => 4
            ],
            [
                'name' => 'Göztepe 60.yıl parkı', 'image' => 'goztepe-parki.webp',
                'description' => 'Bağdat Caddesi ve sahil yolu arasında yer alan Göztepe 60. Yıl Parkı,içerisinde rengarenk balıkların yüzdüğü akvaryumları, 
                 mevsimine göre farklı renklere bürünen çiçek bahçeleri, küçük denizcilerin aklını başından alacak oyun teknesi ve yaz aylarında ıslanıp ferahlayabileceği fıskiyeleriyle Anadolu Yakası’nın en güzel parkları arasındaki Göztepe 60. Yıl Parkı, yaz aylarında açık hava tiyatro festivallerinden konserlere uzanan birçok keyifli etkinliğe de sahne oluyor.',
                'rating' => 5
            ],
            [
                'name' => 'Yerebatan Sarnıcı', 'image' => 'yerebatan-sarnici.webp',
                'description' => 'İstanbul, stratejik konumu ve zengin tarihi mirası nedeniyle Roma İmparatorluğu ve sonrasında Bizans İmparatorluğu’nun başkenti olarak seçilmişti. Ancak şehrin içme suyu kaynakları yetersizdi ve imparatorluk su kaynaklarını arttırmak için çeşitli projeler başlattı.
                 Yerebatan Sarnıcı, bu projelerden biriydi. İmparator Justinianus, şehrin su kaynaklarını artırmak amacıyla 6’ıncı yüzyılın başlarında sarnıcın inşasını emretti. Şehrin merkezinde yer alan sarnıç yeraltı su kaynaklarını depolayarak şehre su sağlamaktaydı. Yerebatan Sarnıcı’nın 336 adet sütun ve 12 adet kemerle desteklenmesinin yanı sıra boyutunun yaklaşık olarak 70 metre x 140 metre olduğu biliniyor.
                 Sarnıcın bir dizi tünel ve merdivenle erişilebilen iki büyük bölümü bulunuyor. Sarnıcın içinde su seviyesi değişebilen bir su havuzu var ve ziyaretçiler, ahşap yürüme yollarıyla bu suyun üzerinde yürüyerek sarnıcı gezebiliyorlar.
                 Sarnıç 16’ıncı yüzyılda yerli halk tarafından su depolamak için kullanılmıştır. Ayrıca 18’inci yüzyılda bir müzeye dönüştürülmüş. Dönem dönem ulusal ya da uluslararası etkinliklere ev sahipliği yapıyor.', 
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
                echo "</p></div><div>"; 

                }             
        ?>
         </main>
         <footer style=" background-color: #333;
            color: white;
            text-align: center;
            padding: 2 0;
            position: fixed; 
            width: 100%;
            bottom: 0">
        <p>© 2025 İstanbul Gezi Rehberi</p>
    </footer>

</body>
</html>


    