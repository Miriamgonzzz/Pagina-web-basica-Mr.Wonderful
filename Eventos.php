<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <title>Document</title>
</head>
<body>
<div class="contenedor">

    <?php

    include "includes/header.php";
    include "includes/nav.php";

    ?>

    <section>
        <div class="eventos">
        <div class="Primero">
            <a href="#"> <div class="imagen1">
                <p>Bodas</p>
                <img src="img/boda.jpg">
            </div></a>
            <a href="#">  <div class="imagen">
                <p>Cumpleaños</p>
                <img src="img/cumpleaños.jpg">
                </div></a>
        </div>
        <div class="Segundo">
            <a href="#"> <div class="imagen">
                <p>Bautizos</p>
                <img src="img/bautizos.jpg">
                </div></a>
                <a href="#"> <div class="imagen1">
                <p>Comuniones</p>
                <img src="img/comuniones1.jpg">
                    </div></a>
        </div>
</div>

    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>
</body>
</html>
