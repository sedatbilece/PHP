 <?php
 
 # 4 çeşit regex ifadesi bulunmaktadır

 # ifade : içinde geçenleri eşler
 # ^ifade : ile başlayanları eşler
 # ifade$ : ile bitenleri eşler
 # ^ifade$ : sadece kelimesi varsa eşler


 // $desen="#elma#";
// $desen="#^elma#";
// $desen="#[a-f]#";
// $desen="#[0-9]#";
// $desen="#[\.]#";
//$desen="#[0-9]{2}\.[0-9]{2}\.[0-9]{4}#";//tarih formatı yakalama 08.12.2010
//$desen='#href="([a-z\.\/\:]+)"#'; // link yakalama regex
//$desen='#elma(lar|ler)#'; // elma iki ekten biriyle devam edebilir
// $desen='/^#([0-9a-fA-F]{3} | [0-9a-fA-F]{6})$/i'; // hex kodu belirleme


// $desen="#/[]/i#"; // /i  u,s,m ile desen düzenlenir
/* 
- i : büyük küçük harf duyarlılığını kaldırır
- m : her paragrafı böler
- s : ifadeyi tek satırda uygular
- u : utf8 hale getirir
*/



 $desen='/^#([0-9a-fA-F]{3} | [0-9a-fA-F]{6})$/i';

 $metin='#fff321';

 preg_match_all($desen,$metin,$sonuc);

 echo "<pre>";
 print_r($sonuc);
 
 
 ?>
