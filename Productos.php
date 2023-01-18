<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
        function abrir(){
            document.getElementById("ventana").style.display="block";
        }function abrir1(){
            document.getElementById("ventana1").style.display="block";
        }function abrir2(){
            document.getElementById("ventana2").style.display="block";
        }function abrir3(){
            document.getElementById("ventana3").style.display="block";
        }function abrir4(){
            document.getElementById("ventana4").style.display="block";
        }function abrir5(){
            document.getElementById("ventana5").style.display="block";
        }function abrir6(){
            document.getElementById("ventana6").style.display="block";
        }function abrir7(){
            document.getElementById("ventana7").style.display="block";
        }function abrir8(){
            document.getElementById("ventana8").style.display="block";
        }function abrir9(){
            document.getElementById("ventana9").style.display="block";
        }function abrir10(){
            document.getElementById("ventana10").style.display="block";
        }function abrir11(){
            document.getElementById("ventana11").style.display="block";
        }

        function cerrar(){
            document.getElementById("ventana").style.display="none";
        }function cerrar1(){
            document.getElementById("ventana1").style.display="none";
        }function cerrar2(){
            document.getElementById("ventana2").style.display="none";
        }function cerrar3(){
            document.getElementById("ventana3").style.display="none";
        }function cerrar4(){
            document.getElementById("ventana4").style.display="none";
        }function cerrar5(){
            document.getElementById("ventana5").style.display="none";
        }function cerrar6(){
            document.getElementById("ventana6").style.display="none";
        }function cerrar7(){
            document.getElementById("ventana7").style.display="none";
        }function cerrar8(){
            document.getElementById("ventana8").style.display="none";
        }function cerrar9(){
            document.getElementById("ventana9").style.display="none";
        }function cerrar10(){
            document.getElementById("ventana10").style.display="none";
        }function cerrar11(){
            document.getElementById("ventana11").style.display="none";
        }
    </script>
    <title>Document</title>
</head>
<body>
<div class="contenedor">

    <?php

    include "includes/header.php";
    include "includes/nav.php";

    ?>

    <section>
        <?php
        include "includes/segundasVentanas.php"
        ?>
        <div id="parrafo">
        <p>Novedades ></p>
        </div>
        <div class="caja">
            <div class="parte">
                <div class="foto"><a href="javascript:abrir()" ><img src="img/mochila1.jpg" ></a></div>
                <p>Mochila - Do something amazing today</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir1()" ><img src="img/mochila2.jpg"></a></div>
                <p>Mochila - Doing my best</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir2()" ><img src="img/mochila3.jpg"></a></div>
                <p>Mochila - Hoy me voy a salir</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir3()" ><img src="img/mochila4.jpg"></a></div>
                <p>Mochila - Look great</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
        </div>
        <div class="caja">
            <div class="parte">
                <div class="foto"><a href="javascript:abrir4()" ><img src="img/bolsa%20de%20deportes1.jpg"></a></div>
                <p>Mochila deporte- Grandes planes para grandes ideas</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir5()" ><img src="img/Bolsa%20de%20deportes2.jpg"></a></div>
                <p>Mochila deporte - Hoy no hay quien me pare</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir6()" ><img src="img/Bolsa%20de%20deportes3.jpg"></a></div>
                <p>Mochila deporte gris</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir7()" ><img src="img/Bolsa%20de%20deportes4.jpg"></a></div>
                <p>Mochila deporte rosa</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
        </div>
        <div class="caja">
            <div class="parte">
                <div class="foto"><a href="javascript:abrir8()" ><img src="img/chanclas1.jpg"></a></div>
                <p>Chanclas azules</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir9()" ><img src="img/chanclas2.jpg"></a></div>
                <p>Chanclas verdes </p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir10()" ><img src="img/chanclas3.jpg"></a></div>
                <p>Chanclas rosas</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
            <div class="parte">
                <div class="foto"><a href="javascript:abrir11()" ><img src="img/neceser.jpg"></a></div>
                <p>Neceser - Hoy te has pasado de pibon</p>
                <div class="carro"><a href="#" ><img src="img/carrocompra.png"></a></div>
            </div>
        </div>
    </section>

    <?php
    include "includes/footer.php";
    ?>
</div>
</div>
</body>
</html>
