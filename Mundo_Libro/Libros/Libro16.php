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
                        <img src="../bdImg/cocori.jpg" width="200" height="280" alt="Cocori">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p><b>Sinopsis:</b></p>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                               Cocorí cuenta la historia de un niño de la costa atlántica costarricense que ve descender de un barco a una niña rubia. Cocorí nunca había visto una niña tan extraña por lo que queda extasiado, sobre todo cuando esta le regala una rosa. En retribución, el niño corre a la selva a buscarle un mono que la niña deseaba tener. Lamentablemente, cuando llega con el mono, el barco había partido. Cocorí tiene entonces su primer dolor: se da cuenta de que el amor y la belleza son fugaces pues la niña se fue sin despedirse y la rosa solo le duró un día. Entonces, desconsolado se dirigirá a la selva para preguntarles a una tortuga y al mono por qué la niña se fue sin despedirse y por qué murió su rosa.
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
                            <h1><b>Cocori</b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b></b></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b>Capítulo I:Cocori</b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Cocorí se agachó para beber en el hueco de las manos y de detuvo asombrado al ver en el fondo de agua un rostro obscuro como el caimito, con el pelo en pequeñas motas apretada. Los ojos porcelana de Cocorí tenían enfrente otro par de ojos que lo miraban asustados. Hizo una morisqueta y el negrito del agua le contestó con otra idéntica. Estaba muy contento Cocorí y su risa descubrió sus encías rosadas como papayas.
                            <br>
                            <br>
                                -Cri, cri, cri apúrate, Cocorí.
                            <br>
                            <br>
                                Cocorí arrancó despavorido a todo lo que le daban las piernas. -Pero no tenía ánimo de contestar y no se detuvo hasta que se encontró a salvo junto a mamá Drusila.

                                Por eso no protestó del pellizco de la negra que le decía

                                Cocorí no le contestó, lleno de remordimientos, porque siempre le había prohibido que se aventurara en el bosque. Además, a mamá Drusila era mejor dejarla que se serenara sola. Después de la comida Cocorí salió a la playa. De ella salían, a veces, impresionantes mensajeros que ponían sobresaltos en el corazón del Negrito.

                                El mar, enfrente dueño y señor de innumerables secreto que aguijoneaban la imaginación de Cocorí hacia el círculo de pescadores, que a la luz de la luna, referían sus aventuras heroicas en el mar y en la selva. La conversación se alargó hasta que los párpados de Cocorí comenzaron a pesarle y a duras penas se fue trastabillando de sueño hasta su casa.
                            <br>
                            <br>
                                -Duérmete, negrito, cara de moronga, que si no te duermes te lleva candonga. Al alba, Cocorí saltó de su hamaca. Pero al salir a la playa, comprendió que sucedía algo inusitado. Los hombres del pueblo gesticulaban exaltadamente frente al mar.

                                Con el sol matutino sus sombras se prolongaban enormes por los arenales y venían a lamer las piernas de Cocorí. -Llegan los hombres rubios. El corazón del Negrito dio un vuelco. Los ojos de Cocorí quedaron prendados del mar inmenso que centelleaba asperjado de diamantes.

                                Adornaron los bordes con rojas flores y desde lo alto del mástil colgaron largas guirnaldas de orquídeas. Cocorí se coló por entre las piernas de los mayores y, encogiéndose lo más posible para pasar inadvertido, se acomodó en una lancha. El casco del barco relucía sobre las aguas. Con sus banderas multicolores y la gran chimenea pintada de blanco que arrojaba una gruesa columna de humo, infundía en Cocorí una temerosa fascinación.
                            <br>
                            <br>
                                Los ojos querían saltársele. Ya más cerca, vieron a los hombres acodados en la borda. Eran como los describía el Viejo Pescador. Los negros se rieron alegres mientras recogían las sogas para aproximarse al barco.

                                Cocorí se apoderó de una y, agarrándose con pies y manos, trepó ágilmente hasta el puente. Cocorí buscó alrededor. Suave y rosa, con ojos como rodajas de cielo y un puñado de bucles de sol y miel, la niña se acercaba poco a poco.
                            <br>
                            <br>
                                Pasó un dedito curiosos por la mejilla de Cocorí. -¡Oh mamá, no se le sale el hollín! – y los ojos celestes reflejaban desconcierto. El Negrito estaba como clavado en su sitio, aunque tenía unos deseos frenéticos de desaparecer. Su desconcierto creció cuando la mamá se acercó a mirarlo, y de un salto alcanzó la cuerda y se deslizó hasta la lancha- La niña, desde la borda, lo buscaba con la vista entre las flores y frutas, pero Cocorí, escondido debajo del asiento, sólo asomaba de vez en cuando un ojo todavía cargado de turbación.

                                Y el pesar agolpaba las lágrimas a los ojos de Cocorí. Cocorí se quedó pensando en la temeridad de su ofrecimiento, cuando la vio reaparecer. Para Cocorí era algo mágico. Era un olor leve como una gasa transparente que envolvía a Cocorí en su nube.
                            <br>
                            <br>
                                «En el país de los hombres rubios – pensó el Negrito -, las niñas y las flores son iguales». Y con su rosa apretada contra el pecho, celoso del viento que quería arrebatársela, Cocorí emprendió el regreso hacia la costa. Esa noche la flor iluminó la choza de mamá Drusila
                            </p>
                        </div>
                        
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 1,2 ";
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
