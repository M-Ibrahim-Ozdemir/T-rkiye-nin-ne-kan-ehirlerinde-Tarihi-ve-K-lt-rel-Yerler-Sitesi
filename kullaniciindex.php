
<?php
session_start(); /*oturum açma başlatılır*/ 

if (!isset($_SESSION['kullanici_adi'])) { /*!isset: değişkenin tanımlı olup olmadığı*/ 
    header('Location: giris.php'); /*kullanici_adi değ.yoksa bu satır çalısır*/ 
    exit();
}
/* Eğer bu kontrol yapmazsanız , oturum açmamış kullanıcılarda yaşayan sayfalara (örneğin şehirler sayfası) erişebilir, bu da güvenlik açıkları yaratır.*/ 
?>
