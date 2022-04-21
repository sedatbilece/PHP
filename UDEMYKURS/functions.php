<?php 


$dizi=[1,2,3,4,5];

$diz=1.9;


function yokla($deg){

if(gettype($deg)=="array"){

    foreach($deg as $i){
        echo  $i+"  ";
    }
}
else{
    echo $deg;
}

}

yokla($diz );







?>