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

$sql = "SELECT *  FROM alumnos WHERE id=".$bloque;
$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($query);

mysqli_close($conn);

?>
<head>
    <style>


    </style>
</head>
<div>
    <table class="table" border="1" bordercolor="black" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>CodMatricula</th>
            </tr>
        </thead>
        <tr>
            <th><?php echo $row['Id'] ?></th>
            <th><?php echo $row['DNI'] ?></th>
            <th><?php echo $row['Nombre'] ?></th>
            <th><?php echo $row['Email'] ?></th>
            <th><?php echo $row['CodMatricula'] ?></th>
        </tr>
        
        <tr >
            <th colspan="5"> 
                <a href="eliminar.php?Id=<?php echo $row['Id']?>">Eliminar</a> 
            </th>

        </tr>
    </table>
    </div>