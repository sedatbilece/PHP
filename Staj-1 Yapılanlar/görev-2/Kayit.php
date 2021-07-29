<!DOCTYPE html>

<html lang="tr">





<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="..."></script>

    <script>

        window.dataLayer = window.dataLayer || [];



        function gtag() {

            dataLayer.push(arguments);

        }

        gtag('js', new Date());



        gtag('config', 'UA-60647728-2');

    </script>



    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="Plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="Plugins/Theme/css/adminlte.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">



    <script src="Plugins/jquery/jquery.min.js"></script>

    <script src="Plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="Plugins/Theme/js/adminlte.min.js"></script>

    <script src="Plugins/Theme/js/demo.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script src="Plugins/inputmask/jquery.inputmask.min.js"></script>





    <script src="https://www.google.com/recaptcha/api.js?render=6Lcc9uYUAAAAAD4AyeTqvRqtafor8seYhs0z47LC"></script>

    <script>

        grecaptcha.ready(function() {

            grecaptcha.execute('6Lcc9uYUAAAAAD4AyeTqvRqtafor8seYhs0z47LC', {

                action: 'login'

            }).then(function(token) {

                $("#recap").val(token);

                $("#btnSubmit").prop("disabled", false);

            });

        });

    </script>



</head>



<body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 offset-md-3">

                <div class="card">

                    <div class="card-header">

                        <h2 class="card-title" style="font-weight: bold;">KAYIT</h2>

                    </div>

                    <article class="card-body">



                        <form id="frm_kayit" action="Functions/Login/KayitOl.php" method="POST">

                            <input type="hidden" name="recap" id="recap" value="" />

                            <div class="form-group">

                                <label>Ad Soyad</label>

                                <input name="name" class="form-control" placeholder="Ad Soyad" type="name" id="name" required>

                            </div>

                            <div class="form-group">

                                <label>Telefon</label>

                                <input name="tel" class="form-control" placeholder="(5xx) xxx xx xx" type="tel" id="tel" required data-inputmask='"mask": "(999) 999 99 99"' data-mask>

                            </div>

                            <div class="form-group">

                                <label>EMail</label>

                                <input name="email" class="form-control" placeholder="EMail" type="email" id="email" required required  data-inputmask="'alias': 'email'">

                            </div>

                            <div class="form-group">

                                <label>Kullanıcı Adı</label>

                                <input name="username" class="form-control" placeholder="Kullanıcı Adı" type="name" id="username" required>

                            </div>

                            <div class="form-group">

                                <label>Şifre</label>

                                <input class="form-control" placeholder="******" type="password" name="password" id="password" required>

                            </div>

                            <div class="form-group">

                                <label>Şifre Tekrar</label>

                                <input class="form-control" placeholder="******" type="password" name="passwordtekrar" id="passwordtekrar" required>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary btn-block" id="btnSubmit" disabled> Kayıt Ol </button>

                            </div>

                        </form>

                    </article>

                </div>

            </div>

        </div>

    </div>



</body>



</html>

<script>

    $(function () {

        $('[data-mask]').inputmask()

        // $("#email").inputmask({ alias: "email"});

    });

</script>