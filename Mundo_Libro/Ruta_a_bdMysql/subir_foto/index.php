<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
     
    <center><strong><h1>INSERTAR RUTA DE FOTOS A LA BD</h1></strong></center>
    <p>
        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            <center><table border="1">
            <tr bgcolor="skyblue">        
                <td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
            </tr>
            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
            </center></table>
        </form>    
        
        <br><br>
        <?php
        include "conexion.php";
        $link=mysqli_connect("localhost","root","","subir_foto");
        $query = "SELECT * FROM foto";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            while($fila = mysqli_fetch_assoc($result)){
                echo $fila["nombre"]."<br>";
                echo '<img src="'.$fila["foto"].'" width="100" heigth="100"><br>';
            }   
        } else {
            die("Error: No hay datos en la tabla seleccionada");
        }
        ?>
    </body>
</html>
