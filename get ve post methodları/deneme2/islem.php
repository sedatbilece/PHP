<?php 
    
    $ad=$_POST["Ad"];
    
    $sifre=$_POST["Sifre"];

    $hatirla = $_POST["Hatirla"];
    

   echo $ad ;
   echo "<br>";
   echo $sifre ;
   echo "<br>";
   
   if($hatirla=="on"){

    echo "hatirla etkin";
   }
   else{
       echo "hatirla etkin depil";
   }

   
    ?>