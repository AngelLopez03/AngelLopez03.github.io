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
	        			<img src="../bdImg/hobbit.jpg"  width="200" height="280" alt="Dos Ranas ">
	        		</div>

	        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	        			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	        				<p><b>Sinopsis:</b></p>
	        			</div>
	        			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				<p>
	        					Un gran clásico moderno y el preludio a las vastas y poderosas mitologías de El Señor de Los Anillos.. Cuando alrededor de 1930, J. R. R. Tolkien comenzó a escribir El hobbit, hacía ya diez años que trabajaba en el vasto panorama mitológico de El Libro de los Relatos, que más tarde se llamaría El Silmarillion. Así como esas crónicas tempranas narraban los mitos inmemoriales de la Primera y Segunda Edad, Tolkien pronto advirtió que El hobbit iba ordenándose de algún modo como un relato de la Tercera Edad (Gandalf habla del Nigromante en las primeras páginas), aunque las inesperadas aventuras de un pacífico hombre del campo no parecieran tener mucha relación con las vastas y oscuras mitologías de la Tierra Media. El estilo directo y lineal, con alusiones (que el autor deploró más tarde) a un público infantil, no impide la poderosa irrupción -- unas pocas veces en términos de comedia -- de los grandes temas tolkienianos (el poder, la codicia, la guerra, la muerte) que reaparecerían en una dimensión a menudo obviamente épica en El Señor de los Anillos.
	        				</p>
	        			</div>

	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        				
	        				<!--PARTE DE ARRIBA-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

	        				<!--RELLENO O PARTE DE ABAJO-->
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">J.R.R Telkien</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">1937</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">4.21/5</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
        		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        			<div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>El Hobbit</b></h1>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        				
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        					
        					</p>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h2><b>Capítulo I: Una tertulia inesperada</b></h2>
        				</div>
        				
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
                                    Bilbo Bolsón es un pacífico y hogareño hobbit que ama vivir en su “agujero”, su cómoda casa bajo tierra. Su vida es ideal para los estándares hobbits, lo que significa que no tiene nada fuera de lo común y sí muchas comidas a lo largo del día. Bilbo es el hijo único de Belladona Tuk. Los Tuk son una familia acaudalada y de prestigio, pero Belladona y algunos otros de ellos tuvieron arrebatos aventureros que les quitaron fama entre los hobbits, y definitivamente se ganaron el repudio de los Bolsón.
<br>
<br>
                                    Uno de los viejos amigos de Belladona es un mago que se hace llamar Gandalf y que, aunque no tiene nada que hacer en Hobbiton, un día aparece en la casa de Bilbo. Al principio, no parecen llevarse bien, ya que Gandalf es un extranjero y los extranjeros no son respetados, puesto que pueden empujar a la gente respetable a cometer locuras. Cuando Gandalf revela su identidad, Bilbo se muestra más educado y lo invita a tomar el té: recuerda a Gandalf haciendo fuegos artificiales durante las fiestas y esto le genera cierta simpatía.
<br>
<br>
                                    Gandalf siempre se trae algo entre manos, y por lo general sabe más que lo que deja entrever. Biblo planea tomar el té con él el miércoles, pero Gandalf transforma esa invitación en una reunión para planificar una aventura en la que Bilbo jugará un papel central como ladrón profesional. Por supuesto, el hobbit no está interesado en esto e indica que no tiene ninguna experiencia, pero Gandalf ya ha llevado a doce enanos a tomar el té, y nadie en el grupo presta atención a las quejas de Bilbo, sino que solo se dedican a comer hasta dejar la casa sin reservas.
<br>
<br>
                                    Luego de comer, el grupo se reúne alrededor de un mapa que muestra los alrededores de la Montaña Solitaria, donde vive el dragón Smaug. Smaug ha robado los tesoros de muchos pueblos y reyes, y Thorin Escudo de Roble, el líder de la compañía, quiere recuperarlo. Entre Hobbiton y la Montaña Solitaria se despliega un terreno lleno de peligros, y ese es el principal desafío. Cuando Bilbo despide a sus invitados y puede acostarse, no está para nada contento con la aventura que parece desplegarse justo frente a sus pies.
        					</p>
        				</div>
        				
        				
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>Capítulo II: Carnero asado</b></h1>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Cuando Bilbo se despierta a la mañana siguiente, sus huéspedes ya se han marchado. Piensa que ha logrado escaparle a la aventura, pero Gandalf entra en escena y le explica que los enanos han dejado una nota para Bilbo y que lo están esperando en la posada del Dragón Verde. Bilbo es forzado a apresurarse hacia allí y llega exactamente a las 11 de la mañana, la hora señalada. No ha tenido tiempo de juntar las cosas que quería llevar consigo, pero no es posible regresar. La compañía viaja a una región llamada las Tierras Salvajes y no pasa mucho tiempo antes de que Bilbo se encuentre más lejos de su casa de lo que nunca ha estado. Rápidamente comienza a desear estar en su hogar, cómodo al lado del fuego del hogar, tomando té.
<br>
<br>
                                El grupo no es tan organizado como Bilbo hubiera esperado. Recién notan la desaparición de Gandalf bien entrado el día, y no pueden comenzar un fuego para cocinar la cena debido a la lluvia y la humedad. Los dos enanos más jóvenes, Fili y Kili, casi se ahogan cuando sus ponies, asustados, los arrojan al río.
<br>
<br>
                                Mientras discuten cómo cocinar, divisan a la distancia una luz, y ya que Bilbo es el ladrón del grupo, es su trabajo acercarse a investigar. Al llegar al fuego, Bilbo descubre tres trolls que están asando un cordero. Son, por supuesto, muchísimo más grandes que Bilbo, pero eso no amedrenta al hobbit, quien decide probar sus habilidades de ladrón robándoles el contenido de sus bolsillos. Entonces, se acerca a la bolsa que lleva uno de los trolls, pero es descubierto rápidamente. Los tres trolls, Berto, Guille y Tom, discuten entonces qué tipo de criatura han encontrado; si valdrá la pena comérselo y cómo deberían cocinarlo.
<br>
<br>
                                Los trolls discuten tanto que Bilbo aprovecha un momento de distracción y escapa. Desafortunadamente, los enanos se cansaron de esperarlo y se acercaron al fuego. Los trolls odian a los enanos, por lo que su aparición los hace entrar en cólera. No pasa mucho tiempo antes de que los doce enanos son atrapados y apresados por los trolls, que discuten entonces cómo cocinarlos. Gandalf los rescata desde las sombras. Sin hacerse presente, interrumpe la conversación de los trolls imitando sus voces y haciendo que se peleen entre ellos durante horas. Así, la luz del día cae sobre ellos sin que se den cuenta y los transforma en pierda.
<br>
<br>
                                Gandalf se muestra contento de su engaño y libera a los enanos. Bilbo ha robado una llave que cayó de uno de los bolsillos de un troll y encuentra una madriguera en la que aquellas criaturas guardaban sus provisiones y su tesoro.
                            </p>
                        </div>
        			</div>
                </div>


        			<div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<aside>
							<h1>Recomendados</h1>
						</aside>

                            
						<?php                            
                        $query = "SELECT * FROM libros limit 2,2 ";
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
