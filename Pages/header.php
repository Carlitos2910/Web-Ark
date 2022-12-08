<header class="header1">
    <div class="logo">
        <a href="index.php">
            <img src="./images/Header/logo2.png" alt="Logo Ark">
        </a>
        <i class="ref-pag">
            <?php
                if($_SERVER['REQUEST_URI'] == '/Web-Ark/index.php'){
                    echo 'Index';
                }else if($_SERVER['REQUEST_URI'] == '/Web-Ark/maps.php'){
                    echo 'Maps';
                }else if($_SERVER['REQUEST_URI'] == '/Web-Ark/events.php'){
                    echo 'Events';
                }else if($_SERVER['REQUEST_URI'] == '/Web-Ark/dinosaurs.php'){
                    echo 'Dinosaurs';
                }else if($_SERVER['REQUEST_URI'] == '/Web-Ark/login.php'){
                    echo 'LogIn';
                }else{
                    echo 'Index';
                }
            ?>
        </i>
    </div>
    <nav class="nav-header">
        <a href="maps.php" class="nav-link"> MAPAS </a>
        <a href="events.php" class="nav-link"> EVENTOS </a>
        <a href="dinosaurs.php" class="nav-link"> DINOSAURIOS </a>
    </nav>
    <div class="logo2">
        <a href="./login.php">
            <img src="./images/Header/login.png" alt="LogIn">
        </a>
    </div>
</header>