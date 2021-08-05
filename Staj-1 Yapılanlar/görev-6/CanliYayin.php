<?php include "./Layouts/Layout.php" ?>

<?php $dersid=1; ?>

<style>

    iframe {

        width: 100%;

        max-width: 720px;

    }

</style>





<div id="contentView" style="display: none;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Canlı Yayın</h1>

                </div>



            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">



            <div class="row">

                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Canlı Yayın</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">

                            <center>

                               
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
                              $KonuAdi="";
                              $sonyayin=$db->prepare("SELECT * FROM Dersler WHERE DersId=:id ");

                              $sonyayin->execute(array(
                              "id"=>1

  
                               ));

                               while($sonyayinlink= $sonyayin->fetch(PDO::FETCH_ASSOC) ){

                                $link=$sonyayinlink["VideoLink"];
                                
                              }
                            
                            
                            
                            
                            ?>

                                <iframe onload="IFrameOnLoad()" src="<?php echo $link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </center>

                        </div>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Soru Sor</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">

                           



                            <form class="form-group" action="javascript:void(0)" method="POST" id="mesajform">

                                <textarea name="mesaj" id="mesaj" class="form-control" rows="8"></textarea>

                                <br>
                                <input type="hidden" name="islem" value="kayit">
                                <button onclick="SoruGonder();" class="btn btn-success float-right">Gönder</button>

                            </form>

                        </div>

                    </div>

                </div>













            </div>

            <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Eski Canlı Yayınlar</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">



                            <div class="row">

<!--  Ders Getir -->







<script src="JS/Egitimler.js"></script>
<?php 




$sira=1;

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
  $derscek=$db->prepare("SELECT * FROM Dersler WHERE DersId=:dersid ORDER BY id DESC");

  $derscek->execute(array(
           "dersid"=>$dersid
  
  ));


  while($ders= $derscek->fetch(PDO::FETCH_ASSOC) ) { ?>

    



<div class="col-xl-4 col-sm-6 ders"><!--kart başlangıcı -->

<div class="card"><!--kart başlangıcı -->

    <div class="card-header">
    <td style="font-weight: bold;"> <?php echo $ders["HocaAdi"]; ?> </td>

        <div class="card-tools">

            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

                <i class="fas fa-minus"></i>

            </button>

            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">

                <i class="fas fa-times"></i>

            </button>

        </div>

    </div>

    <div class="card-body">

        <table class="table table-sm table-bordered">

           

            <tr>

                <td><?php echo $ders["Konu"]; ?></td>

            </tr>

            <tr>

                <td>

                    <center>

                        <button onclick="Izle('<?php echo $ders['VideoLink']; ?>');" class="btn btn-success">İzle</button>

                    </center>

                </td>

            </tr>

        </table>

    </div>

</div>

</div><!--kart bitişi -->








<?php
  }

?>





<!--  Ders Getir  SON-->


                            </div>











                        </div>

                    </div>

          

                    <div id="video"></div>



        </div>

    </section>

</div>



<script>

    function IFrameOnLoad() {

        var width = $("iframe").width();

        $("iframe").height((width * 9) / 16);

    }



    function SoruGonder() {

        var bilgiler= $("#mesajform").serialize();


$.ajax({
type:"POST",

url:"Functions/CanliYayin/SoruGonder.php",

data:bilgiler,

success:function(cevap){
    alert(cevap);
}


});

    }

</script>