<?php

    $servername = "localhost";
    $database = "ark";
    $username = "admin";
    $password = "admin";
    // Creamos la conexion.
    $conexion = new mysqli($servername, $username, $password, $database);
    // Comprobamos la conexión.
    if (!$conexion){
        die ('La conexión ha fallado: '. mysqli_connect_error());
    }
    echo "<i style='color:red'> Conexión realizada correctamente Procedimental </i>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dinosaurs </title>
    <style>
        header{
            background-color: #00ff75;
        }
    </style>
</head>
<body>
    <header>
        <h1> Proyecto ARK </h1>
        <form id="form_mostrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <p>Dinosaurs:
                <?php
                    // Consultar la base de datos
                    $sql = 'SELECT * FROM ark.dinosaurios';
                    $query = $conexion->query($sql);

                    echo "<select name='valores'>";
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<option value='".$row['codigo']."'>".$row['nombre']."</option>";
                        }
                    echo "</select>";
                ?>

                    <button type="submit" name="mostrar">Mostrar Datos del Dinosaurio</button>
            </p>
        </form>
    </header>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['mostrar'])){
                    echo "<h2> Dinosaurio:</h2>";

                    $dinosaur=$_REQUEST['valores'];
                    $sql3 = "SELECT nombre, descripcion, imagen FROM dinosaurios WHERE codigo='$dinosaur'";
                    $query3 = $conexion->query($sql3);

                    while ($row = mysqli_fetch_assoc($query3)) {
                        echo "<p>Dinosaurio: ". $row['nombre']. " <br>Descripcion: " . $row['descripcion']. " <br>Imagen: <img  width='500px' src='./images/Dossier/".$row['imagen']."'></p>";
                    }
                    echo "<div>";
                }
            }

        ?>
</body>
</html>


<?php
    mysqli_close($conexion);
?>