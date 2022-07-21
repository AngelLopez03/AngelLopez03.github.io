<?php
include 'funciones.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mundo Libro</title>
        <link rel="icon" href="img/LIBRO.jfif">
        <link rel="stylesheet" href="Css/style.css"/>
        <script src="https://kit.fontawesome.com/86dc997a7b.js" ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="js/script_blog.js"></script>
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

        	<section class="fila" id="seccion2_book">
        		<div class="cabecera col-lg-10 col-md-10 col-sm-10 col-xs-10">
	        		<div class="container_img_book col-lg-4 col-md-4 col-sm-4 col-xs-4">
	        			<img src="img/BB1.jpg" alt="BILL BRYSON">
	        		</div>

	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					En "Una breve historia de casi todo" intenta entender qué ocurrió entre la "Gran Explosión" y el surgimiento de la civilización, cómo pasamos de la nada a lo que ahora somos. El autor aborda materias tan terriblemente aburridas como geología, química y física, pero lo hace de forma tal que resultan comprensibles y amenas. La cuestión es cómo sabemos lo que sabemos. En sus viajes a través del tiempo y del espacio Bryson se topa con una espléndida colección de científicos asombradamente excéntricos, competitivos, obsesivos e insensatos.
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Bill Bryson</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2003</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">4.21/5</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
        		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        			<div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>Una breve historia de casi todo</b></h1>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>sinopsis</b></h1>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						En Una breve historia de casi todo intenta entender qué ocurrió entre la Gran Explosión y el surgimiento de la civilización, cómo pasamos de la nada a lo que ahora somos. El autor aborda materias tan terriblemente aburridas como geología, química y física, pero lo hace de forma tal que resultan comprensibles y amenas. La cuestión es cómo sabemos lo que sabemos. En sus viajes a través del tiempo y del espacio Bryson se topa con una espléndida colección de científicos asombradamente excéntricos, competitivos, obsesivos e insensatos.
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h2><b>Capítulo I: Perdidos en el cosmos</b></h2>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>1. Cómo construir un universo</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						No hay mejor inicio de la historia del universo que con su creación. El autor narra cómo incluso en nuestros días sigue en debate la cuestión de la edad del inicio del Universo, pero la teoría con más peso es que tiene 13.700 millones de años. Este apartado trata del completísimo tema de la Gran Explosión y las teorías al respecto. Hay quienes piensan que nuestro universo es solo uno de los universos de un eterno ciclo de expansión y colapso; que posible que nuestro universo sea más pequeño de lo que creemos y que sea parte de muchos universos.
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>2. Bienvenido al sistema solar</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						Hoy los astrónomos pueden hacer cosas tan increíbles como estudiar planetas tan lejanos como para que nos costara llegar hasta ellos, en nave espacial, medio millón de años. La realidad es que las distancias son tales, que es imposible dibujar el sistema solar a escala y ni siquiera conocemos lo que hay en él. Aunque Plutón sea el último objeto que muestran los mapas escolares, el sistema solar no termina ahí sino mucho más lejos. El borde del sistema solar es la nube de Oort, un área enorme de cometas a la deriva y para llegar a él tardaríamos 10.000 años. Así pues, es imposible que conozcamos todo nuestro sistema solar y menos que lleguemos hasta el borde. Ya el viaje a nuestra Luna (a 386.000 km.) es un enorme reto. Y el viaje a Marte se ha desestimado porque, aparte del imponente montante económico, no habría humano que lo soportara (el ADN de los tripulantes se haría pedazos). Fuera de nuestro sistema solar, nuestro vecino más próximo es Próxima Centauri, que forma parte de un grupo de estrellas llamado Alfa Centauri y que está a 4,3 años luz. Es decir, que, si pudiéramos viajar hacia ellas, nos costaría llegar unos 25.000 años. El siguiente punto de llegada sería Sirio, a la misma distancia. Para llegar al centro de nuestra Galaxia, la Vía Láctea, necesitaríamos más tiempo del que llevamos viviendo como seres. La distancia media entre estrellas en el universo es de 30 millones de millones de km. Sobre la cuestión de si puede haber vida en otros lugares de la Vía Láctea, es bastante probable. Solo hay que pensar que nadie sabe cuantas estrellas hay en esta Galaxia. Los cálculos oscilan entre 100.000 millones y 400.000 millones. Y la Vía Láctea solo es una de los 140.000 millones de galaxias que existen, muchas de ellas mucho más grandes. Así pues, el autor da el increíble dato de que:
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>3. El universo del Reverendo Evans</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						Robert Evans es un ministro de la iglesia Unitaria Australiana que está semijubilado pero que, por las noches, se transforma en un cazador de supernovas. Una supernova se produce cuando una estrella gigante (más grande que nuestro sol) explota liberando una gran energía y ardiendo durante un tiempo. Las estrellas mueren constantemente y Evans es capaz de captar ese momento ocurrido hace mucho tiempo cuando llega a nuestra retina. Sí, lo que vemos es historia. Un ejemplo, la Estrella Polar que vemos podría haberse apagado hace siglos. Es sorprendente la inmensidad del universo. Desde la tierra, a simple vista, pueden observarse unas 6000 estrellas. Con unos prismáticos la cifra puede subir hasta 50.000. Con un telescopio pequeño, de 2 pulgadas, puede llegar a verse 300.000. Con un telescopio de 16 pulgadas, como el que tiene Evans, se pueden contar hasta 100.000 galaxias (cada una con 10.000 millones de estrellas). Ver esta explosión es todo un milagro porque en una galaxia típica (que tiene unos 10.000 millones de estrellas) se puede producir una supernova cada 200 años. En toda la historia de la astronomía se han podido descubrir unas 60 supernovas. Este clérigo aficionado a la astronomía ha descubierto desde el jardín de su casa 34 supernovas (en 20 años de observar el cielo). Es algo digno de mención y, como dice el propio Evans, es maravilloso que él se encuentre ahí para ser testigo de la luz que emite una estrella al morir, después de ir viajando por el universo millones de años. Se cree que el reverendo Evans tiene autismo.
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>Capítulo II: El tamaño de la tierra</b></h1>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>4. La medida de las cosas</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						En 1735, la gente se hallaba infectada por un poderoso deseo de comprender la Tierra: determinar su antigüedad y su tamaño, de dónde colgaba en el espacio y cómo había llegado a existir. Fueron muchos los años en los que se debatían con verdadero furor las teorías más diversas sobre el origen de la tierra, su evolución y sus medidas. En La medida de las cosas se destaca de forma preferente la extravagante figura del profesor de Cambridge, Isaac Newton, que nos dejó la primera ley universal de la naturaleza: la ley de la gravitación universal. Gracias a ella se pudo comprender la curva descrita por los planetas y el origen de su movimiento. Pero no solamente nos cuenta este acontecimiento científico, sino que el autor de este libro nos hace partícipes de las excentricidades de este hombre y hemos podido saber que no habríamos llegado a conocer tan importante descubrimiento si no hubiera sido por el Prof. Halley, que pagó de su bolsillo la impresión del tercer volumen de los Principia Matemática, sin el cual para nada servían los anteriores tomos. Otra cuestión que se presenta en este capítulo es el cálculo de la distancia que separa al Sol de la Tierra, que hacía enfrentarse a los científicos. Se iniciaron muchas expediciones para poder emprender esa tarea y nació la primera empresa internacional de la historia. Finalmente se concluyó que la distancia era de casi 150 millones de km. Es de destacar un hombre que no era científico precisamente sino párroco de una aldea aislada, que fue quien descubrió cosas tan importantes como el carácter ondular de los terremotos y previó la posibilidad de que existieran agujeros negros.
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>5. Los coleccionistas de rocas</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						El capítulo se centra en solitarios personajes que realizaron grandes avances al momento de entender a la tierra. Como James Hutton quien según el autor era: “un hombre de agudísima inteligencia y animada conversación, encantador en compañía y que no tenía posible rival en la interpretación de los lentos y misteriosos procesos que conformaron la Tierra. Pero, desgraciadamente, era incapaz de exponer sus ideas de forma que alguien pudiese entenderlas”. Sin embargo, “solo y con gran inteligencia creó la ciencia de la geología y transformó nuestra forma de entender la Tierra”. Otro caso singular fue el de Cavendish quien, totalmente aislado por su fobia al contacto social, hizo importantes descubrimientos y fue el primero que aisló el Hidrógeno y uniéndolo al oxígeno formó agua. Sin ningún tipo de tecnología hizo mediciones muy exactas que se han comprobado después con aparatos muy sofisticados. También hubo importantes debates sobre las fases de la tierra y emergió la Geología como Ciencia. Hoy día la clasificación más aceptada es la de Precámbrico, Paleozoico, Mesozoico y Cenozoico, con los subgrupos de Cretácico, Jurásico, Triásico, Silúrico, etc. Muy importante para aportar datos a esta cuestión es la recopilación y descripción de fósiles. Por eso resulta tan sangrante que la historia haya olvidado a una mujer que encontró y describió con gran cuidado una gran cantidad de fósiles. Todo esto sin ayuda y sin formación académica alguna. Hablamos de Mary Anning.
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h3>6. Grandes y sangrientas batallas científicas</h3>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						El autor comienza este subcapítulo narrando como en Nueva Jersey el año 1787 se encontró un fémur de dinosaurio, el cual nunca se analizó y quedó en el olvido, a lo que él respondió lo siguiente: “Resulta bastante desconcertante que ese hueso no despertase más interés, ya que su aparición se produjo en un momento en que había muchísimo interés en el país por los restos de grandes animales antiguos”. Destacando que para la época debió existir inclinación respecto al tema, debido a su importancia para la ciencia. Luego se plantea como el Conde de Buffon en respuesta a los restos de animales encontrados en América afirma que los seres vivos del nuevo mundo eran inferiores en casi todos los aspectos a los del viejo mundo iniciando una larga competencia entre Europa y América. En contestación a aquello Thomas Jefferson le envía la cornamenta de un ciervo a Buffon para demostrar la majestuosidad de los animales americanos versus los europeos. Mientras tanto en Filadelfia se encuentran restos de un elefante con colmillos, el cual es nombrado como mastodonte por George Cuvier en 1795.
        					</p>
        				</div>
        			</div>


        			<div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<aside>
							<h1>Recomendados</h1>
						</aside>

                            
						<?php
							$post2=postaside("Libro.php", "Harry Potter y el Pricionero de  Azkaban (Harry Potter  #3)", "img/HPA.jpg", "Trata más acerca de los padres de Harry y los amigos que tuvieron (tales como Remus Lupin y Peter Pettigrew). Los fanáticos de la serie presionaron a la autora para que terminase el libro. Harry Potter y el prisionero de Azkaban es considerado por muchos el mejor libro de la serie.", "lollllll" );
							$post2=postaside("Libro.php", "Diario Africano", "img/DA.jpg", "  En septiembre de 2002, Bill Bryson acepta una invitación de una organización humanitaria y decide emprender un viaje por Kenia. En African Diary recoge las impresiones, las inevitables desventuras, los encuentros con todo tipo de ser vivo posible ", "lollllll" );
							
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
