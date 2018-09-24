
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse_target">

            <a class="navbar-brand"href="index.php"><img src="Images/logo.png"></a>

            <ul class="navbar-nav ml-auto">

                <?php if(!isLogged()): ?>
                
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="registrarse.php">Registrate</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>


                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="preguntasFrecuentes.php">FAQS</a>
                </li> 

            </ul>
        </div>
    </div>

</nav>