<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['iniciar'])){
            
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="../styles/login.css"> -->
</head>
<body>
<div id="contenedor">
        <div id="contenedorcentrado">
                <div id="login">
                    <h4 class="titulo">BIENVENIDO</h4>
                    <form id="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <input type="text" id="user" name="user" placeholder="User" required>
                        <br>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <br>
                        <button type="submit" name="iniciar">Log In</button>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>