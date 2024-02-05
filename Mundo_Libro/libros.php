<?php
    include 'funciones.php';
    include 'conex.php';
    session_start();
    $link=mysqli_connect("localhost","root","","proyecto");
    /* if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
            alert("Por favor debes iniciar sesión");
        </script>';
        header('location: login.php');
        session_destroy();
        die();
    }*/
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mundo Libro</title>
        <link rel="icon" href="img/LIBRO.jfif">
        <link rel="stylesheet" href="Css/style.css"/>
        <link rel="stylesheet" href="Css/blog.css">
        <script src="js/script_principal.js"></script>
        <script src="https://kit.fontawesome.com/86dc997a7b.js" ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    </head>
    <body>
        <div class="contenedor">
        	<header class="fila">
        		<div id="logo" class="col-lg-3 col-md-4 col-sm-4 col-xs-12"><a href="index.php"><center>Mundo Libro</center></a></div>
        		<div class="position col-lg-7 col-md-6 col-sm-6 col-xs-0">
        			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-0"> <a href="index.php">INICIO</a> </div>
        			<div class="col-lg-3 col-md-0 col-sm-0 col-xs-0"> <a href="nosotros.php">ACERCA DE</a> </div>
        			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-0"> <a href="libros.php">LIBROS</a> </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0"> <a href="Graficos.php">GRÁFICOS</a> </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0"><a href="../index.html">VOLVER</a></div>
        		</div>
        		<div class="position1 col-lg-2 col-md-2 col-sm-2 col-xs-12">

                    <?php
                            if (isset($_SESSION['usuario'])) {
                    ?>
                                <div class="cerrar col-lg-5 col-md-5 col-sm-5 col-xs-5"><a href="backend/cerrar_sesion.php">Cerrar Sesión</a></div>
                                <i class="fas fa-user icon_user col-lg-1 col-md-1 col-sm-1 col-xs-1"></i>                               
                    <?php   
                            }else{

                    ?>
        			<div id="icono1" class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="login.php"><center><i class="fas fa-user"></i></center></a></div>

                    <?php
                            }
                    ?>



        			<div id="icono2" class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><center><i class="fas fa-search"></i></center></div>
        			<!--div id="icono2" class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><center><i class="fas fa-cart-arrow-down"></i></center></div-->
        		</div>
        	</header>

            <section class="fila" id="seccion2">
                <div class="libros-container-cover col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container-info-cover col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                        <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">LIBROS</h1>
                    </div>
                </div>
            </section>

            <div class="container-post">

            <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
            <input type="radio" id="CIENCIA_FICCION" name="categories" value="CIENCIA_FICCION">
            <input type="radio" id="DARMA" name="categories" value="DARMA">
            <input type="radio" id="CUENTO" name="categories" value="CUENTO">
            <input type="radio" id="MISTERIO" name="categories" value="MISTERIO">
            <input type="radio" id="INFANTIL" name="categories" value="INFANTIL">

            <div class="container-category">
                <label for="TODOS">TODOS</label>
                <label for="CIENCIA_FICCION">CIENCIA FICCION</label>
                <label for="DARMA">DRAMA</label>
                <label for="CUENTO">CUENTO</label>
                <label for="MISTERIO">MISTERIO</label>
                <label for="INFANTIL">INFANTIL</label>
            </div>

            <div class="posts">
               <?php
                            $query = "SELECT * FROM libros";
                            $result = mysqli_query($link, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while($fila = mysqli_fetch_assoc($result)){
                                    $titulo= $fila["title"];
                                    $img= $fila["foto"];
                                    $fechap = $fila["fecha_de_publicacion"];
                                    $autores = $fila["autores"];
                                    $link = $fila["link"];
                                    $filtro = $fila["tema"];
                                    $post=postlibro("$img", "$link", "$titulo", "$filtro", "fffff", "$fechap", "$autores");
                                } 
                            } else {
                                die("Error: No hay datos en la tabla seleccionada");
                            }
                    ?>
            </div>
        </div>

        <footer class="fila col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="content_nosotros col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">
                                <a href="index.php" class="txt">INCIO</a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                                <a href="#" class="txt">ACERCA DE</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <a href="libros.php" class="txt">LIBROS</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <a href="Graficos.php" class="txt">GRÁFICOS</a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="txt">CONTACTANOS</a>
                            </div>
                            <div class="col-lg-0 col-md-0 col-sm-2 col-xs-12">
                                <a href="#" class="txt">LOGIN</a>
                            </div>
                        </div>
                    </div>
                    <div class="nosotros col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="titulo space col-lg-12 col-md-12 col-sm-12 col-xs-12"><p>NOSOTROS</p></div>
                        <div id="title" class="titulo col-lg-12 col-md-12 col-sm-12 col-xs-12">MUNDO LIBRO</div>
                        <div class="txt space col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex dolor eos quos suscipit. Quis a dolorem repudiandae, reprehenderit commodi esse voluptatibus exercitationem distinctio ipsum. Facilis aliquid optio consequuntur eum!
                            </p>
                        </div>
                        <div class="titulo space col-lg-12 col-md-12 col-sm-12 col-xs-12">MANTENTE CONECTADO</div>
                        <div class="titulo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">f</div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">t</div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">G</div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">G+</div>
                        </div>
                    </div>
                    <div class="destacado col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="titulo col-lg-12 col-md-12 col-sm-12 col-xs-12">CONTENIDO DESTACADO</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">asistencia a la investigación</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Pago del libro</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Libros electrónicos</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Archivo</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Referencia electrónica</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Revistas</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="txt">Comunicados de prensa</a>
                        </div>
                    </div>
                </div>
                <div class="contenedor_otros col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-0">
                        <div class="col-lg-10 col-md-10 col-sm-0 col-xs-0"></div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            <a href="login.php" class="txt col-xs-0">LOGIN</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="titulo col-lg-12 col-md-12 col-sm-12 col-xs-12">ÚLTIMOS LANZAMIENTOS</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="comm">
                                Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Eius fuga porro, blanditiis inventore est sit eligendi corrupti delectus dicta vitae aut unde nostrum sint quas molestiae nulla in quidem cupiditate!
                            </a>
                        </div>
                        <div class="txt col-lg-12 col-md-12 col-sm-12 col-xs-12">Febrero 15, 2018</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="comm">
                                Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Eius fuga porro, blanditiis inventore est sit eligendi corrupti delectus dicta vitae aut unde nostrum sint quas molestiae nulla in quidem cupiditate!
                            </a>
                        </div>
                        <div class="txt col-lg-12 col-md-12 col-sm-12 col-xs-12">Febrero 15, 2018</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="comm">
                                Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Eius fuga porro, blanditiis inventore est sit eligendi corrupti delectus dicta vitae aut unde nostrum sint quas molestiae nulla in quidem cupiditate!
                            </a>
                        </div>
                        <div class="txt col-lg-12 col-md-12 col-sm-12 col-xs-12">Febrero 15, 2018</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="titulo col-lg-12 col-md-12 col-sm-12 col-xs-12">CONTACTANOS</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" placeholder="Nombre" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" placeholder="Correo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" placeholder="Mensaje" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="submit">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_derechos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                © 2021 Mundo Libro. Todos los derechos reservados | Diseñado por 3ero <b>INFOR.</b>
            </div>
        </footer>
    </body>
</html>