<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <script src="js/scripts.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="contenedor">

    <?php

    include "includes/header.php";
    include "includes/nav.php";

    ?>

    <section>
        <div class="personaliza">
            <div class="texto">
                <h2><img src="img/pincel.png"> Crea tu propio producto</h2>
            </div>
            <form name="personaliza" action="" method="get">
            <div class="Formulario">

                <ul>
                    <li><label>Elige el producto:</label>
                        <select name="menu">
                            <option value="0">...</option>
                           <option value="1">Camisetas</option>
                            <option value="2">Tazas</option>
                            <option value="3">Cuadernos</option>
                            <option value="4">Planificador</option>
                            <option value="5">Delantal</option>

                        </select>
                    </li>
                    <li><label>Color para el producto: </label><input type="color"></li>
                    <li><label>Elige la talla:   </label>
                        S<input type="radio" name="talla" value="s">
                        M<input type="radio" name="talla" value="m">
                        L<input type="radio" name="talla" value="l" >
                        XL<input type="radio" name="talla" value="xl" checked>

                    </li>
                    <li><label>Frase:</label></li>
                    <li><textarea name="comentario" id="" cols="110" rows="2"></textarea></li>
                    <li><label>Color elegido para el texto: </label><input type="color"></li>
            <li><label> Nombre:</label><input name="nombre" type="text" maxlength="" minlength=""></li>
            <li><label> Apellidos:</label><input name="apellidos" type="text" placeholder=""></li>
            <li><label> Mail:</label><input name="correo" type="email"></li>
            <li><label> Telefono:</label><input name="telefono" type="number"></li>


                </ul>
            <hr>
                <ul>
                <div class="precio">

                    <li>Precio ....</li>
                </div>
                <div class="boton">
                    <li>€</li>
            <li><input type="submit" value="Enviar" ></li>
                    <li><input type="reset" value="Borrar" ></li>
                </div>
                </ul>
            </div>

        </div>


    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>
</body>
</html>
