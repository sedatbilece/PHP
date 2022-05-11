<?php 

//     ABSTRACT CLASS
abstract class Personel{

  public $maas;

  abstract public function Bilgi();

}


class Isci extends Personel{

        function __construct($maas)
        {
            $this->maas=$maas;
        }

        function Bilgi(){
            echo "Personel maaşı :".$this->maas;
        }
}


$nesne =new Isci("3000");

$nesne->Bilgi();

// INTERFACE

interface  Car{// değişken tanımlanmaz
 
     public function Bilgi();// fonksiyonlarda abstract kullanılmaz çünkü zaten soyut olmak zorunda
  
  }
  
  
  class bmw implements Car{
    public $km;
          function __construct($km)
          {
              $this->km=$km;
          }
  
          function Bilgi(){
              echo "ARABA km :".$this->km;
          }
  }
  
  
  $nesne =new bmw("7000");
  
  $nesne->Bilgi();
  


?>