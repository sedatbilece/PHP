<?php 


echo uniqid();
# uniqid sistem saatini kullanrak belli uniq stringler oluşturur fakat bunlar tahmin edilebilir idlerdir
# güvenlik amaçlı pek iyi değil
echo "<br>--------------------------<br>";



echo uniqid("id");
# başlangıca id ekler
echo "<br>--------------------------<br>";


echo uniqid("id",true);
# başlangıca id ekler ve saniyeyide katark uzatır
echo "<br>--------------------------<br>";


echo md5(time() . mt_rand(1,1000000) );
# sistem saatine random bir sayı eklendi  ve md5 ile şifrelendi 
?>
