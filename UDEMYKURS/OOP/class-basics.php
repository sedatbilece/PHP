<?php 

class Pet{

     public $name;
      

     function __construct($name="")
     {
         echo " <br> pet is creating ... <br> ";

           $this->name=$name;
     }

    function __destruct(){

     
        echo "<br>  pet is killing ... <br> ";
    }

    public function move(){
        echo " <br> pet is moving ... <br> ";
    }
}

$kopek =new Pet();
$kopek->name="kopek1";

$kedi =new Pet("Kedicik");
//$kedi->name="kedi1";

echo $kopek->name;


$kedi->move();

echo $kedi->name;

?>