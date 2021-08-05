

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
  $derscek=$db->prepare("SELECT * FROM Dersler WHERE DersId=:dersid ORDER BY id");

  $derscek->execute(array(
           "dersid"=>$dersid
  
  ));


  while($ders= $derscek->fetch(PDO::FETCH_ASSOC) ) { ?>

    



<div class="col-xl-4 col-sm-6 ders"><!--kart başlangıcı -->

<div class="card"><!--kart başlangıcı -->

    <div class="card-header">

        <h3 class="card-title"><?php echo $sira; $sira=$sira+1; ?>.Ders </h3>

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

                <td style="font-weight: bold;"> <?php echo $ders["HocaAdi"]; ?> </td>

            </tr>

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
