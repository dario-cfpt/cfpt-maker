<?php session_start();?>
<nav class="navbar navbar-light bg-light fixed-top navbar-expand-md navigation-clean-search">
    <div class="container">
        <a class="navbar-brand" href="">Mario maker</a>
        <button class="navbar-toggler" data-target="#navcol-1" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggle-icon"></span>
        </button>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="mapList.php">Listes des maps<a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="grid.php">Créer une map<a>
                </li>
                <?php
                if (isset($_SESSION["id"])) {
                    echo'
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="profile.php?id='.$_SESSION["id"].'">'.$_SESSION["username"].'<a>        
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="logoff.php">Déconnexion<a>        
                        </li>
                        ';
                }else{
                    echo'
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="register.php">Inscription<a>        
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="login.php">Connexion<a>        
                        </li>
                        ';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>