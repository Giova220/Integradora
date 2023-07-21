<?php
//include permite incluir el contenido de un archivo externo dentro de otro archivo 
function connection(){ //function es para que se pueda hacer la conexion con conexion 
    $host = "localhost";
    $user = "root";
    $pass = "";


    $bd = "volcanit";// nombe de la base de datos

    $connect=mysqli_connect($host,$user,$pass); //selecciona la base de datos

    mysqli_select_db($connect, $bd);
    //sirve para hacer conexion con la base de datos
    return $connect;
}
    
 //return devuelve el control del programa al módulo que lo invoca.