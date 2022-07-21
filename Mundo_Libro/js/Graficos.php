<?php
include '../funciones.php';
//$resultado = traer("libros");
$resultado = filtrar("libros", "10");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mundo Libro</title>
        <link rel="stylesheet" href="Css/style.css"/>
        <script src="https://kit.fontawesome.com/86dc997a7b.js" ></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
        
        <style>

                body { background-color: #30303d; color: #fff; }
                #chartdiv {
                width: 100%;
                height: 500px;
              }
       </style>
    </head>
    <body>
        <!--<header id="cabecera">
            <div class="titulo">
                <a href="index.php"><h1>MUNDO LIBRO</h1></a>
            </div> 
            
            <div class="menu_content">
                <nav>
                    <ul>
                        <li class="menu-select"><a href="index.php" class="text-menu-select">Inicio</a></li>
                        <li><a href="libros.php">Libros</a></li>
                        <li><a href="#">Gráfico</a></li>
                    </ul>
                </nav>
            </div>
            
            
        </header>  -->
<div id="chartdiv"> </div>        
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

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data

/*let url = '../apirest_php/articulos.php';
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

}*/

chart.data = [ {
  "country": "py",
  "litres": 55.9
}, {
  "country": "Czechia",
  "litres": 301.9
}, {
  "country": "Irel",
  "litres": 201.1
}, {
  "country": "Germany",
  "litres": 165.8
}, {
  "country": "Australia",
  "litres": 139.9
}, {
  "country": "Austria",
  "litres": 128.3
}, {
  "country": "UK",
  "litres": 99
}
];
// Set inner radius
chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


}); // end am4core.ready()
</script>

    </body>
</html>