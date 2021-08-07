<?php include "./Layouts/Layout.php" ?>

<script src="/JS/ckeditor/ckeditor.js"></script>
<?php 

try{
    $url="....";
    $name="....";
    $password="....";
  
  
  # temel bağlantı işlemi
  $db=new PDO($url,$name,$password);
  
  }
  
  catch(PDOException $e){
  
  
  echo $e->getMessage();# hata mesajını döndürür
  
  }

?>

<style>
    .bosluk{
        height: 30px;
    }
    #editor{
        width:100%;
        height: 400px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div id="contentView" style="display: none;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Duyurular</h1>

                </div>



            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">



            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Duyuru Düzenle</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">


                        <div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-6">
     
    <form action="javascript:void(0)" method="POST">

<div class="bosluk"></div>

<div class="form-group">

<input type="text" class="form-control"  placeholder="Başlık (isteğe bağlı )" name="Baslik" id="Baslik">

</div>
<div class="form-group">

<input type="textarea" class="form-control"   placeholder="Duyuru Metni" name="Duyuru" id="Duyuru">

</div>
<button type="submit" class="btn btn-success float-right"  onclick="Yukle()">Yükle</button>
                  </form>
                        

    </div>
    <div class="col">
    
    </div>
  </div>
                            
      

                        </div><!-- CONTAİNER DİV END-->


     

                </div>

            </div>





        </div>

        <!--burasi -->
        <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Önceki 10 Duyuru</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">



<?php 

$duyurusor=$db->prepare("SELECT * FROM Duyurular ORDER BY id DESC LIMIT 10");
  
$duyurusor->execute();


while($duyurular= $duyurusor->fetch(PDO::FETCH_ASSOC) ) { 
?>

<div class="card " >
  <div class="card-header">


  
  <?php echo $duyurular["Baslik"]  ?>

  
  
  <button  class="btn btn-danger float-right btn-sm"id="silbuton"  onclick="Sil(<?php echo $duyurular['id'] ?>)">Sil</button>
  
  <div class="float-right mr-3"> <?php echo $duyurular["Tarih"]  ?> </div>
  <hr>

<?php echo $duyurular["Duyuru"]  ?>
    
  </div>   </div>




<?php }  ?>

                    </div><!-- card body div end-->

                </div>

            </div>

        </div>
       

    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
function Sil(id){



$(document).ready(function(){

  swal("Duyuru Silinecek , Emin misiniz ?")
.then((value) => {


if(value){


var obj = {
    Id:id
};

$.ajax({
type:"POST",

url:"Functions/Duyurular/DuyuruSil.php",
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

<script>
function Yukle(){

    $(document).ready(function(){

swal("İçerik yüklenecek, Emin misiniz ?")
.then((value) => {


if(value){

    var a1 = document.getElementById("Baslik");
var baslik = a1.value;
var a2 = document.getElementById("Duyuru");
var duyuru = a2.value;


  var tarih = new Date();
  var aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"];
  var ay=  aylar[tarih.getMonth()]
  var gun=tarih.getDate();
  var yil= tarih.getFullYear();
var tarihtop=gun+" "+ay+" "+yil;
  

var obj = {
        upload:"dersyükle",
        Baslik:baslik,
        Duyuru:duyuru,
        Tarih:tarihtop
       
    };
    
   
    $.ajax({
        
type:"POST",
url:"Functions/Duyurular/DuyuruEkle.php",
dataType: 'json',
data: obj,

success:function(cevap){
    alert(cevap);
}

});



swal({

text: "İçerik Yüklendi",
icon: "success",
button: false,
});

setTimeout(() => { location.reload();  }, 1000);

}


});


})
        
}


</script>

<script>
    CKEDITOR.replace('editor', {
      height: 260,
      width: 700,
    });
  </script>


