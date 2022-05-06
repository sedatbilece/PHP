<?php

class Personel {

     public $ad;
     public $soyad;

     public function bilgiler(){

        echo $this->ad." - ".$this->soyad."<br>";
     }

}

class Unvan extends Personel{

     public $unvan;

     public function unvanyaz(){
         echo "unvani: ".$this->unvan."<br>";
     }

}




$pers= new Unvan();
$pers->ad="sedat";
$pers->soyad="bilece";
$pers->unvan="devop";
$pers->bilgiler();
$pers->unvanyaz();



?>