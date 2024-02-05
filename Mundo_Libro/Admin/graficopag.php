<?php
include 'funciones.php';
include 'header.php';
include 'conex.php';
$link=mysqli_connect("localhost","root","","proyecto");
$query="SELECT * FROM prueba";
$con=mysqli_query($link,$query);

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
        <link rel="stylesheet" href="../Css/style.css"/>
        <link rel="stylesheet" href="../Css/grafico.css">
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
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-0"><a href="index.php">INICIO</a></div>
                    <div class="col-lg-3 col-md-0 col-sm-0 col-xs-0"><a href="nosotros.php">ACERCA DE</a></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-0"><a href="libros.php">LIBROS</a></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-0"><a href="Graficos.php">GRÁFICOS</a></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0"><a href="#">CONTACTANOS</a></div>
            </div>
            <div class="position1 col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div id="icono1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center><i class="fas fa-user"></i></center></div>
                    
            </div>
            
            
       </header>


       <div class="btn_graficos col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="titulog col-lg-12 col-md-12 col-sm-12 col-xs-12" ><h1>Gráfico de acuerdo a:</h1></div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><a href="Graficos.php">Ranking</a></div>
           <div class="select col-lg-4 col-md-4 col-sm-12 col-xs-12"><a href="graficopag.php">Número de páginas</a></div>
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><a href="masVendido.php">Más vendido</a></div>
       </div>
        

        <h1 class="titulog">GRÁFICO DE CANTIDAD DE PÁGINAS</h1>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>


<!-- Chart code -->
<script>
    am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_dark);
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.XYChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    // Add data

    let url = 'http://localhost/Mundo_Libro/api/articulos.php';
    fetch(url)
        .then(response => response.json() )
        .then( datos => mostrar(datos))
        .catch( e => console.log(e))

    const mostrar = (articulos)=> {
        articulos.forEach(element => {
            chart.data.push(element.title)
        });
        chart.data = articulos
        console.log(chart.data)
    }


     //Add and configure Series

        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.dataFields.category = "title";
        categoryAxis.renderer.minGridDistance = 40;
        categoryAxis.fontSize = 11;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.min = 0;
        valueAxis.max = 1000;
        valueAxis.strictMinMax = true;
        valueAxis.renderer.minGridDistance = 30;
        // axis break
        var axisBreak = valueAxis.axisBreaks.create();
        axisBreak.startValue = 100;
        axisBreak.endValue = 500;
        //axisBreak.breakSize = 0.005;

        // fixed axis break
        var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
        axisBreak.breakSize = 0.05 * (1 - d) / d; // 0.05 means that the break will take 5% of the total value axis height

        // make break expand on hover
        var hoverState = axisBreak.states.create("hover");
        hoverState.properties.breakSize = 1;
        hoverState.properties.opacity = 0.1;
        hoverState.transitionDuration = 1500;

        axisBreak.defaultState.transitionDuration = 1000;
        /*
        // this is exactly the same, but with events
        axisBreak.events.on("over", function() {
          axisBreak.animate(
            [{ property: "breakSize", to: 1 }, { property: "opacity", to: 0.1 }],
            1500,
            am4core.ease.sinOut
          );
        });
        axisBreak.events.on("out", function() {
          axisBreak.animate(
            [{ property: "breakSize", to: 0.005 }, { property: "opacity", to: 1 }],
            1000,
            am4core.ease.quadOut
          );
        });*/

        var series = chart.series.push(new am4charts.ColumnSeries());
        series.dataFields.categoryX = "title";
        series.dataFields.valueY = "num_page";
        series.columns.template.tooltipText = "{valueY.value}";
        series.columns.template.tooltipY = 0;
        series.columns.template.strokeOpacity = 0;

        // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
        series.columns.template.adapter.add("fill", function(fill, target) {
          return chart.colors.getIndex(target.dataItem.index);
        });

    }); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>


<div id="table">
    <table border="1">
    
    <caption>Base De Datos De Los Libros</caption>

    <thead>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>AUTORES</th>
            <th>RANKING</th>
            <th>LENGUAJE</th>
            <th>N° DE PÁGINA</th>
            <th>FECHA DE PUBLICACIÓN</th>
            <th>EDITORIALES</th>
            <th>Ventas</th>
        </tr>
    </thead>

    <tbody>
        
<?php 
    $query = "SELECT * FROM libros";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        while($fila = mysqli_fetch_assoc($result)){
?>

        <tr>
            <th><?php echo $fila["id"]; ?></th>
            <th><?php echo $fila["title"]; ?></th>
            <th><?php echo $fila["autores"]; ?></th>
            <th><?php echo $fila["ranking"];?></th>
            <th><?php echo $fila["lenguaje"];?></th>
            <th><?php echo $fila["num_page"];?></th>
            <th><?php echo $fila["fecha_de_publicacion"];?></th>
            <th><?php echo $fila["editoriales"];?></th>
            <th><?php echo $fila["cantidad_vendido"];?></th>
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