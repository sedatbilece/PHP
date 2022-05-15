<?php

$dizi=array(

          "adi"=>"sedat",
          "soyadi"=>"bilece",
          "yasi"=>21
);

$json =json_encode($dizi);
echo $json;
echo "<br>";


$jsoncevir= json_decode($json,TRUE);// objeye çevirir

print_r($jsoncevir);

?>