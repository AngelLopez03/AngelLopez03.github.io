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
                        <img src="../bdImg/el_reino_del_reves.jpg" width="200" height="280" alt="Reino del Reves">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p><b>Sinopsis:</b></p>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                Nacida con un don para la música, Nannerl Mozart solo tiene un deseo: ser recordada para siempre. Pero incluso mientras deleita al público con su interpretación magistral, tiene pocas esperanzas de convertirse en la aclamada compositora que anhela ser. Es una mujer joven en la Europa del siglo XVIII, y eso significa que le está prohibido componer. Actuará solo hasta que alcance la edad para casarse; su tirano padre lo ha dejado muy claro. Y a medida que la esperanza de Nannerl disminuye con cada año que pasa, el talento de su amado hermano menor, Wolfgang, parece brillar más. Su brillantez comienza a eclipsar la suya, hasta que un día un misterioso desconocido de una tierra mágica aparece con una oferta irresistible. El tiene el poder de hacer realidad su deseo, pero su ayuda puede costarle todo.
                            </p>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <!--PARTE DE ARRIBA-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AUTOR:</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>AÑO DE PUBLICACIÓN</p></b></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><b><p>RANKING</p></b></div>

                            <!--RELLENO O PARTE DE ABAJO-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Marie Lu</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">2020</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">,...........</div>
                        </div>
                    </div>
                </div>
            </section>
        	<section class="fila" id="seccion3_book">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="articulo col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><b> El Reino del Reves </b></h1>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><b> SALZBURGO, AUSTRIA 1759</b></h2>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                            Las siluetas de las hojas forman un dibujo tembloroso en el suelo, bajo un rayo de sol. Mi hermano, Wolfgang, aún no tenía cuatro. Yo seguía practicando mis ejercicios cuando entró Padre, acompañado por Herr Schachtner. Me detuve en mitad de mis arpegios y apoyé las manos cruzadas sobre mi falda.

                            Incluso ahora recuerdo las irregulares costuras de mi enagua azul, mis manos blancas sobre las teclas negras del clavecín, las hojas secas adheridas a los hombros de Herr Schachtner. Seguía siendo demasiado joven para preocuparme mucho por mi aspecto, de modo que mi madre me había acicalado con sencillez. El abrigo y el sombrero del Herr. Sebastian colgó las pertenencias del trompetista de la corte.

                            En comparación, el abrigo de mi padre parecía gastado, y en los codos la trama se veía más fina. Mi padre estaba demasiado ocupado con nuestro huésped para prestarme atención, pero Madre observó mi postura tiesa y la palidez de mis mejillas. Me dirigió una mirada de aliento al pasar. Recordé sus palabras e intenté aflojar los hombros.
                        <br>
                        <br>
                            Pero Padre se había adelantado un poco con la visita. Aún no se me había quitado el frío de las yemas de los dedos, y cuando pulsaba las teclas, las sentía como si fueran algo lejano. Por suerte, mi hermano se había mantenido alejado. Estaría escondido en el dormitorio de nuestros padres, sin duda tramando alguna travesura.

                            Schachtner se retirara, o al menos hasta que yo terminara de tocar. El Herr miró a mi madre con una sonrisa cálida que le arrugó las comisuras de la boca y dio a su rostro una expresión agradable. Mi madre se ruborizó y le agradeció las amables palabras. Era evidente que su gesto complació al Herr, pues su sonrisa se hizo más amplia.

                            Nannerl ha heredado el buen oído de su madre, como comprobará usted enseguida. Al oír las palabras de mi padre, me puse de pie, obediente, para saludar a nuestro invitado. A Padre le desagradaba que yo hiciera una reverencia sin apartarme del clavecín o que mirara nada que no fuera el suelo. No podía darle a Herr Schachtner ningún motivo para que me creyera mal educada.
                        <br>
                        <br>
                            Pensé en mi madre e intenté imitar el modo particular en que ella bajaba el mentón, el recato con que había rozado el suelo con sus faldas. No obstante, mi curiosidad había despertado, por lo que dirigí la mirada de inmediato a las manos del trompetista, buscando alguna prueba de su talento musical en el movimiento de sus dedos. Madre llamó a Sebastian para que nos trajera café y té, pero Padre la contradijo. Era mejor, quizá, que el Herr no viera nuestro juego de porcelana.

                            Madre le había rogado que compraran uno nuevo para cuando recibiéramos a alguien, pero hacía mucho tiempo que no teníamos motivos para recibir semejantes visitas. Herr Schachtner se quitó las hojas secas de su casaca de terciopelo. He venido a escuchar cómo ha avanzado su encantadora hija en el clavecín. Da la casualidad de que Nannerl estaba practicando.

                            Me temblaban las manos y las uní con más fuerza, intentando entibiarlas. Durante semanas, mi padre se había sentado conmigo al clavecín para prepararme, observando mi técnica y golpeándome en las muñecas cuando me equivocaba. La música es el sonido de Dios, Nannerl, me decía. Dios te ha elegido como embajadora de Su voz.
                        <br>
                        <br>
                            Tu música será como si Dios te hubiera otorgado la vida eterna. Cada noche, me acostaba oyendo el sonido de mis manos sobre las teclas, las notas claras en su perfección. Soñaba que el Herr me observaba y aplaudía de buen grado, y que mi padre se reclinaba en su silla con una sonrisa satisfecha. Imaginaba que el Herr exigiría que tocara ante un público mayor.

                            Que mi padre lo organizaría. Que las monedas llenarían las arcas de nuestra familia y la tensión desaparecería de los ojos de mi padre. Esa era la razón de todo lo que estaba ocurriendo esa mañana. Mi padre decía que los niños de mi edad no sabían tocar el clavecín con la destreza con la que yo lo hacía.

                            Si lograba demostrárselo a Herr Schachtner, quizá me invitaría a tocar ante Herr Haydn, el compositor más aclamado de Austria. Desde mis manos cantaba la voz de Dios, que valía su peso en oro. Moví los dedos, ansiosa por dejarlos bailar. Los hombres, me había aconsejado siempre mi madre, eran incapaces de resistirse a los elogios.
                        <br>
                        <br>
                            Cuando me atreví a mirarlo, su sonrisa se hizo más amplia y el Herr se sujetó los dos costados del cuello de la casaca. Volví a bajar la mirada y me obligué a sonreír por el cumplido, aunque tensé las manos contra la tela de mi vestido. Padre se volvió hacia mí. Empecemos con ese, Nannerl.

                            En realidad, no era un nuevo minueto sino uno que Padre había compuesto para mí hacía semanas y que yo llevaba diez días practicando. Pero no había razón para que Herr Schachtner se enterase de aquello. Herr Schachtner percibiría cada error que cometiera. El rayo de sol en el aire, el sonido de la voz de mi padre, el peso de la presencia de un desconocido en la habitación.

                            Todo se apagó, y solo quedé yo con mis manos y las teclas. Empecé a tocar y mis dedos se afianzaron en la música. Una escala mayor, un cambio, un la extendido, otra escala, un trino. Cerré los ojos.

                            En la oscuridad, a solas conmigo misma, busqué el pulso de la música y dejé que mis manos lo encontraran. Fue como hallar en el bosque una telaraña tan frágil que bastaría un soplo de aire para deshacerla. Todo mi corazón se llenó de anhelo por la música. Me incliné hacia la telaraña y dejé que me envolviera.
                        <br>
                        <br>
                            Hasta que…
                        <br>
                        <br>
                            La tela que me envolvía se aflojó, sus hebras empezaron a arder y a mostrar de nuevo la habitación, la luz, al desconocido y a mi padre. Pero vi de reojo que un remolino de movimiento salía del dormitorio y corría hasta donde estaba sentado Padre. Mi hermano, Wolfgang. Mi hermano se limitó a sonreír, y se puso de puntillas para susurrarle a Herr Schachtner algo al oído.

                            Distraída, sentí que mis dedos se aceleraban y perturbaban la telaraña en el bosque y la flor en la roca. Herr Schachtner rio con ganas. Le contó el chiste a mi padre, que rio entre dientes y luego le dijo algo a mi hermano. La música que me llenaba la cabeza comenzó a fragmentarse, y en los espacios entre las notas empezaron a aparecer suposiciones sobre lo que podían estar hablando.

                            Mis manos tropezaron entre sí. Logré corregir el error antes de arruinar la pieza, pero aun así, fallé una tecla con uno de mis dedos. Sentí que me subía el calor a las mejillas. Eché un vistazo a mi público y vi que mi padre me miraba con evidente sorpresa y desaprobación.
                        <br>
                        <br>
                            Herr Schachtner levantó a Woferl por las axilas y lo sentó en su regazo. Las piernas de mi hermano se balanceaban. No me había dado cuenta de que el minueto había terminado, de que mis manos ya se habían replegado sobre mi falda. La telaraña del bosque había desaparecido.

                            Mi padre mantenía una sonrisa artificial. Desde el regazo del Herr, Woferl me miró con la inocencia propia de un niño. Tenía las mejillas redondas, aún encendidas por los vestigios de una fiebre que lo había aquejado unos días atrás. Sus ojos brillaban como guijarros en un arroyo.

                            Aunque no quería detenerme en su mirada, el rostro angelical del hermano al que adoraba me aplacó. No culpes a Woferl, diría mi padre más tarde. Si hubieras tocado bien, no habría podido distraer a Herr Schachtner. Herr Schachtner unió las palmas de sus manos y aplaudió.
                        <br>
                        <br>
                            Tienes mucho talento. Tienes toda la razón, Leopold. Mi padre le agradeció las palabras con amabilidad, pero yo vi tensión en su orgullo, decepción en su expresión. Herr Schachtner debería haber dicho más.

                            El Herr ya había cambiado de tema y le hablaba a mi padre sobre una discusión entre los oboes de la orquesta, mientras mi hermano seguía rebotando sobre sus rodillas. Sentí que las yemas de los dedos se me empezaban a entumecer otra vez, y la vergüenza por la nota en la que me había equivocado afloró a mis mejillas.
                            </p>
                        </div>
                        
                </div>


                    <div class="container-aside col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <aside>
                            <h1>Recomendados</h1>
                        </aside>

                            
                        <?php                            
                        $query = "SELECT * FROM libros limit 18,2 ";
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
