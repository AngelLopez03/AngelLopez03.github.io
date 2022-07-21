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
                        <img src="../bdImg/hp2.jpg" width="200" height="280" alt="Harry Potter #2">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p><b>Sinopsis:</b></p>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Tras derrotar una vez más a lord Voldemort, su siniestro enemigo en Harry Potter y la piedra filosofal, Harry espera impaciente en casa de sus insoportables tíos el inicio del segundo curso del Colegio Hogwarts de Magia. Sin embargo, la espera dura poco, pues un elfo aparece en su habitación y le advierte que una amenaza mortal se cierne sobre la escuela. Así pues, Harry no se lo piensa dos veces y, acompañado de Ron, su mejor amigo, se dirige a Hogwarts en un coche volador. Pero ¿puede un aprendiz de mago defender la escuela de los malvados que pretenden destruirla? Sin saber que alguien había abierto la Cámara de los Secretos, dejando escapar una serie de monstruos peligrosos, Harry y sus amigos Ron y Hermione tendrán que enfrentarse con arañas gigantes, serpientes encantadas, fantasmas enfurecidos y, sobre todo, con la mismísima reencarnación de su más temible adversario.
                            </p>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <!--PARTE DE ARRIBA-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

                            <!--RELLENO O PARTE DE ABAJO-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">J. K. Rowling</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">1998</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">,...........</div>
                        </div>
                    </div>
                </div>
            </section>
        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Harry Potter y la Camara Secreta</b></h1>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b>Capítulo I: El peor cumpleaños </b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                La novela se inicia con una discusión que estalla durante el desayuno en el número cuatro de Privet Drive. El Sr. Vernon Dursley se ha despertado temprano por el ulular de Hedwig, la lechuza mascota de su sobrino Harry Potter, y le dice que si no puede controlarla, ella tendrá que irse. Harry le explica que Hedwig se aburre y le pide que la deje volar fuera por la noche. Pero tío Vernon se niega, insinuando que algo malo pasaría si se dejara salir a Hedwig, intercambiando miradas con su esposa Petunia. En seguida, el hijo gordo de los Dursley, Dudley, le pide a Harry que le pase la sartén y este le dice que ha olvidado la palabra mágica, refiriéndose a “por favor”, pero los Dursley reaccionan con miedo. Tío Vernon ha prohibido el uso de la palabra "magia" en su casa, calificándola parte de una anormalidad de Harry.

                                Harry es un mago, que vuelve a casa para pasar las vacaciones de verano tras su primer año en el Colegio Hogwarts de Magia y Hechicería. Los Dursley no están contentos con su regreso y Harry también se siente desgraciado: extraña mucho el colegio, y sus tíos han encerrado todos sus suministros mágicos en un armario bajo la escalera, pues no les importa que Harry esté preparado para su regreso al colegio en otoño. Los Dursley son lo que los magos llaman muggles, es decir, no tienen sangre mágica y se avergüenzan de tener un mago en la familia. Tío Vernon encierra a Hedwig en su jaula para evitar que lleve mensajes a los amigos de Harry.
                            <br>
                            <br>
                                Harry fue abandonado en la puerta de los Dursley once años antes, a la edad de un año, tras sobrevivir a una maldición del mayor hechicero oscuro de todos los tiempos: Lord Voldemort. Los padres de Harry murieron en el ataque, pero él escapó con solo una cicatriz con forma de rayo en la frente. Cuando Voldemort no pudo matar a Harry, sus propios poderes fueron destruidos. La hermana de la madre de Harry, Petunia Dursley, crió a Harry junto con su marido, Vernon. Harry hacía cosas raras sin querer y no sabía por qué, porque sus tíos le ocultaban su naturaleza mágica, junto con las circunstancias de la muerte de sus padres. Hasta que hace un año, Hogwarts le escribió a Harry y la verdad salió a la luz. Comenzó la escuela de magos, donde descubrió que es famoso por haber derrotado a Voldemort.

                                Los Dursley han olvidado que hoy es el duodécimo cumpleaños de Harry. Tío Vernon está concentrado en hacer el mayor negocio de su carrera en una cena en su casa esa noche con el Sr. Mason, un adinerado cliente potencial, para lo cual le ordena a Harry que se encierre en su habitación esa noche, sin hacer ruido. Harry sale de la casa para no molestar a su tía mientras se prepara para la fiesta. Canta el "Feliz cumpleaños" para sí mismo y se siente terriblemente solo. Extraña a sus mejores amigos Ron Weasley y Hermione Granger, que no le han escrito en todo el verano. Harry ha tenido la tentación de utilizar la magia para desbloquear la jaula de Hedwig y poder enviar cartas a sus amigos pero sabe que se metería en problemas porque a los magos menores de edad no se les permite usar la magia fuera del colegio. Harry piensa en su año anterior en Hogwarts, cuando volvió a escapar por poco de Lord Voldemort. Voldemort era una ruina de su antiguo ser, pero seguía empeñado en conseguir el poder, y era aterrador.
                            <br>
                            <br>
                                Mientras Harry piensa en esto, mira fijamente un arbusto del jardín y descubre allí dos enormes ojos que lo miran. Pero Dudley interrumpe el momento para burlarse de Harry por su solitario cumpleaños. En respuesta, Harry lo amenaza diciendo que está planeando prender fuego el arbusto. Dudley se asusta, pero señala la impotencia de Harry: su padre ha amenazado con echar a Harry de la casa y no tiene ningún otro sitio al que ir. Enojado, Harry pretende hacer un hechizo para asustar a su primo, Dudley lo delata y Harry es castigado con trabajos de jardinería y sin comida hasta que los termine. Harry piensa en el contraste entre su fama en Hogwarts y su maltrato en casa de los Dursley. Entra en la cocina exhausto, oliendo la elaborada comida que preparó su tía, pero ella le da de comer un pedazo de pan y lo manda a su cuarto. Tío Vernon le vuelve a advertir que no haga ruido esa noche. Cuando Harry se da la vuelta para desplomarse en su cama, encuentra a alguien sentado en ella.
                            </p>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b>Capítulo II: La advertencia de Dobby </b></h1>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Harry descubre una pequeña criatura con orejas de murciélago y grandes ojos sentada en su cama, y se da cuenta de que debe ser quien le observaba desde el arbusto. Entretanto, Harry oye que llegan los invitados abajo. La criatura se presenta como Dobby, un elfo doméstico, y le dice que lleva mucho tiempo queriendo conocerlo. Harry le dice a Dobby que no es un buen momento para tener un elfo doméstico en su habitación y le pregunta por qué está allí, invitándolo a sentarse. Entonces el elfo rompe a llorar muy ruidosamente, diciendo que nunca antes un mago le pidió que se siente, como si fuera un igual. Harry trata de mantener a Dobby callado y le dice que no debe haber conocido entonces muchos magos decentes. Dobby atina a asentir pero en seguida empieza a golpearse la cabeza, y explica que debe castigarse porque estuvo a punto de hablar mal de la familia de magos a la que sirve. Con el ruido de los golpes, Hedwig se despierta con un chillido. Cuando Harry le pregunta por qué no se escapa de ese maltrato, Dobby explica que un elfo doméstico debe ser liberado. La empatía de Harry por Dobby no hace más que exacerbar los gritos del elfo.
                            <br>
                            <br>
                                Dobby dice que ha venido a proteger a Harry, a advertirle que no debe volver a Hogwarts, donde corre un peligro mortal. La advertencia de Dobby molesta a Harry porque la ilusión de ir a Hogwarts es lo único que lo mantiene esperanzado mientras soporta su terrible vida en Private Drive. Dobby discute con Harry y le dice que debe quedarse allí porque hay un complot para que ocurran cosas terribles en Hogwarts este año. Harry le pregunta si esto tiene algo que ver con Voldemort; Dobby niega con la cabeza y empieza a referirse misteriosamente a poderes que están más allá de la capacidad de cualquier mago decente, y luego empieza a golpearse con la lámpara del escritorio de Harry, chillando fuertemente. Se hace el silencio en el piso de abajo. Cuando Harry oye acercarse a tío Vernon, mete a Dobby en el armario. Tío Vernon entra furioso a la habitación y amenaza a Harry para que se calle.
                            <br>
                            <br>
                                Cuando se va Vernon, Harry le dice a Dobby que debe volver a Howgarts porque es el único lugar donde tiene amigos, y Dobby le reprocha que esos amigos no le hayan escrito en todo el verano. Entonces Harry descubre que el elfo ha estado robando sus cartas para que Harry se desaliente sobre su regreso al colegio. Entonces Dobby le muestra las cartas de Ron, Hermione y el guardabosques de Hogwarts, Hagrid, y le dice que solo se las dará si promete no volver a Hogwarts. Cuando Harry se niega, Dobby baja corriendo las escaleras.

                                Harry lo sigue, procurando no hacer ruido, y ve que el elfo está en la cocina, haciendo levitar el elaborado budín que preparó tía Petunia para la cena. Harry le ruega a Dobby que lo baje y este le exige que prometa no volver a la escuela. Cuando Harry le dice que no puede, Dobby dice que está obrando por el bien de Harry y deja caer el budín, y luego desaparece. Se oyen gritos en el comedor y tío Vernon descubre a Harry en la cocina. Trata de suavizar el incidente con los invitados, diciendo que Harry es un sobrino al que mantienen aislado porque lo perturban los extraños, y en voz baja le promete a Harry castigarlo fuertemente.
                            <br>
                            <br>
                                Pero en seguida entra una lechuza por la ventana del comedor y deja caer una carta sobre la cabeza de una de las invitadas, que sale corriendo y gritando de la casa. La carta es para Harry. En ella, el Ministerio de la Magia le indica que se ha registrado el uso de magia en Private Drive y que no se permite que los magos menores de edad utilicen esos hechizos fuera de la escuela y cualquier otro hechizo supondrá su expulsión. Harry no había dicho hasta ahora a los Dursley que se le prohibía el uso de magia fuera de Hogwarts porque si no ellos se excederían en sus maltratos. Enterado el tío Vernon, le anuncia a Harry que lo va a encerrar en su habitación y no permitirá que vuelva al colegio, sabiendo que si el niño hace magia será expulsado. Al día siguiente, Vernon instala barrotes en la ventana de Harry y una gatera a través de la cual le da de comer. Harry permanece encerrado durante tres días, hasta que una noche se despierta y ve la cara de su amigo Ron Weasley al otro lado de la ventana.
                            </p>
                        </div>
                    </div>
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                       <?php                            
                        $query = "SELECT * FROM libros limit 4,2 ";
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
