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
	        			<img src="../bdImg/hp3.jpg" width="200" height="280" alt="Harry Potter y el Prisionero de Azkaban">
	        		</div>

	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					De la prisión de Azkaban se ha escapado un terrible villano, Sirius Black, un asesino en serie que fue cómplice de lord Voldemort y que, dicen los rumores, quiere vengarse de Harry por haber destruido a su maestro. Por si esto fuera poco, entran en acción los dementores, unos seres abominables capaces de robarles la felicidad a los magos y de eliminar todo recuerdo hermoso de aquellos que se atreven a acercárseles. El desafío es enorme, pero Harry, Ron y Hermione son capaces de enfrentarse a todo esto y mucho más.
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">J. K. Rowling</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">1999</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">.........</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Harry Potter y el Prisionero deAzkaban</b></h1>
                        </div>
                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b>Capítulo I: Lechuzas Mensajeras</b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                        El libro comienza en el verano de 1993, cuando Harry está en la casa de sus tíos. Hermione le ha enviado guías para la limpieza de su Nimbus 2000, por lo cual Harry está muy agradecido. Ron le ha enviado una foto de él y su familia en Egipto, pues ganaron un concurso del diario El Profeta y se fueron a visitar Bill, el hijo mayor de la familia. En la foto aparece su familia, y su rata Scabbers en su hombro.

                        Al día siguiente, Harry ve en las noticias que un fugitivo se ha escapado de prisión, llamado Sirius Black, aunque no mencionan de dónde se ha escapado. Harry, por su tío, se entera que su tía Marge pasará una semana con ellos. A Harry no le agrada mucho ella, dado que siempre lo critica por ser una molestia para sus tíos. Harry le pide a su tío que le firme una autorización del colegio para poder visitar Hogsmeade. Su tío le dice que si se comporta con su tía, le firmará el permiso.
                    <br>
                    <br>
                        Pasa una semana y Harry ha podido soportar a su tía, aunque en la última noche comienza a criticar a sus padres y Harry se enfurece mucho. Por arte de magia, su tía se infla como un globo y se va volando, y Harry se da cuenta que esa fue magia suya. Harry decide irse de la casa de sus tíos, asegurando que ha sido expulsado de Hogwarts.

                        Cuando menos lo esperaba, el autobús noctámbulo aparece, y le dicen a Harry que pueden llevarlo a donde quiera. Harry pide ir al Caldero Chorreante.

                        En el bus se entera que el fugitivo que vio antes en las noticias, Sirius Black, fue cómplice de Lord Voldemort, y que mató a trece personas (un mago y doce muggles) en una calle. Harry, para evitar problemas, se hace pasar por Neville Longbottom.
                    <br>
                    <br>
                        Al llegar a su destino, el Ministro de Magia, Cornelius Fudge le dice a Harry que pudieron recuperar a su tía y modificarle la memoria, y que cuando acabe el curso podrá volver a casa de sus tíos. Aunque a Harry le desagrada la idea, Fudge le dice que es su único hogar y que debe vivir ahí. Hasta que terminen las vacaciones, Harry alquila una habitación en el Caldero Chorreante.
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Capítulo II: Vuelta a Hogwarts</b></h1>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                En el Caldero Chorreante, Harry se encuentra con Ron y Hermione, sus dos mejores amigos. Ron decide comprarle algo a Scabbers, su rata. Cuando estaban en la tienda de animales Hermione se compra un gato, Crookshanks, que inmediatamente odia a Scabbers.

                                La noche antes de regresar a Hogwarts, Harry escucha una discusión entre el señor y la señora Weasley. Los oye mencionar que Sirius Black está en busca de Harry, aparentemente, para asesinarlo. Al día siguiente el señor Weasley se lo cuenta a Harry y le pide que no vaya a buscar a Black.

                                En el tren de Hogwarts, Harry, Ron y Hermione encuentran un compartimiento donde duerme el nuevo profesor de Defensa Contra las Artes Oscuras, Remus Lupin.
                            <br>
                            <br>
                                Mientras se dirigen a Hogwarts el tren se para de golpe y, repentinamente, todas las luces se apagan y un frío glacial invade el compartimiento. Todos se sienten de repente sin alegría, sin ganas de vivir, con una terrible desesperanza, y entonces una horrible criatura parecida a un espectro entra en el compartimento, y se acerca a Harry, quién se siente débil y sin fuerzas, pero entonces Lupin se despierta y expulsa a la criatura del compartimento con un conjuro. Harry se desmaya oyendo la voz de su madre en su cabeza.

                                Al despertarse, Harry ve que el profesor Lupin les está dando chocolate a todos para que recuperen las fuerzas, y explica a Harry que esa criatura era un dementor, los guardianes de la prisión de Azkaban, que absorben la esperanza, la alegría y el calor con su sola presencia.
                            <br>
                            <br>
                                Llegada a Hogwarts
                                Al llegar a Hogwarts, Albus Dumbledore anuncia a los alumnos que los dementores vigilarán cada entrada, estando pendientes de Sirius Black. También les anuncia que tendrán dos profesores nuevos: Remus Lupin sería su nuevo profesor de Defensa Contra las Artes Oscuras, y Hagrid sería su profesor de Cuidado de Criaturas Mágicas. Harry y Ron siguen teniendo las mismas materias que el año anterior además de Cuidado de Criaturas Mágicas y Adivinación, pero Hermione ha decidido tomar todas las que pueda.

                                En su nueva clase, Adivinación, la profesora Trelawney le dice a Harry que ha visto el Grim en su tasa, y que es una señal de muerte. Hermione piensa que su clase es una pérdida de tiempo.

                                La primera clase con Hagrid es un desastre: Buckbeak, un hipogrifo, hiere a Draco Malfoy. Malfoy lo amenaza diciendo que eso tendría repercusiones en el futuro. Luego tienen la primera clase con Lupin, que les enseña cómo enfrentarse a un boggart.
                            </p>
                        </div>
                    </div>
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 6,2 ";
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
