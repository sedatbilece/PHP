

<form action="#" method="post" enctype="multipart/form-data">
    <input type="text" name=isim> <br>
    <input type="file" name="dosya" id="">
    <button type="submit">Gönder</button>
</form>


<?php 
//GLOBALS
$egisken=10;

function yaz(){

   // return $GLOBALS['degisken'];

}
echo yaz();

//SERVER
echo "<pre>";
print_r($_SERVER);
echo "<br>*****<br>";
print_r($_SERVER["SCRIPT_NAME"]);



//GET
echo "<br>*****<br>";
echo "<pre>";
print_r($_GET);
echo "<br>*****<br>";
echo "<pre>";
print_r($_GET["ad"]);

echo "<br>*****<br>";
if($_POST){
    echo $_POST["isim"];
}
    ?>
    
    
