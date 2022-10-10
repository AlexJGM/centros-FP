<?php

$bloque=$_GET['Id'];
$servername = "localhost";
$database = "centro fp";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM alumnos WHERE id=".$bloque;
$query = mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<a href="Tabla.php?">Volver</a>