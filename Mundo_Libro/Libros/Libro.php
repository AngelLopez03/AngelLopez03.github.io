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
	        			<img src="../bdImg/crepusculo.jpg" width="200" height="280" alt="Crepusculos">
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
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Stephenie Meyer</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2005</div>
	        				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">,...........</div>
	        			</div>
	        		</div>
	        	</div>
        	</section>

        	<section class="fila" id="seccion3_book">
        		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        			<div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>Crepusculo</b></h1>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h2><b>Capítulo I: Primer Encuentro</b></h2>
        				</div>
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						Bella una joven de diecisiete años que vivía con su madre en Phoenix Arizona se muda a vivir con su padre a un pueblito de Washington llamado Forks, su madre René se había casado de nuevo y Bella no quería viajar por todo el mundo con René y su padrastro Phil que era jugador de béisbol profesional.

                                Cuando bella llegó al aeropuerto su padre Charlie Swan el jefe de policíade aquel condado ya la estaba esperando ansioso.

                                Cuando iban camino a casa Charlie le dice a Bella que le tiene un regalo que le compró para darle la bienvenida, ella le dijo que qué era y su padre le contesto que era un carro para que ella se pudiera trasladar más fácilmente a cualquier lugar que deseara o fuera necesario. Bella le preguntó que qué clase de carro era y Charlie le dijo que eraun Chevy modelo sesenta que le había vendido muy barato y en buenas condiciones Billy Black un amigo que vivía en la reserva de La Push, Bella se alegró demasiado pero le dijo que no tenía por qué haberlo hecho que ella había estado ahorrando dinero para comprarse uno ella misma.
                            </br>
                            </br>
                                Cuando llegaron a casa y Bella vio su coche estacionado afuera de esta, quedó más que encantada y le agradeció unay otra vez a su padre por habérselo comprado.

                                Al día siguiente Bella se arregló para ir a su nueva escuela en Forks donde todos esperaban la llegada del la hija del jefe de policía Swan.

                                Al llegar al instituto vio que todos los carros eran más o menos del año del de ella, salvo un flamante Volvo color plata que encontraba estacionado en el aparcadero.

                                Comenzaron las clases y el primerchico que se presentó con ella se llamaba Eric. Al principio todos para ella no eran más que simples desconocidos pero al paso de las clases comenzó a reconocer varias caras de sus compañeros de salón.
                            </br>
                            </br>
                                A la hora del almuerzo fue cuando vio por primera vez a cinco chicos que no se parecían en nada a los demás estudiantes del instituto, por lo que le preguntó a una de las chicas con las que sesentaba que quienes eran ellos; ella le respondió diciéndole los nombres de cada uno de ellos, Edward, Emmett Cullen, Rosalie, Jasper Hale y Alice. Todos estos eran hijos adoptivos del doctor Cullen y su esposa.

                                En clase de biología le tocó sentarse al lado de Edward ya que la única silla vacante estaba a su lado. A Edward parecía no agradarle para nada que Bella y se portó de una forma muyextraña y grosera con ella.
        					</p>
        				</div>
        				
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<h1><b>Capítulo II: Libro Abierto</b></h1>
        				</div>
        				
        				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        					<p>
        						Al día siguiente lo primero que hizo fue buscar a Edward Cullen a la hora del almuerzo y los únicos que estaban eran sus cuatro hermanos pero él se encontraba ausente.
                                Ese día durante la cena le pregunto a Charlie que si conocía a la familia del doctor Cullen y Charlie le respondió que sí que eran muy buenas personas pero también eran muy reservados.Esa fue toda su plática durante la cena.
                            <br>
                            <br>   
                                Durante toda la semana Edward no volvió a la escuela y lo único que se sabía es que había abandonado la escuela.
                                Un lunes mientras Bella estaba en la escuela comenzó a nevar y a todos parecía agradarles demasiado menos a ella. A la hora del almuerzo todos platicaban sobre la nieve y cuando de repente volteó hacia la mesa de los Cullen el ya estaba ahíjunto con sus cuatro hermanos a los cuales también parecía hacerlos feliz que nevara.
                            <br>
                            <br> 
                                Al llegar a la clase de biología a Edward parecía no desagradarle en lo más mínimo la presencia de Bella, la saludó y se presentó con ella. Comenzaron a platicar aunque a ella no le quedaba muy claro el motivo de su cambio tan repentino en la forma de comportarse con ella.
                                Cuando terminó la clase Edwardse apresuró a salir del salón con la misma rapidez del pasado lunes y Mike se acercó a ella para ir juntos a la siguiente clase.

        					</p>
        				</div>
        			</div>
                    	

        			<div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<aside>
							<h1>Recomendados</h1>
						</aside>

                            
						<?php                            
                        $query = "SELECT * FROM libros limit 0,2 ";
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
