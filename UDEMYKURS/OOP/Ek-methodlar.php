<?php 
  //       Clone KeyWord 
class Yaz{
    public $isim;
}

$yaz=new Yaz();
$yaz->isim="sedat";

$kopya =clone $yaz;// nesne içindeki veriler ile kopyalanır.

echo $kopya->isim;


echo "<br>";
//    __invoke 


class OrnekNesne{

    public function __invoke($a)
    {
        echo "nesne parametresi : ".$a;
    }
}


$nesne=new OrnekNesne();

$nesne("deneme");// nesneye değer vermeyi sağlar


echo "<br>";
//
?>