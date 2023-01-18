
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
        function pon1(){
            document.getElementById("sub").style.display="block";
        }function clos1(){
            document.getElementById("sub").style.display="none";
        }
    </script>
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <div class="contenedor">

        <?php

        include "includes/header.php";
        include "includes/nav.php";

        ?>

        <section>

            <div class="new">
                <img src="img/imagen1.jpg">
                <img src="img/imagen2.jpg">
                <img src="img/imagen3.jpg">
                <img src="img/imagen4.png">
               <a href="Personaliza.php"><div class="text"><h2>NEW</h2><p>Puedes personalizar tus objetos</p></div></a>

            </div>


            <div class="slide">
                <a href="Productos.php">
                    <div class="slide-inner">
                        <input class="slide-open" type="radio"id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
                        <div class="slide-item">
                            <img  src="img/cuaderno1.jpg"/>
                            <p>Papeleria</p>
                        </div>
                        <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img  src="img/Accesorio1.jpg"/>
                            <p>Accesorios</p>
                        </div>
                        <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img  src="img/taza1.jpg"/>
                            <p>Tazas</p>
                        </div>

                        <label for="slide-3" class="slide-control prev control-1">‹</label>
                        <label for="slide-2" class="slide-control next control-1">›</label>
                        <label for="slide-1" class="slide-control prev control-2">‹</label>
                        <label for="slide-3" class="slide-control next control-2">›</label>
                        <label for="slide-2" class="slide-control prev control-3">‹</label>
                        <label for="slide-1" class="slide-control next control-3">›</label>
                        <ol class="slide-indicador">
                            <li>
                                <label for="slide-1" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-2" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-3" class="slide-circulo">•</label>
                            </li>
                        </ol>
                </a>
            </div>

    </div>
    <div class="por" id="sub">
        <div id="clos"><a href="javascript:clos1()"><img src="img/error.png"></a></div>
        <li><h2>Subscribete</h2></li>
        <li><label> Nombre: </label><input name="nombre" type="text"></li>
        <li><label> Apellidos: </label><input name="apellidos" type="text"></li>
        <li><label> Correo:</label><input name="correo" type="email"></li>
        <li><p>Te enviaremos al correo las novedades de Mr.Wonderful</p></li>
        <li><hr></li>
        <li><input type="submit" value="Subscribirse" ></li>

    </div>
    <div class="subscripcion">

        <h2>Quieres conocer nuestras novedades</h2>
        <a href="javascript: pon1()"><li><input type="submit" value="Subscribete"></li></a>

    </div>

        </section>

        <?php
        include "includes/footer.php";
        ?>

    </div>
</body>
</html>