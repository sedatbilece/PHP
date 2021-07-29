<?php 
include "baglan.php";

  #tanımlama kısmı
  require 'src/Exception.php';
  require 'src/PHPMailer.php';
  require 'src/SMTP.php';
  require "bilgiler.php";
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
 #tanımlama kısmı bitiş
 
  require 'autoload.php'; 
  $postkont=$_POST["islem"];
if($postkont=="kayit"){

    $isim=$_POST["isim"];
    $eposta=$_POST["eposta"];
    $sifre=$_POST["sifre"];

    $aktivasyonkodu=uniqid("id",true);


    $kayitol = $db->prepare("INSERT into uyeler set  isim=:i , eposta=:e , sifre=:s ,aktivasyon=:ak,durum=:d");
    
  
  
  
  # kontrol işlemi eklenebilir
  $insert = $kayitol ->execute(array(
  
      "i"=> $isim,
      "e"=> $eposta,
      "s"=> $sifre,
      "ak"=> $aktivasyonkodu,
      "d"=>2
  ));
  //üye durum 2 ==> onay bekleyen 

 

  if($insert){

    $mail = new PHPMailer(true);
 
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $epostabil  ;                  //SMTP username
        $mail->Password   = $epostasifre;                              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($epostabil, 'Sedat Bilece Site');
        
        $mail->addAddress($eposta);               //Name is optional
        $mail->SMTPDebug = 0;
        
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Üyelik aktivasyonu ';
        $mail->Body    = "http://localhost:3000/mail-active/aktivasyon.php?kod=".$aktivasyonkodu;
        $mail->AltBody = 'üylik aktivasyon onay linki';
        $mail->CharSet="utf-8";
    
        $mail->send();
        
       echo "kayıt işlemi başarılı epostanızı kontrol ediniz";
    } catch (Exception $e) {
      echo "kayıt işlemi tamamlanamadı";
    }

  }
 
}
 



?>