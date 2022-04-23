<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include_once "./layout.php";
    ?>

    <div class="con">
    <div>
        body değişen içerik
    </div>

    </div>

    <?php 
    require "./layout.php";//include ile aynı farkı elzem şekilde lazım ise

    require_once "./layout.php";// 1kere edilmiş ise daha etmez
    ?>
</body>
</html>