<header>
    <div class="logo">
        <a href="index.php">
            <img src="./images/Header/logo.png" alt="Logo Ark">
            <img src="./images/Header/logo2.png" alt="Logo Ark">
        </a>
        <i class="ref-pag">
            <?php
                if($_SERVER['REQUEST_URI'] == '/Ark/index.php'){
                    echo 'Inicio';
                }else if($_SERVER['REQUEST_URI'] == '/Ark/mapas.php'){
                    echo 'Mapas';
                }else if($_SERVER['REQUEST_URI'] == '/Ark/eventos.php'){
                    echo 'Eventos';
                }else if($_SERVER['REQUEST_URI'] == '/Ark/dinosaurios.php'){
                    echo 'Dinosaurios';
                }
            ?>
        </i>
    </div>
    <nav class="nav-header">
        <a href="" class="nav-link"> MAPAS </a>
        <a href="" class="nav-link"> EVENTOS </a>
        <a href="" class="nav-link"> DINOSAURIOS </a>
    </nav>
    <div class="logo2">
        <a href="">
            <img src="./images/Header/login.png" alt="LogIn">
        </a>
    </div>
</header>