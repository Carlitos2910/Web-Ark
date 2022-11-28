<header class="header1">
    <div class="logo">
        <a href="index.php">
            <img src="./images/Header/logo.png" alt="Logo Ark">
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
        <a href="Paginas/login.php">
            <img src="./images/Header/login.png" alt="LogIn">
        </a>
    </div>
</header>


<header class="header2">
    <div class="menu2">
        <a href="#" class="bt-menu2">Menú</a>
    </div>

    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Mapas</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Dinosaurios</a></li>
        </ul>
    </nav>
</header>