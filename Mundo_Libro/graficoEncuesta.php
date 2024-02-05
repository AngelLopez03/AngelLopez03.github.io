<?php
include 'funciones.php';
include 'header.php';
include 'conex.php';
$link=mysqli_connect("localhost","root","","proyecto");
$query="SELECT * FROM prueba";
$con=mysqli_query($link,$query);

// session_start();

// if (!isset($_SESSION['usuario'])) {
//         echo '
//         <script>
//             alert("Por favor debes iniciar sesión");
//         </script>';
//         header('location: login.php');
//         session_destroy();
//         die();
//     }

?>

<html>
    <head>

        <style>
            body
            { 
                background-color: #30303d; color: #fff;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            #chartdiv {
              width: 100%;
              height: 500px;
              font-size: 20px;
            }
        </style>
        <meta charset="UTF-8">
        <title>Número de página</title>
        <link rel="stylesheet" href="Css/style.css"/>
        <link rel="stylesheet" href="Css/grafico.css">
        <script src="https://kit.fontawesome.com/86dc997a7b.js" ></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
        <!-- Resources -->
        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        
    </head>
    <body id="body">
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


       <div class="btn_graficos col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="titulog col-lg-12 col-md-12 col-sm-12 col-xs-12" ><h1>Gráfico de acuerdo a:</h1></div>
           <div class="select col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoEncuesta.php">Edad</a></div>
           <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoe1.php">¿Te gusta leer?</a></div>
           <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoe3.php">¿Que prefieres?</a></div>
           <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoe4.php">¿Es más culta?</a></div>
           <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12"><a href="graficoe2.php">Género</a></div>
           <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoe5.php">¿Que lees más?</a></div>
           <div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12"><a href="graficoe6.php">¿Cuantos libros tenes en casa?</a></div>
           <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12"><a href="graficoe7.php">¿Te deja enseñanza la lectura?</a></div>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="Graficos.php">Libros</a></div>
       </div>
        

        <h1 class="titulog">GRÁFICO EDADES</h1>

       <div id="chartdiv"></div>
    <!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_dark)
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data

let url = 'http://localhost/Mundo_Libro/api2/articulos.php';
fetch(url)
    .then(response => response.json() )
    .then( datos => mostrar(datos))
    .catch( e => console.log(e))

const mostrar = (articulos)=> {
    articulos.forEach(element => {
          chart.data.push(element.descripcion)  
    });
    chart.data = articulos
    console.log(chart.data)

}

chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "cant_edad";
pieSeries.dataFields.category = "edad";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


}); // end am4core.ready()
</script>


<div id="table">
    <table border="1">
    
    <caption>Base De Datos De Los Libros</caption>

    <thead>
        <tr class="nada">
            <th>EDAD</th>
            <th>CANT DE EDAD</th>
            <th>¿TE GUSTA LEER?</th>
            <th>CANT QUE GUSTA</th>
            <th>GENEROS</th>
            <th>CANT DE GENEROS</th>
            <th>¿QUE PREFIERES?</th>
            <th>CANT_PREFIERES</th>
            <th>¿MÁS CULTA?</th>
            <th>CANT DE CULTA</th>
            <th>¿QUE LEES MÁS?</th>
            <th>CANT LEES MÁS</th>
            <th>¿LIBROS EN CASA?</th>
            <th>CANT DE LIBROS</th>
            <th>ENSEÑANZA</th>
            <th>CANT DE ENSEÑANZA</th>
        </tr>
    </thead>

    <tbody>
        
<?php 
    $query = "SELECT * FROM encuesta";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        while($fila = mysqli_fetch_assoc($result)){
?>

        <tr class="nada">
            <th><?php echo $fila["edad"]; ?></th>
            <th><?php echo $fila["cant_edad"]; ?></th>
            <th><?php echo $fila["g_leer"];?></th>
            <th><?php echo $fila["cant_leer"];?></th>
            <th><?php echo $fila["generos"];?></th>
            <th><?php echo $fila["cant_generos"];?></th>
            <th><?php echo $fila["que_prefieres1"];?></th>
            <th><?php echo $fila["cant_prefieres1"];?></th>
            <th><?php echo $fila["gente_culta"];?></th>
            <th><?php echo $fila["cant_culta"];?></th>
            <th><?php echo $fila["lees_mas"];?></th>
            <th><?php echo $fila["cant_lees_mas"];?></th>
            <th><?php echo $fila["libros_en_casa"];?></th>
            <th><?php echo $fila["cant_libros_casa"];?></th>
            <th><?php echo $fila["enseñanza"];?></th>
            <th><?php echo $fila["cant_enseñanza"];?></th>
        </tr>

<?php
        }   
    } else {
        die("Error: No hay datos en la tabla seleccionada");
    }
?>
    </tbody>
</table>
</div>

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
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="submit">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_derechos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                © 2021 Mundo Libro. Todos los derechos reservados | Diseñado por 3ero <b>INFOR.</b>
            </div>
        </footer>
</html>