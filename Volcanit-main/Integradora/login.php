<?
include("connection.php"); // hace la conexion con el connection
$con = connection(); //con= connection


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'volcanit' && $password == '1234') {
        header('Location: index.html');
        exit();
    } else {
        echo "Credenciales no válidas. Intenta de nuevo.";
    }
}
?>
