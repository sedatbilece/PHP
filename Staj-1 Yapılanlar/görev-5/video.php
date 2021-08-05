<?php



$Ders = $_GET["Ders"];



?>



<style>

    iframe {

        width: 100%;

        max-width: 1080px;

    }

</style>



 

<!-- Modal -->

<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Ders <?php echo $DersId; ?></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <center>

                    <iframe onload="IFrameOnLoad()" src="<?php echo $Ders ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </center>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>

            </div>

        </div>

    </div>

</div>







<script>

    $("#modalVideo").modal();



    function IFrameOnLoad() {

        var width = $("iframe").width();

        $("iframe").height((width * 9) / 16);

        // $("button[title=Collapse]").trigger("click");

    }



    $('#modalVideo').on('hidden.bs.modal', function() {

        $("#video").html("");

    });

</script>
