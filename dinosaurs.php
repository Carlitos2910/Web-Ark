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
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        .dinosaurios{
            text-align: center;
            max-width: 1200px;
            justify-content: center;
            margin: auto;
        }
        select {
            width: 200px;
            height: 40px;
            cursor: pointer;
            background-color: white;
            box-shadow: 0 2px 0 black;
            border-radius: 2px;
        }
        .btn{
            padding: 7px;
            border-radius: 4px;
            background-color: #009003;
            color: white;
            font-weight: bold;
            font-size: 16px;
            transition: background-color .15s;
        }
        .btn:hover{
            background-color: #00FF05;
        }

        .color_tabla{
            color: white;
        }
    </style>
</head>
<body>
    <?php include './Paginas/header.php' ?>

    <div class="dinosaurios">
        <h1> Proyecto ARK </h1>
        <form id="form_mostrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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

                    <button type="submit" class="btn" name="mostrar">Mostrar Datos del Dinosaurio</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['mostrar'])){
                    $dinosaur=$_REQUEST['valores'];
                    $sql3 = "SELECT nombre, descripcion, imagen FROM dinosaurios WHERE codigo='$dinosaur'";
                    $query3 = $conexion->query($sql3);

                    while ($row = mysqli_fetch_assoc($query3)) {
                        echo "<table border='1'>";
                        echo "<thead><h1 class='color_tabla'>".$row['nombre']."</h1></thead>";
                        echo "<tr>";
                            echo "<td width='50%'>";
                                echo "<img width='90%' src='./images/Dossier/".$row['imagen']."'>";
                            echo "</td>";
                            echo "<td class='color_tabla' width='50%'>".$row['descripcion']."</td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                }
            }

        ?>

    </div>

    <?php include './Paginas/footer.php' ?>
</body>
</html>


<?php
    mysqli_close($conexion);
?>