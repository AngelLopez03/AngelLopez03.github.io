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
                        <img src="../bdImg/celda211.jpg" width="200" height="280"
                         alt="Celda 211">

                    </div>
	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					La mala suerte lleva a un funcionario de prisiones novato a presentarse en la cárcel de Sevilla el mismo día en que se produce un motín de presos. Enredado en un destino tan caprichoso como trágico, que lo obliga a utilizar al máximo los recursos de su inteligencia, este hombre va descubriendo que no es tímido, que no es débil, que quizá ni siquiera es un hombre bueno, como siempre había creído: es un superviviente nato al borde del abismo. Escrita con un habilísimo manejo del punto de vista y de la voz narrativa, Celda 211 renueva el tema del hombre que se ve obligado a sobrevivir fuera de su medio poniendo al límite sus capacidades, abordándolo desde el género negro carcelario, desconocido hasta ahora en España. Se convierte, así, en una obra que da a nuestra narrativa exactamente lo que estaba necesitando: un argumento de tremenda contundencia, plagado de giros en la trama, y un personaje camaleónico arrastrado por un destino de intensidad trágica. ¿Quién da más?
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Francisco Pérez Gandul</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2003</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">.........</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Celda 211</b></h1>
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


                                Le pasa esto, qué no le ocurrirá cuando Malamadre le enseñe los colmillos. No se lo contaré a Elena, se preocuparía, y no es nada, solo los nervios, la maldita ansiedad que me atenaza siempre el primer día. Solo los nervios, la maldita ansiedad que me atenaza siempre el primer día. Elena en la puerta de casa, le sonreí, pero ya tenía la maroma de la angustia serpenteando ahí abajo, buscándose las puntas con escorzos, hasta que se hizo nudo al llegar a la puerta de la prisión.

                                Elena aquel día en que terminamos amándonos encima de la mesa de roble de la cocina. « Conoceré la prisión y a los nuevos compañeros». Créanme si les digo que Juan Oliver era un buen hombre. No era yo quien debía recibirlo, pero se presentó un día antes de lo dispuesto, y el jefe, José Utrilla, celebraba su santo.

                            <br>
                            <br>
                                Recuerdo perfectamente su timidez, su forma nerviosa de asentir a lo que le decía, y esa sonrisa media, franca pero media, que dibujaban sus labios cuando, tratando de romper el hielo, le conté un par de chistes de presos, de esos que, por antiguos y manidos, parecen colgar de los barrotes de las celdas como ripios en los azulejos de las tabernas. Se sintió azorado en el cuerpo de guardia. Recuerdo que en compañía de Germán, responsable ese día del módulo, y de Fermín Solano, otro funcionario, le propuse que recorriéramos las instalaciones de la prisión. Se diría que aquellos largos pasillos, flanqueados por las celdas, le producían claustrofobia.

                                Y en aquel módulo las miradas eran duras, provocativas, permanentemente envalentonadas. Acababa de preguntar por el sistema electrónico con el que se cerraban las celdas cuando observé cómo el sudor se deslizaba por sus sienes rumbo a las mejillas y su rostro se ponía lívido. Cayó como si lo hubiese diseñado con una plomada y en un instante su cuerpo fue un montón de escombros sobre el piso. Maldita la hora en que no le hice caso a Fermín, maldita sea.
                            <br>
                            <br>
                                «Coño, te lo dije, pero Armando Nieto de los cojones siempre tiene que llevar la razón». Germán. Al que llamen así no puede haber salido buen hijo. Elena ha llenado ese hueco.
                            <br>
                            <br>
                                Añoro su ternura, esa capacidad que tenía para ver sin necesidad de abrir los ojos, y su fortaleza. De estar aquí ya me habría dicho que he salido a mi padre, que cuando me duele algo parece que a nadie le ha dolido nunca tanto, que me deje de tonterías de angustias y que afronte la vida como hay que hacerlo, mirándola cara a cara, sin perderle nunca de vista los ojos verdes de la esperanza ni los negros de las desgracias, sin chulearla pero sin convertirme jamás en rehén del destino. «Puede ser que todo esté escrito, hijo, pero nadie nos puede obligar a que lo escribamos nosotros mismos», y miraba a papá con aquellos ojos que rezumaban miel y que cuando se cargaban de razón fraguaban en ámbar. Malamadre, seguro, no le habló nunca así la suya.

                                Parece buen tipo este Armando. Bueno, aún no sé si José Utrilla lo será. Estamos en el módulo 5. Acababa de preguntar qué ocurría cuando Germán y Fermín, que habían salido a la galería nada más escuchar la alarma, volvieron crispados.
                            <br>
                            <br>
                                No podíamos llevarnos a Juan con nosotros. Con él a hombros no hubiésemos podido llegar a la zona de seguridad. Llevamos muchos años aquí y sabemos cómo es el módulo 5. Bailarín le había rebanado el cuello a aquel moro que días antes le estafó cortándole con demasiado talco el gramo de coca, y los árabes quisieron hacer una yihad.

                                Bailarín no era cristiano, no tenía alma, era un animal, pero Malamadre, Pincho y Gardel se convirtieron en sus cruzados. Nosotros lo recordamos muy bien, pero que muy bien, por fortuna, no como Anselmo, a quien ensartaron allí mismo cuando trataba de reducir a Bailarín. Treinta puñaladas le dieron, treinta, que nos lo sopló el forense, y qué quieren que les diga, Pincho y Malamadre llegaban corriendo y teníamos el tiempo justo para tratar de llegar a la zona de seguridad. No nos podíamos llevar a Juan, compréndanlo, mejor que cojan a uno que a cuatro.
                            <br>
                            <br>
                                Resbaló y se golpeó la rodilla, menos mal que Germán venía detrás y lo metió a rastras tras la verja. «Eres mi padre», decía después abrazándose a él. Me da vueltas la cabeza, he debido de quedarme echado. Escuché a Germán decir algo así como «Tenemos que irnos».

                                Ya sé, les he asustado y se han ido a buscar al médico. Había hecho un paradón y me di con el palo de la portería en la cabeza. Parecía que la vida se me iba, como si la sangre saliera de estampida de la cabeza y quisiera huir por los pies. «Coño, Juan, te movías muy raro, como si tuvieras rabos de lagartijas metidos en el cuerpo».
                            <br>
                            <br>
                                Desde la zona de seguridad vimos entrar a Releches en la 211 y empezamos a rezar. Releches es una escoria de arrabal, uno de esos tipos sin carácter que se convierten en parásitos de los matones, los manejan como quieren. Sus facciones de niño lo hacían muy apetecible, y lo que le faltaba de cabeza le sobraba de culo. «Te has vuelto vieja y apestada, ya no sirves ni de puta», le suele decir Malamadre en el comedor.

                                Malamadre. Fue Releches el que entró en la 211. Se lo señalé a José Utrilla, que acababa de llegar. Le estaba enseñando la prisión cuando se mareó, lo tendimos en el camastro de la 211 y en ese momento se desencadenó el motín.

                                Releches acaba de encontrárselo, mira.

                            </p>
                        </div>
                        
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 13,2 ";
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
