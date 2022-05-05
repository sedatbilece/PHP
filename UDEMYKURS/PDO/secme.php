<?php

include "./baglanti.php"; // $db

//prepare()ile  SİLME
$sorgu = $db->query("SELECT * FROM client WHERE id=25 ");
$sonuc= $sorgu->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($sonuc);


$sorgu2 = $db->query("SELECT * FROM client");
$sonuclar= $sorgu2->fetchAll(PDO::FETCH_ASSOC);


foreach($sonuclar as $veri){

    echo $veri["id"]." - ".$veri["ad"]." - ".$veri["num"]." - ".$veri["mail"]."<br>";
}

?>