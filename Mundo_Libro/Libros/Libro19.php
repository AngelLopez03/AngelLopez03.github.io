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
                        <img src="../bdImg/aurora_boreal.jpg" width="200" height="280"
                         alt="Aurora Boreal">

                    </div>
	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					Jack Williams es un chico de 17 años que es amedrentado por una serie de sueños relacionados con un suceso que ocurrió un año atrás. En su escuela, en Jacksonville, Oregón, ha ocultado su terrible pasado aunque no lo suficiente, ya que por culpa de sus impulsos, ha levantado sospechas de que no es un chico normal.

                                Todo empieza a cambiar cuando llega  a su clase una nueva compañera; una chica de ojos azules que lo dejará hipnotizado por su belleza, además de por su extraña manera de vestir. Rápidamente, se enamorarán profundamente y se harán inseparables.
<br>
<br>
                                De repente, el tormentoso pasado de Jack regresa con más fuerza que nunca, por lo que tendrá que elegir entre estar con ella exponiéndola a constantes peligros, o alejarse de ella para siempre.

                                Prepárate para vivir una historia épica, donde el amor será el motor fundamental y el miedo, por su parte, el peor enemigo.
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Leonardo Garcia</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2017</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">4.21/5</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Aurora Boreal</b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Prologo</b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
             
                        —Algún día lo entenderás.
                        Esas fueron sus últimas palabras antes de marcharse. Eso al menos, fue lo que pude comprender, en el estado en el que me encontraba. La vida me tomo desprevenido. No supe cuando, como, ni porque. Solo sabía que algo grande sucedió, algo tan grande que cambiaría radicalmente mi vida; él había muerto…
                        …muerto después de salvar mi vida. Nunca comprenderé porque lo hizo, pero cual sea la razón, consiguió hacerme desertar de ese mundo en el que me encontraba. Hacerlo desaparecer de mis pensamientos para siempre, como si nunca hubiera existido, y escapar por la puerta trasera de ese doloroso momento, sin saber que lo peor, estaba por venir.
                        Esa terrible pesadilla golpeo de nuevo sobre mí, e hizo girar a trescientos sesenta grados para darme la estocada final y hacerme gritar desde mis adentros.
                        ¿Es que acaso esto nunca iba a terminar?
                        Pero de algo estoy seguro y es que, siempre estará marcado en mi vida…
                        …en mis pensamientos.
                        <br>
                        <br>
                        Tarde al menos un minuto en abrir los ojos, luego de que una gota de agua me cayera encima. Mi ojo derecho tardo un poco más, a causa de la tierra que me rodeaba. Estaba en el suelo, boca abajo. Moví mis brazos para intentar incorporarme y después de ello, al instante, sentí un dolor sobre la nuca que me hizo tambalearme y volver a caer en picada, aunque mi brazo lo impidió al detenerme sobre la tierra. El dolor era insoportable, como si una gran roca me hubiera apedreado con el fin de que perdiera el conocimiento, de tal forma que no recordara lo que había sucedido.
                        <br>
                        <br>
                        Al levantarme, sentí la necesidad de sacudir toda la tierra que enmugrecía mi camisa blanca de almidón. Divise el terreno para identificar en donde me encontraba; era un claro en dirección al mar hacia el Oeste. A un lado, había dos túnicas con capucha color café. Una de ellas era mí y la otra suponía de quien era, sin embargo, algo me olía mal.
                        Emprendí el paso hacia el Este, donde regrese a un bosque con árboles que rodeaban el panorama. Era oscuro, casi siniestro. Las hojas de los árboles, ocultaban uniformemente el cielo, aunque había pequeños destellos de una luz rojiza extraña. Sobre la tierra, había pequeñas pisadas de tierra en dirección hacia el Este, donde sin dudarlo, decidí seguirlos.
                        <br>
                        <br>
                        Me sentí cansado y sediento con cada paso que daba, haciendo trastabillar muchas veces. A lo lejos, encontré un pequeño rio que atravesaba el camino. Me acerque con la intención de beber agua y calmar mi insaciable sed. Di un sorbo el cual conduje con mis manos, la cual tuve que escupir al sentir una esencia amarga, que venía del interior de mi boca. Eso por otro lado, provoco un ardor en mis encías. Al examinarme con el reflejo del rio, me di cuenta que sangraba de mi labio inferior. Tome un sorbo de agua y la escupí para enjuagarme la boca, para luego repetir el proceso y beber agua.
                        Al cruzar el rio, mis pies daban pasos con menos dificultad. Pensé que estaba muy deshidratado, pero… ¿cuánto tiempo estuve desmayado? ¿Qué demonios había sucedido? Y la pregunta más importante. ¿Qué es lo que estaba buscando?
                        El tiempo se me hizo interminable sobre ese bosque. La otra mitad del bosque después de cruzar el rio, lucía hostil; las hojas de algunos árboles estaban esparcidas por la tierra, como si estuvieran en otoño, donde el cielo se abría en una capa de humo que me tomo por sorpresa. Luego, otros árboles estaban sobre el firmamento de un color cenizo, que únicamente me hacía recordar el olor a leña quemada. Todo era confuso que no podía asimilar lo que había ocurrido en este lugar.
                        Me estremecí.
                        <br>
                        <br>
                        A lo lejos divise el final del camino, donde a paso forzado, emprendí el paso sobre el último tramo del bosque. El sonido de los pájaros y cuervos, se escuchaban como un eco siniestro mientras me aventuraba hacia el cielo, para ver a los animales.
                        Cuando llegue al ras de la última capa de arboles del bosque, no podía creer lo que vi; era un gran castillo medieval en gris. Estaba impecable para ser viejo, pero una capa de rojo ensuciaba los ladrillos. Sangre pensé. También, había una ciudad destruida, con chozas de ladrillo y paja, donde el fuego ceso luego de la lluvia. Pero por debajo del castillo, estaba la verdadera razón que me dejo helado de pies a cabeza; había gente muerta.
                        <br>
                        <br>
                        Los cuerpos estaban blancos como la cal. Algunos estaban con las tripas de fuera, partidos a la mitad, degollados, aunque la sangre estaba fresca como si apenas hubiera sucedido la catástrofe. Había grandes cantidades de sangre que cubrían la ciudad, con charcos que matizaban cada rincón de la ciudad y castillo.
                        Camine con pesadez, confundido por la guerra que me perdí por alguien que salvo mi vida. Me hinque sobre la zona de guerra, dirigiendo una mano hacia el pecho queriéndome arrancar el corazón, cuando las lagrimas brotaron sobre uno de aquellos charcos de sangre, que venía hacia mí como una línea perfecta.
                        Por último, recuerdo que exhale con gran fuerza sosteniendo el aire en mis pulmones, y grite fuertemente hacia el cielo.

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
                        $query = "SELECT * FROM libros limit 11,2 ";
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
