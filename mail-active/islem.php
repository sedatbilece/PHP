<?php 
include "baglan.php";

if(isset($_POST["kayitbutonu"] )){

    $isim=$_POST["isim"];
    $eposta=$_POST["eposta"];
    $sifre=$_POST["sifre"];



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
 
 
 
  $mail = new PHPMailer(true);
 
 try {
     //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = $eposta  ;                  //SMTP username
     $mail->Password   = $epostasifre;                              //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
     //Recipients
     $mail->setFrom($eposta, 'Sedat Bilece Site');
     
     $mail->addAddress("sedatb767@gmail.com");               //Name is optional
     
     
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Üyelik aktivasyonu ';
     $mail->Body    = "http://localhost:3000/mail-active/aktivasyon.php?kod=".$aktivasyonkodu;
     $mail->AltBody = 'üylik aktivasyon onay linki';
     $mail->CharSet="utf-8";
 
     $mail->send();
     echo 'Gönderildi';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
 







}
 



?>