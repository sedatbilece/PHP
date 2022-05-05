<?php 
session_start();
include "./baglan.php";

$_SESSION["ad"]= "sedat";// oluşturma işlemi

$_SESSION["sifre"]=123456;

$_SESSION["tercih"]=array("istanbul","ankara","izmir");

$_SESSION["sifre"]="asdasd";// değiştirme işlemi

unset($_SESSION["ad"]);// silme  işlemi

echo "<pre>";
print_r($_SESSION);



// ******* süreli session nasıl oluşturulur ********

if( ! isset( $_SESSION["timetrack"] ) ){//yeni giriş yapılıyor ise


    $_SESSION["timetrack"]=time()+60*60; // 1 saat sonrası ayarlandı
    $_SESSION["admin"]= "sedat";// oluşturma işlemi
    $_SESSION["pass"]=123456;

}

if( time() > $_SESSION["timetrack"] ){// giriş süresi bitmiş ise

    session_destroy();
}

?>