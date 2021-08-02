<?php 

$errorText="";

$kuladi= htmlspecialchars($_POST["KullaniciAdi"]);
$email= htmlspecialchars($_POST["Email"]);

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
 

if (

    preg_match("/[\-]{2,}|[;]|[']|[<]|[>]|[\\\*]/", $kuladi) ||

    preg_match("/[\-]{2,}|[;]|[']|[<]|[>]|[\\\*]/", $email) 

    

){

}
else{//güvenlik sıkıntısı yok ise

    $dsn = '....';

    $user = '....';

    $password = '....';

    $db = new PDO($dsn, $user, $password);

    $db->query("SET NAMES 'utf8'");
    
$k1="";
$k2="";



    $d = $db->prepare("SELECT KullaniciAdi,Email FROM Kullanicilar WHERE KullaniciAdi=:kuladi and Email=:email");

    $d->bindParam(':kuladi', $kuladi);

    $d->bindParam(':email', $email);

    //SQL Çalıştır ve Veri Al

    if ($d->execute()) {

        foreach ($d as $row) {

            $k1 = $row["KullaniciAdi"];

            $k2 = $row["Email"];

            

        }

    }

    if($k1!=""  && $k2!=""){

        $aktivasyonkodu=uniqid("id",true);
        $kayit = $db->prepare("INSERT into YeniSifre set  Email=:email , Kod=:kod ");
 
        # kontrol işlemi eklenebilir
        $insert = $kayit ->execute(array(
        
            "email"=> $email,
            "kod"=>$aktivasyonkodu
            
        ));
        if($insert){// mail burada gönderilecek


            $mail = new PHPMailer(true);
 
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $epostabil  ;                  //SMTP username
                $mail->Password   = $epostasifre;                              //SMTP password
                $mail->SMTPSecure = 'tls';  
                $mail->SMTPAutoTLS = false;          
                $mail->Port       = 587;                                   
            
                //Recipients
                $mail->setFrom($epostabil, 'Sedat Bilece Site');
                
                $mail->addAddress($email); //nereye gönderilecek
                $mail->SMTPDebug = 0;
                
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Sifre Kurtarma';
                $mail->Body    = "https://www.gayevakfi.org/egitim/SifremiUnuttum/Degistir.php?Kod=".$aktivasyonkodu;
                $mail->AltBody = 'sifre kurtarma linki';
                $mail->CharSet="utf-8";
            
                $kont=$mail->send();
                




              # echo "kayıt işlemi başarılı epostanızı kontrol ediniz";
            } catch (Exception $e) {
              echo  $e;
            }



        }//$insert if sonu
        else {

            echo "Mail gönderme işlemi Başarısız";
        }



    }

    else{
       echo "Girilen Email ve Kullanıcı Adı ile kayıt bulunmadı";
    }
    
  


}

if(isset($_POST["Degistir"])){



    echo $_POST["Kod"];
}



?>