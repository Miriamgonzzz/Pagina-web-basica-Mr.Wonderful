<script type="text/javascript">
    function pon(){
        document.getElementById("clausula").style.display="block";
    }function clos(){
        document.getElementById("clausula").style.display="none";
    }
</script>


<header>
    <div class="ven" id="clausula">
        <div id="clos"><a href="javascript:clos()"><img src="img/error.png"></a></div>
        <li><h2>¿Ya estas regisrado?</h2></li>
        <li><label> Correo:</label><input name="correo" type="email"></li>
        <li><label> Contraseña:</label><input name="contraseña" type="password"></li>
        <li><a href="#"><p>¿Has olvidado tu contraseña?</p></a> </li>
       <li><hr></li>
        <li><input type="submit" value="Iniciar sesion" ></li>
        <li><input type="submit" value="Crear nueva cuenta" ></li>
    </div>
    <div class="foto">
        <img src="img/foto1.png" alt="Logo_Mr.Wonderful" title="Logo de Mr.Wonderfull">
    </div>
    <div class="redes">
        <a href="javascript: pon()"><li> <input type="submit" value="Iniciar Sesion"></li></a>
        <div id="fotos">
        <a href="https://es-es.facebook.com/mrwonderfulshop/"><img src="img/facebook.png"></a>
        <a href="https://www.instagram.com/mrwonderful_/?hl=es"><img src="img/instagram1.png"></a>
        <a href="Productos.php"><img src="img/carrocompra1.png"></a>
        </div>
        <div class="box">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search" ></i></span>
                <input type="search" id="search" placeholder="Buscar..." />

            </div>
        </div>
    </div>
</header>
