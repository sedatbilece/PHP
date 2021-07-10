<?php 
 require_once "baglan.php";

if(isset( $_GET["id"])){

echo "silme islemi";

echo $_GET["id"];


$sil=$db->prepare("DELETE from name_pass where id=:xid");


$kontrol=$sil->execute(array(
   "xid"=>$_GET["id"]

));

}

if($kontrol){

    
 
 
       Header("location:form.php?durum=ok");   

 
 
 
       
 }
 else{
    
 
 
    Header("location:form.php?durum=no"); 
 }




?>