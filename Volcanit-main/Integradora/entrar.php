<?php
include("connection.php"); // hace la conexion con el connection
$con = connection(); //con= connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Ingresar</title><!--texto del titulo-->
</head>
<body>

    <div class="usuarios-form"><!--nombre de la clase -->
        <h2>Ingresar</h2>
        <form method="POST" action="index.html">
            <label for="Username">Usuario:</label>
         
            <input type="text" name="Username" required><br></br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required> <br></br>

            <input type="submit" name="submit" value="ingresar">

    
        </form>
    </div><!--separador de contenido-->

</body>
</html>