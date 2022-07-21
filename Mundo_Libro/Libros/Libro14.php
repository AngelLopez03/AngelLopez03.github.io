<?php
    include '../funciones.php';
    include 'conex.php';
    $link=mysqli_connect("localhost","root","","proyecto");
    //$con=mysqli_query($link,$query);
    //$link=traerPorID($tabla,$id)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mundo Libro</title>
        <link rel="icon" href="../img/LIBRO.jfif">
        <link rel="stylesheet" href="../Css/style.css"/>
        <script src="https://kit.fontawesome.com/86dc997a7b.js" ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../js/script_blog.js"></script>
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
            <section class="fila" id="seccion2_book">
                <div class="cabecera col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="container_img_book col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img src="../bdImg/la_edad_de_oro.jpg" width="200" height="280" alt="La Edad de Oro">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p><b>Sinopsis:</b></p>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Cuando Isabella Swan se muda a Forks, una pequeña localidad del estado de Washington donde no deja de llover, piensa que es lo más aburrido que le podía haber ocurrido. Pero su vida da un giro excitante y aterrador una vez que se encuentra con el misterioso y seductor Edward Cullen. Hasta ese momento, Edward se las había arreglado para mantener en secreto su identidad vampírica, pero ahora ya nadie está a salvo, ni siquiera la persona a quien él más quiere: Isabella.
                            </p>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <!--PARTE DE ARRIBA-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

                            <!--RELLENO O PARTE DE ABAJO-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">José Martí</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">1889</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">,...........</div>
                        </div>
                    </div>
                </div>
            </section>

        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>La edad de oro </b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Resumen</b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                “Trincheras de ideas valen más que trincheras de piedras.” José Martí.
                                La Edad de Oro fue una revista infantil del pensador cubano, mediante la que pretendía incitar en los pequeños los valores de la búsqueda del conocimiento, el amor y la justicia, pilares de pensamiento que guiaron toda su vida y obra y que han sido ejemplo para millones de personas en Latinoamérica y el mundo.

                                “Ser cultos para ser libres.” José Martí
                                En la SCCA José Martí nuestra máxima es: ser cultos para ser libres. Por eso, nos hemos marcado este año como nuestro principal objetivo sacar adelante una bella reedición ilustrada del clásico martiano para niños y niñas.
                                Creemos importante que el primer gran proyecto que afrontamos como asociación esté dedicado a la infancia porque, como decía Martí: enseñar es lo más bello y honroso del mundo, y los niños son la esperanza del éste.
                            <br>
                            <br>
                                “Personas recogerá quien siembre escuelas.” José Martí
                            <br>
                            <br>
                                PreviousNext
                                Descripción del proyecto. Características, fortalezas y diferenciales.
                                Queremos editar la recopilación de cuentos infantiles "La Edad de Oro" de José Martí. En una primera edición de 500 ejemplares, con prólogo e ilustraciones originales, para actualizarlo al siglo XXI. Con 16 ilustraciones a color.

                                Lo haremos con una pequeña editorial local, para fomentar la economía social.
                            <br>
                            <br>
                                Los ejemplares serán distribuidos como recompensa a los cofinanciadores (20€) o vendidos a precio de coste, puesto que somos una asociación sin ánimo de lucro y nuestro objetivo es la difusión de los valores y pensamiento humanista de José Martí.

                                Una vez publicado, la segunda fase del proyecto consistirá en la organización de eventos y campañas de comunicación para dar a conocer el libro, pero sobre todo, para difundir los valores que lo fundamentan.
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b></b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>

                            </p>
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b></b></h1>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 15,2 ";
                        $result = mysqli_query($link, $query);

                         
                        if (mysqli_num_rows($result)  >0 ) {
                         
                            while($fila = mysqli_fetch_assoc($result) ){
                                $titulo= $fila["title"];
                                $img= $fila["foto"];
                                $link = $fila["link"];
                                $post=postaside("../$link", "$titulo","../$img"," ", " ");                            } 
                        } else {
                            die("Error: No hay datos en la tabla seleccionada");
                        }                            
                    ?>
                    </div>
                </div>
            </section>

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
                        <a href="#" class="txt col-xs-0">LOGIN</a>
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

                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5">
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
