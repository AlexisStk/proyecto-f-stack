
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/propStyles.css">
    <!-- Google FONT - ROBOTO - -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <title>juntAR!</title>
</head>

<body>

    <div class="mainHeader">

        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapse_target">

                    <a class="navbar-brand" href="index.php"><img src="Images/logo.png"></a>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="preguntasFrecuentes.php">FAQS</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse.php">Registrate</a>
                        </li> 
                    </ul>
                </div>
            </div>

        </nav>

    </div>

    <div class="container">

        <div class="row propMainBody text-center">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img class="img-fluid" src="Images/imgBody.png" alt="">
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                <div class="propPanelDescripcion">
                    <ul> <p class="propTituloDescripcion">¡Tu red social de Juntadas!</p>
                        <li>¿Queres organizar una mateada?</li>
                        <li>¿Queres arreglar una salida?</li>
                        <li>¿Estás buscando jugadores para un partido de futbol?</li>
                    </ul>

                    <a type="button" class="btn btn-secundary btn-lg btn-block" href="registrarse.php" role="button">¡Registrate</a>
                </div>
                
            </div>

        </div>

    </div>

    <hr>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
