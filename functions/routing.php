<?php
function goAndComeBack($url, $time=0, $choos=0){
    if($choos!=1){
        $url=$_SERVER["HTTP_REFERER"];//önceki geldiğim yerin url sini tutuyor
    }
    if($time !=0){
        header("Refresh:$time;url=$url");
    }else{
        header("Location:$url");
    }
}
function logoutAdmin(){
    if (isset($_SESSION['Active_Time'])) {
        $elapsedTime = time() - $_SESSION['Active_Time'];
        if ($elapsedTime >= 3600) {
            echo "Oturumunuz sonlandı.";
            session_unset();
            session_destroy();
            goAndComeBack("yonetici_Giris.php",3, 1);
            unset($db);
            exit;
        }
    }else {
        $_SESSION['Active_Time'] = time();
    }
}
//buton ile çıkışı sağlıyor.
if(isset($_POST['cikis'])){
    session_unset();//işlevi, mevcut oturumun tüm değişkenlerini temizler. Oturumda tanımlanan tüm değişkenlerin değerleri silinir, ancak oturum kendisi hala etkin kalır.
    session_destroy();//Oturum dosyası veya veritabanı girdileri silinir ve oturum ile ilişkili çerez 
    goAndComeBack("yonetici_Giris.php", 0, 1);
    unset($db);// Veritabanı bağlantısını kapatma
}
?>