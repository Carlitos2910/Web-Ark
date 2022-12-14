<?php

    $servername = "localhost";
    $database = "ark";
    $username = "admin";
    $password = "admin";
    // Creamos la conexion.
    $conexion = new mysqli($servername, $username, $password, $database);
    // Comprobamos la conexión.
    // if (!$conexion){
    //     die ('La conexión ha fallado: '. mysqli_connect_error());
    // }
    // echo "<i style='color:red'> Conexión realizada correctamente Procedimental </i>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dinosaurs </title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include './Pages/header.php' ?>

    <div class="dinosaurios">
        <h1> Dinosaur Selection: </h1>
        <form id="form_mostrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <?php
                    // Consultar la base de datos
                    $sql = 'SELECT * FROM ark.dinosaurios';
                    $query = $conexion->query($sql);

                    echo "<select class='desplegable' name='valores'>";
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<option value='".$row['codigo']."'>".$row['nombre']."</option>";
                        }
                    echo "</select>";
                ?>

                    <button type="submit" class="btn" name="mostrar">Mostrar Datos del Dinosaurio</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['mostrar'])){
                    $dinosaur=$_REQUEST['valores'];
                    $sql3 = "SELECT nombre, descripcion, imagen FROM dinosaurios WHERE codigo='$dinosaur'";
                    $query3 = $conexion->query($sql3);

                    while ($row = mysqli_fetch_assoc($query3)) {
                        echo "<br><br><br><br>";
                        echo "<h1 class='dossier-title'>".$row['nombre']."</h1>";
                        echo "<div class='dossier'>";
                            echo "<div class='dossier-img'>";
                                echo "<img src='./images/Dossier/".$row['imagen']."'>";
                            echo "</div>";
                            echo "<div class='dossier-texto'>";
                                echo "<p>".$row['descripcion']."</p>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
            }

        ?>

    </div>

    <?php include './Pages/footer.php' ?>
</body>
</html>


<?php
    mysqli_close($conexion);
?>