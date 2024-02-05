<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>CargarFotos</title>
    </head>

    <body>
    	<form action="valida_foto.php" method="POST" enctype="multipart/form-data">
                <center>
                    <table border="1">
                        <tr bgcolor="skyblue">        
                            <td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
                        </tr>
                        <tr bgcolor="skyblue">
                        <td bgcolor="skyblue"><strong>Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
                        </tr>
                        <tr>
                        <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" name="enviar" value="Enviar"></td>
                        </tr>        
                    </table>
                </center>
            </form>    
    </body>
</html>