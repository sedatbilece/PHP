<?php include "./Layouts/Layout.php" ?>


<?php 

try{
    $url="...";
    $name="...";
    $password="...";
  
  
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
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div id="contentView" style="display: none;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>İçerik Yükleme</h1>

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

                            <h3 class="card-title">İçerik Bilgileri</h3>

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

<select class="form-select" aria-label="Default select example" required name="DersId" id="DersId">
<option value="0" selected>Ders Seçiniz </option>

<?php 

$derssor=$db->prepare("SELECT * FROM DersAdlari");

$derssor->execute();



while($ders= $derssor->fetch(PDO::FETCH_ASSOC) ) {
?>

     <option value="<?php echo $ders["id"] ?>"> <?php echo $ders["Ad"]; ?>   </option>

<?php } ?>

</select>

<div class="bosluk"></div>

<div class="form-group">

<input type="text" class="form-control"  placeholder="Hoca Adı" name="HocaAdi" id="HocaAdi">

</div>
<div class="form-group">

<input type="text" class="form-control"   placeholder="Konu" name="Konu" id="Konu">

</div>
<div class="form-group">

<input type="text" class="form-control"   placeholder="Video Linki" name="VideoLink" id="VideoLink">

</div>
 

<button type="submit" class="btn btn-success float-right"  onclick="Yukle()">Yükle</button>
                  </form>
                        

    </div>
    <div class="col">
    
    </div>
  </div>
                            
            




                        </div>

                    </div>

                </div>

            </div>





        </div>

    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>


function Yukle(){

    $(document).ready(function(){

swal("İçerik yüklenecek, Emin misiniz ?")
.then((value) => {


if(value){

    var a1 = document.getElementById("DersId");
var ders = a1.value;
var a2 = document.getElementById("Konu");
var konu = a2.value;
var a3 = document.getElementById("HocaAdi");
var hoca = a3.value;
var a4 = document.getElementById("VideoLink");
var link = a4.value;



var obj = {
        upload:"dersyükle",
        DersId:ders,
        Konu:konu,
        HocaAdi:hoca,
        VideoLink:link
    };
   
    $.ajax({
        
type:"POST",
url:"Functions/Dersler/DersEkle.php",
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

