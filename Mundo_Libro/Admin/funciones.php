<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

function baseDatos() { //es para conectarse a la Base de Datos
    return mysqli_connect("localhost", "root", "", "proyecto");
}

function traer($tabla) {
    $str = "select * from $tabla";
    $resul = mysqli_query(baseDatos(), $str);
    logear($str);
    return $resul;
}

function traerPorID($tabla,$id){
    $str= "select * from $tabla where id=$id ";
    $resul = mysqli_query(baseDatos(), $str);
}

function filtrar($tabla, $limite){
    $str = "select * from $tabla  ORDER BY id  LIMIT $limite;";
    $resul = mysqli_query(baseDatos(), $str);
    logear($str);
    return $resul;
}

function logear($texto) {   //util para logear en pantalla
    echo' <script type="text/javascript">  console.log("' . $texto . '")   </script>';
}


//-------------- para los libros ---------------------------------
function postlibro($img, $href, $titulo, $categoria, $alt, $fechap, $autores) {
?> 
    
    <a href="<?php echo ($href)?>" class="post" data-category="<?php echo ($categoria)?>"  class="col-lg-4 col-md-4 col-sm-6 col-xm-12">
        <div >
            <div class="ctn-img">
                <img src="<?php echo ($img) ?>" alt="<?php echo ($alt)?>">
            </div>
            <h2><?php echo ($titulo) ?></h2>
            <span><b>Lanzamiento: </b><?php echo ($fechap) ?></span>
            <span><b>Autor: </b><?php echo ($autores) ?></span>
        </div>
    </a>  
    
     
<?php
}

function postaside($href2, $titulo2, $img2, $txt, $alt2){
?>
    <aside class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img src="<?php echo ($img2) ?>" alt="<?php echo ($alt2)?>">
        <h2><?php echo ($titulo2) ?></h2>
        <p><b><?php echo ($txt) ?></b></p>
        <a href="<?php echo ($href2)?>"><button>Leer Mas</button></a>
</aside>
<?php
}
?>