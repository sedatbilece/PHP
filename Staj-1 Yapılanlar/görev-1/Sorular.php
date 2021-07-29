


 

<?php include "./Layouts/Layout.php"; 
?>



<div id="contentView" style="display: none;">


<?php  # veritabanı bağlantısı
try{
  $url="...";
  $name="...";
  $password="...";


# temel bağlantı işlemi
$db=new PDO($url,$name,$password);

}

catch(PDOException $e){


echo $e->getMessage();# hata mesajını döndürür

}?>




<div class="card bosbirak"></div>

<div class="container">
  <div class="row">
    <div class="col-sm">
      
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-calendar-alt"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="Sorular.php?getir=bugun">Bugün</a>
    <a class="dropdown-item" href="Sorular.php?getir=hepsi">Tümü </a>
   
  </div>
</div>


    </div>
    <div class="col-6">
      
    </div>
    <div class="col-6">
      
    </div>
  </div>
</div>
  
<div class="card bosbirak"></div>
  

   



<?php  if($_GET["getir"]=="bugun")  {

$tarih=date("d-m-y");

$mesajsor=$db->prepare("SELECT * FROM Sorular ORDER BY Id DESC");
  
$mesajsor->execute();
?>



<div class="ortala">

<?php while($mescek= $mesajsor->fetch(PDO::FETCH_ASSOC) ) { 
  
  if($mescek["tarihkontrol"]==$tarih){ ?>


<div class="card bosbirak">
  <div class="card-header">
   Tarih : <?php echo $mescek["tarih"] ?>  

 
   <button  class="btn btn-danger float-right" value="<?php $mescek['Id'] ?>"   id="silbuton"  onclick="Sil(<?php echo $mescek['Id'] ?>)">Sil</button>  





  </div>
  <div class="card-body">
   
    <p class="card-text"><?php echo  $mescek["Soru"] ?></p>
    
  </div>
</div>



    <?php }  } ?>


  

</div>


<?php }    

# HEPSİ KISMI
else {

 
  $mesajsor=$db->prepare("SELECT * FROM Sorular ORDER BY Id DESC");
  
  $mesajsor->execute();
  
  
  ?>
  
      
  
  
  
  
  <div class="ortala">
  
  <?php while($mescek= $mesajsor->fetch(PDO::FETCH_ASSOC) ) { ?>
  
  
  
      <div class="card bosbirak">
    <div class="card-header">
     Tarih : <?php echo $mescek["tarih"] ?>    
  
   

    </div>
    <div class="card-body">
     
      <p class="card-text"><?php echo  $mescek["Soru"] ?></p>
 
<button  class="btn btn-danger float-right" value="<?php $mescek['Id'] ?>"   id="silbuton"  onclick="Sil(<?php echo $mescek['Id'] ?>)">Sil</button>  


     
    </div>

  </div>
  

  
      <?php } ?>
  </div>

 <?php } ?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>


  function Sil(id){



    $(document).ready(function(){

      swal("Soru Silinecek , Emin misiniz ?")
.then((value) => {
  
  
if(value){
 

  var obj = {
        Id:id
    };

  $.ajax({
type:"POST",

url:"Functions/CanliYayin/SoruSil.php",
dataType: 'json',
data: obj,

success:function(cevap){
    
}


});
swal({
  
  text: "Soru Silindi",
  icon: "success",
  button: false,
});

setTimeout(() => { location.reload();  }, 1000);

}


});


   })
  }

 


 </script>

 

