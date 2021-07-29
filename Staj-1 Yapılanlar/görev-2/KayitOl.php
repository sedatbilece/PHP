<?php

$AdSoyad = htmlspecialchars($_POST['name']);

$Telefon = htmlspecialchars($_POST['tel']);

$Email = htmlspecialchars($_POST['email']);

$UserName = htmlspecialchars($_POST['username']);

$Password = htmlspecialchars($_POST['password']);

$RePassword = htmlspecialchars($_POST['repassword']);



$ErrorText = "";

if (

    preg_match("/[\-]{2,}|[;]|[']|[<]|[>]|[\\\*]/", $UserName) ||

    preg_match("/[\-]{2,}|[;]|[']|[<]|[>]|[\\\*]/", $Password) ||

    preg_match("/[\-]{2,}|[;]|[']|[<]|[>]|[\\\*]/", $RememberMe)

) {

    $ErrorText = "Kullanıcı Adı veya Şifrenizde Geçersiz Karakter Bulunmaktadır.";

} else {



    $Id = 0;

    $GUID = "";

    $Durumu = 0;



    $dsn = '...';

    $user = '...';

    $password = '...';

    $db = new PDO($dsn, $user, $password);

    $db->query("SET NAMES 'utf8'");



    //SQL Hazırla

    $d = $db->prepare("SELECT Id, GUID, Durumu FROM Kullanicilar WHERE KullaniciAdi=:UserName and Sifre=:Password");

    $d->bindParam(':UserName', $UserName);

    $d->bindParam(':Password', $Password);

    //SQL Çalıştır ve Veri Al

    if ($d->execute()) {

        foreach ($d as $row) {

            $Id = $row["Id"];

            $GUID = $row["GUID"];

            $Durumu = $row["Durumu"];

        }

    }



    if ($Id > 0) { //Kayit Varsa



        if ($Durumu != 1) {


          

            $ErrorText = "Henüz Kaydınız Onaylanmamış !"; 



            session_unset();

            session_destroy();

            setcookie("GUID", "", time() - 3600, '/');

        } else {
            $ErrorText = "Kullanıcı zaten kayıtlı !"; 
            
            header("Location: https://www.gayevakfi.org/egitim/index.php");

            return;

        }

    } else {
         


       

        $d = $db->query("INSERT INTO Kullanicilar (GUID, AdiSoyadi, KullaniciAdi, Sifre, Durumu) VALUES (uuid(), '" . $AdSoyad . "', '" . $UserName . "', '" . $Password . "', " . $Durumu . ")");


       if($d){
        $ErrorText="Kayıt işlemi başarılı";
    }
    else{
        $ErrorText="Kayıt işlemi başarısız !";
    }



    }

}



?>



<html>

<form action="/egitim/index.php" method="post" id="frm">

    <input type="hidden" name="Error" value="<?= $ErrorText ?>">

</form>

<script>

    document.getElementById("frm").submit();

</script>



</html>