<?php 


$kime="sedatb767@gmail.com";
$konu="sifremi unuttum";


/* ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");  */

// İleti
$ileti = "Line 1\r\nLine 2\r\nLine 3";

// Satırlarımızın 70 karakterden uzun olanlarını katlamamız lazım
$ileti = wordwrap($ileti, 70, "\r\n");

// Epostayı gönderelim
mail($kime, $konu, $ileti);

?>