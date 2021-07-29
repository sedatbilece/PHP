<?php include "./Layouts/Layout.php" ?>



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

                                <iframe onload="IFrameOnLoad()" src="...." title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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