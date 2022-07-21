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
                        <img src="../bdImg/hp4.jpg" width="200" height="280" alt="Harry potter #4">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p><b>Sinopsis:</b></p>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                               Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia y hechicería. A sus catorce años, a Harry le gustaría ser un joven mago como los demás y dedicarse a aprender nuevos sortilegios, encontrarse con sus amigos Ron y Hermione y asistir con ellos a los Mundiales de quidditch. Sin embargo, al llegar al colegio le espera una gran sorpresa que lo obligará a enfrentarse a los desafíos más temibles de toda su vida. SI logra superarlos, habrá demostrado que ya no es un niño y que está preparado para vivir las nuevas y emocionantes experiencias que el futuro le depara.
                            </p>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <!--PARTE DE ARRIBA-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

                            <!--RELLENO O PARTE DE ABAJO-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">J. K. Rowling</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2000</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">,...........</div>
                        </div>
                    </div>
                </div>
            </section>
        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Harry Potter y Caliz de Fuego</b></h1>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b>Capítulo I: El campeonato mundial de quidditch</b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                El comienzo del libro ofrece un punto de vista distinto al de Harry. Se conoce la historia de Frank Bryce, que era sirviente de la familia Ryddle. Todo el mundo pensaba que él había sido el culpable del asesinato de Tom Ryddle Sr. y sus padres. Sin embargo, Bryce demostró su inocencia, dado que la autopsia no reveló ningún indicio de que hubiesen sido asesinados; de hecho, no se encontró herida ni daño de ningún tipo que explicase por qué los Ryddle habían muerto.

                                La historia regresa al presente, cuando Bryce ve luz en la mansión de los Ryddle. Sabe que esto es imposible, pues nadie entra ahí, y asume que son niños traviesos. Cuando llega a la mansión, entra y va a una habitación iluminada. En la habitación, escucha dos voces, una de alguien llamado Lord Voldemort, y otra de un hombre identificado como Colagusano, hablando de alguien llamado Harry Potter, y del asesinato de una tal Bertha Jorkins. Una serpiente, llamada Nagini, advierte la presencia de Frank, y éste admite haber escuchado sus intenciones de asesinar a alguien. Así pues Voldemort ordena a Colagusano, su vasallo, que gire la silla en que estaba sentado. El vasallo le obedece, Voldemort realiza la maldición Avada Kedavra con su varita y Frank cae muerto.
                            <br>
                            <br>
                                La novela regresa al punto de vista de Harry, quien sabe lo sucedido, pues lo ha contemplado en un sueño. Además, siente su agudo dolor en su cicatriz en forma de rayo. Decide escribir a Sirius Black, su padrino, quien le rogó que le informara de todo suceso extraño que ocurriera. Posteriormente, Harry recibe una carta de Ron, su amigo, en la que le invita a su casa y a ver el Mundial de Quidditch.

                                Como estaba previsto, los Weasley llegan a casa de los Dursley y llevan a Harry a la Madriguera. Días después comienza el mundial de Quiddich, al que asisten mediante un traslador, objeto aparentemente vulgar, pero que transporta a un sitio determinado a quien o quienes lo tocan. En el equipo de Bulgaria, Harry se fija en alguien llamado Viktor Krum, quien es el buscador del equipo. Además Harry conoce a la elfina doméstica Winky, y Hermione comienza a sentir pena por los elfos. Los gemelos Fred y George Weasley ganan una apuesta realizada a Ludo Bagman, quién les entrega oro Leprechaun.
                            <br>
                            <br>
                                Finalizado el partido, un grupo de mortífagos maltratan a cuatro muggles. Harry, Ron y Hermione huyen al bosque del sitio. Momentos después observan la Marca Tenebrosa en el cielo. Esta, es la marca que identifica a Voldemort. Barty Crouch, aparece junto a un grupo de magos, dirigido por Arthur Weasley, y acusan a Harry, Ron y Hermione de haber invocado la marca. Barty Crouch busca entre los arbustos y encuentra a la elfina doméstica, Winky, que había robado la varita de Harry. Amos Diggory utiliza Priori Incantatem para definir el último hechizo que había realizado la varita. Se descubre que ésta invocó la Marca Tenebrosa, y Winky, es acusada y despedida.
                            </p>
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Capítulo II: El Torneo de los Tres Magos</b></h1>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                    Cuando regresan a la escuela, Albus Dumbledore anuncia que Hogwarts será la sede de un evento legendario, el Torneo de los Tres Magos. El Torneo reúne a tres escuelas y un candidato es elegido de cada escuela, para competir en tres pruebas peligrosas. El que quede campeón ganará 1000 galeones. Las escuelas que se reunirán son la Academia Mágica Beauxbatons y el Instituto Durmstrang, además de Hogwarts.

                                    Hay un nuevo profesor de Defensa Contra las Artes Oscuras, llamado Alastor Moody. Éste les enseña acerca de las Maldiciones Imperdonables, y les dice que si alguien las usara en un ser humano iría de por vida a Azkaban. Una de ellas es la maldición Cruciatus con el conjuro "Crucio" que es la maldición torturadora; la maldición Imperius, que te hace hacer lo que tu atacante desee y la peor de todas, la maldición asesina, que mata instantáneamente a aquel sobre quien es usada.

                                    Para ingresar al torneo, se debe escribir en un trozo de pergamino el nombre de la persona y lanzarlo al cáliz de fuego. Para seguridad, sólo alumnos con 17 años o más serán permitidos.
                                <br>
                                <br>
                                    Cuando el cáliz de fuego elige a los campeones, elige a Fleur Delacour de Beauxbatons, Viktor Krum de Durmstrang y Cedric Diggory de Hogwarts. Sin embargo, sin previo aviso, también elige a Harry Potter, aunque él ni siquiera se había postulado.

                                    Harry no se puede retirar del torneo, y no hay nada que Dumbledore pueda hacer. Ron, sin embargo, se molesta con Harry pues cree que Harry sí puso su nombre en el cáliz de fuego, y no le dijo que lo había hecho.

                                    Rita Skeeter, una periodista de El Profeta, comienza a escribir historias falsas sobre Harry. Por otro lado, Hermione comienza a averiguar acerca de los derechos de los elfos domésticos, y crea la P.E.D.D.O, una asociación que protege los derechos de los elfos.
                                <br>
                                <br>
                                    Las primeras dos pruebas
                                    La primera prueba es enfrentarse a un dragón. Todos los campeones, incluido Harry, saben que deben enfrentarse a éste, excepto Cedric. Harry cree que esto es injusto y le dice a Cedric acerca del dragón. Moody le aconseja a Harry que use su punto fuerte y un hechizo sencillo, y así Harry usa el encantamiento convocador para convocar su escoba, la saeta de fuego, al campo y así quitarle el huevo al dragón mientras vuela.

                                    Se les dice a los campeones que deben burlar al dragón y recuperar un huevo de oro que él tiene. A Harry le toca enfrentarse al colacuerno húngaro, el peor de los dragones. Sin embargo, puede vencerlo y recupera el huevo de oro.

                                    Harry se entera de que Winky, la elfina de Barty Crouch Sr., quien sirve de juez en el torneo, junto a Bagman, ahora está trabajando en Hogwarts, junto a Dobby. Hermione les pregunta acerca de sus derechos y descubre que no tienen ninguno, lo que la disgusta mucho.

                                    Ron vuelve a ser amigo de Harry, al darse cuenta que el torneo es muy peligroso y necesita todo el apoyo posible.
                                <br>
                                <br>
                                    Se anuncia que se hará un baile de Navidad. Harry quiere ir con Cho Chang, pero descubre que ya ha sido invitada por Cedric Diggory. Harry y Ron van con Parvati y Padma Patil, aunque Ron le había pedido a Fleur Delacour que vaya con él, y había terminado en una situación incómoda.

                                    Se revela en la noche del baile que Hermione es la pareja de Viktor Krum. Harry se aburre del baile y se va, y accidentalmente escucha una conversación entre Hagrid y Madame Olympe Maxime, revelando que son semigigantes. De algún modo, Rita Skeeter se entera de esto y lo publica.

                                    Cedric ayuda a Harry a decifrar el enigma del huevo. Le dice que lo lleve al baño de los prefectos y se bañe con él, y escuche al huevo debajo del agua. Harry lo hace y escucha a selkies diciendo que se llevarán algo importante para él. Harry se da cuenta que en el baño está Myrtle la Llorona, y le ayuda a descifrar el enigma. Le dice que será en el Lago Negro y que necesitará estar una hora debajo del agua, buscando lo que se le llevaron las selkies. Harry se pregunta cómo lo hará, cuando recibe un regalo de Dobby: branquialgas, que le permiten respirar por una hora debajo del agua.
                                <br>
                                <br>
                                    La segunda prueba llega en febrero, y Harry utiliza las branquialgas. Se da cuenta que se llevaron a Ron: eso es lo que tanto le importaba a Harry y que se llevaron. Lo puede rescatar y queda en segundo lugar por sus valores morales al rescatar también a la hermana de Fleur, Gabrielle Delacour, mientras que Cedric queda en primer lugar.
                            </p>
                        </div>
                    </div>
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                       <?php                            
                        $query = "SELECT * FROM libros limit 10,2 ";
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
