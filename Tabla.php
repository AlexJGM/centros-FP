<?php
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

$sql = "SELECT *  FROM alumnos";
$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($query);

mysqli_close($conn);
?>
<head>
    <style>
        body {
            background-color: smoke;
            
        }
    
    </style>
</head>
<div>
    <table class="table" border="1" bordercolor="black" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
            </tr>
        </thead>
            <?php
            foreach ($query as $row) {
        ?>
        <tr>
            <th><?php echo $row['Id'] ?></th>
            <th><?php echo $row['Nombre'] ?></th>
            
        </tr>
        <tr >
            <th colspan="5"> 
                <a href="verphp.php?Id=<?php echo $row['Id']?>">Ver</a>
                <a href="modificar.php?Id=<?php echo $row['Id']?>">Modificar</a>
              
            </th>

        </tr>
    <?php
    }
    ?>
    </table>
    </div>