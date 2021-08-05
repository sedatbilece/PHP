<?php include "./Layouts/Layout.php" ;

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


# diğer sayfalarada eklenecek
$url=$_SERVER['REQUEST_URI'];

$dizi=explode("/",$url);#/egitim/asd.php şeklinde  

$son=explode(".",$dizi[2]);#asd.php alınıyordu . diyerek asd ve php ayrılıyor

$SayfaAdi= $son[0];#asd sayfa adı olmuş oluyor




  $sayfaidcek=$db->prepare("SELECT * FROM Sayfalar WHERE Adi=:adi ");

  $sayfaidcek->execute(array(
           "adi"=>$SayfaAdi
  
  ));
$dersid=0;
  while($ders= $sayfaidcek->fetch(PDO::FETCH_ASSOC) ){

    $dersid=$ders["Id"];
  }

# eklenecek kısım sonu
?>


<style>

    .ders{

        max-width: 335px;

    }

</style>



<div id="contentView" style="display: none;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1><?php  echo $SayfaAdi; ?></h1>

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

                            <h3 class="card-title">Dersler</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">



                            <div class="row">







<?php   include "DersGetir.php" ;?>







                            </div>











                        </div>

                    </div>

                </div>

            </div>





            <div id="video"></div>



        </div>

    </section>

</div>

