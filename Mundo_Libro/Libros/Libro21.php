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
	        		<div class="container_img_book col-lg-4 col-md-3 col-sm-3 col-xs-4">
                        <img src="../bdImg/azafran.jpg" width="200" height="280"
                         alt="Azafran">

                    </div>
	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					Azafrán se adentra en los cambios interiores del ser humano a través de un viaje emprendido por un maestro de la época andalusí.
                                    Armado apenas con un Corán, algo de ropa y la pluma que en día le regalara el imán, Mukhtar deambulará por el viejo y todavía esplendoroso al-Ándalus y recorrerá las callejuelas de Sevilla, Córdoba y Granada. Sin embargo, no tardará en darse cuenta de que su viaje no es solamente físico: gracias a las enseñanzas de distintos maestros a los que irá encontrando en el camino, Mukhtar descubrirá un sendero de conocimientos en el que confluyen las tres religiones que en aquel momento convivían: el islam, el cristianismo y el judaísmo.
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Jose Manuel Garcia Marin</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2010</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">...........</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Azafran</b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b>Capítulo I</b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Asoma a mi mente el recuerdo cercano de los años en que, ocupado en la enseñanza del Corán a los hijos de mis perdidos vecinos, sentado en el patio de la pequeña mezquita, los días se me antojaban rutinarios, marcada mi vida para siempre por la monotonía de las clases, sólo interrumpida por el bullicio de los niños que convertían —ahora lo sé—, sólo ellos, un día diferente a otro. ¿Qué ha sido de ellos y de sus padres? ¿Qué ha sido de mi tranquila vida en ese patio con aromas de azahar? ¡Cuántas huidas, cuánto dolor, cuánta sangre derramada, disfrazadas las intenciones de invasión y de saqueo bajo la piadosa excusa de las religiones!
                                <br>
                                <br>
                                    Ahora el poder es de los cristianos y, rotas sus promesas a sangre y fuego, han acabado con todo, incluso con el sentido de mi vida. Otros, más valientes y más dignos, han sabido huir a tiempo aun a riesgo de su aliento, repugnándoles la idea de quedarse y convertirse a la cruz, como cobardemente he hecho yo, el maestro de sus hijos. Pero qué puede hacer un hombre pacífico ante enemigo tan poderoso. Yo no soy un guerrero, nunca supe reaccionar a la violencia; por eso, a veces, cuando pienso en ello, justifico mi rendición en la de todos, en la incapacidad de oposición que provoca el miedo, el estupor. Debe de ser esa misma violencia la que me ha despertado de este maldito sueño lleno de indolencias, adormilado el espíritu para poder aceptar las humillaciones y los abusos, que he visto, sobre los que se quedaron negándose a abjurar de su doctrina. Tarde, muy tarde, hoy he comenzado el camino hacia el esperanzado reino de Gharnata. Abandono mi pueblo, que no mis pertenencias, que nunca tuve, y quizás no tener de qué despojarme me lo haga más fácil. Huyo, huyo como un fugitivo en la noche que, debiendo ser tenebrosa, fría y acaso tempestuosa para corresponder a mi alma, es, en cambio, serena y cálida, y las estrellas brillan más que nunca en el cielo de mi Aljarafe sevillano. Tengo miedo de que me delate la luna.
                                <br>
                                <br>
                                    Al inicio del camino, acabado el trecho mal empedrado que marcaba la salida del pueblo, bien rebasados los restos de muralla, Mukhtar ben Saleh se volvió para recorrer con su húmeda mirada las viejas casas, humildes, pero que tanto le habían reconfortado al regreso de sus cortos y escasos viajes, motivados únicamente por aquellos acontecimientos familiares que lo habían requerido, a pueblos o aldeas a no más de dos días de distancia. Jamás volvería a contemplarlas.
                                    Con un suspiro de resignación emprendió la marcha abrigado con su albornoz de lana, encima de la camisa y los zaragüelles, suficiente para aquella suave noche de marzo de 1252. [1] Al hombro, un hatillo con apenas dos mudas, un Corán, la pequeña alfombra de rezos, tinta y el cálamo que una vez le regaló el imán, y por todo capital unas cuantas doblas para resistir con privaciones, a lo sumo, un mes.
                                                                    <br>
                                <br>
                                    A medida que avanzaba por la vereda, entre viejos olivos, se adentraba en su propia infancia, cuando corría entre ellos junto a los otros niños. A menudo el leve rasguño de la áspera corteza sobre la piel infantil, al agarrarse al árbol para describir un giro inesperado, burlando a su perseguidor, entre risas y alborotos.
                                    O cuando trepaban a las ramas, para desesperación de Abdel Tawwâb, que llegaba corriendo para ahuyentarlos, como si de pajarillos, de zorzales, se tratara; hecho una furia y, en el fondo, la risa contenida. Sí, Abdel formaba parte del juego, como recoger collejas a los pies de los olivos, bajo su mirada divertida, en aquellas mañanas de invierno, frías y luminosas, pisando la tierra enfangada hasta no poder andar del peso del barro, pegado a las suelas, que había que arrancar con las manos para, a los pocos pasos, repetir la operación. ¡Cómo olía la hierba, la tierra mojada! Más allá, junto a las piedras aisladas llenas de musgo, esas flores violáceas de las que nunca supo el nombre, pero que ellos llamaban «candilitos» por el parecido con los auténticos. Se las llevaban y con un poco de aceite y unas hebras para hacer una torcida, les prendían fuego, cogidas por el tallo. Había que hacerlo pronto porque enseguida quedaban mustias.
                                                                    <br>
                                <br>
                                    No había tenido más hermanos, pero el padre, orgulloso de lo rápido que aprendía el Corán, había albergado esperanzas de verlo un día como un respetado ulema. Su prematura muerte, seguida un año después por la de su madre, había malogrado esos anhelos que, por otra parte, no eran más que ilusiones de un alfarero cuya economía no daba para enviarlo a estudiar a Qurtuba. Hasta entonces había tenido una infancia despreocupada y alegre, donde el calor del hogar era una extensión de ese otro calor que sólo se siente bajo la protección del cariño incondicional. Los vecinos, conmovidos por la temprana orfandad a sus dieciséis años, habían logrado que entrara en la mezquita como ayudante para todo, y le encomendaban recados para que, con el apoyo de unos y de otros, pudiera ir viviendo. Pero su otrora expresión feliz se trocaría en adelante en un aire apesadumbrado, con ciertos ribetes de desamparo que, sin embargo, no lo dotaban de apariencia hosca ni agria, sino tierna y como deseosa de hallar migajas de caricias. Sólo estando entre los niños afloraba a sus ojos negros la luz de juegos pasados.
                                                                    <br>
                                <br>
                                    Los ruidos de la noche entibiaban su soledad de caminante, en lugar de atemorizarlo. 
                                    Volvían a él otros crujidos, otros murmullos; sonidos tranquilizadores de ladridos lejanos, de grillos y de cucos en las noches de verano; el leve ajetreo de su madre en las mañanas o la sorda cadencia del torno de su padre que, ya en el minúsculo taller, en la planta baja, comenzaba la jornada. Le gustaba bajar saltando los escalones, apareciendo de improviso, lo que había provocado algún que otro estropicio de cacharros y la justa irritación de su padre junto con las burlas de Ornar, el barbero, que parecía estar más tiempo en el
                            </p>
                        </div>
                    
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 21,2 ";
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
