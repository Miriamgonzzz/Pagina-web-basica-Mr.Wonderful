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
        <div class="contacto">
            <h2>Contactenos</h2>
        <form name="contacto" action="" method="get">

            <ul>
                <li><label> Nombre:</label><input name="nombre" type="text" maxlength="" minlength=""></li>
                <li><label> Apellidos:</label><input name="apellidos" type="text" placeholder=""></li>
                <li><label> Mail:</label><input name="correo" type="email"></li>
                <li><label> Telefono:</label><input name="telefono" type="number"></li>
                <div class="cual">
                <li><label>Cual es el problema:</label></li>
                </div>
                <li><textarea name="comentario" id="" cols="90" rows="3"></textarea></li>
                <hr>
                <div class="boton">
                <li><input type="submit" value="Enviar" ></li>
                </div>
            </ul>
        </form>
        </div>
        <div class="telefono">
            <div class="online">
                <h2>Tienda Online:</h2>
                <p><img src="img/correo.png"> shop@mrwonderful.com</p>
                <p><img src="img/telefono1.png"> +34 93 173 00 06</p>
                <p><img src="img/reloj.png"> Lunes a Viernes 9:00 a 17:00</p>
            </div>
            <div class="fisica">
                <h2>Central:</h2>
                <p><img src="img/correo.png"> hola@mrwonderful.com</p>
                <p><img src="img/telefono1.png">  93 180 26 72</p>
                <p><img src="img/reloj.png"> Lunes a Viernes 9:00 a 21:00</p>
            </div>
        </div>
    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>
</body>
</html>
