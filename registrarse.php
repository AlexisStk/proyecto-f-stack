<?php

    require 'funciones.php';
    require 'helpers.php';

    if($_POST){

        $errors = registrarValido($_POST);
        $usuario = createUser($_POST);
    }

    if (count($errors == 0) ) {
        saveUser($usuario);
        redirect('login.html');
    }

?>

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

                    <a class="navbar-brand"href="index.html"><img src="Images/logo.png"></a>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="preguntasFrecuentes.html">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
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

            <div class="row propMainBody">

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <img class="img-fluid" src="Images/imgBody.png" alt="">
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="propPanelRegistrarse">

                            <div class="card">

                                <div class="card-body propCardBody">


                                    <div class="text-center">
                                        <legend>Se parte de junt<span class="propJuntar">AR!</span></legend>
                                    </div>

                                    <form action="" method="POST">

                                        <label class="propLabel" for="username">Nombre de usuario:</label>
                                        <input type="text" name="username" placeholder="Nombre de usuario" value="<?=isset($errors['username'])?"":old('username');?>"> <br>
                                        <?php if(isset($errors['username'])): ?>
                                            <div class="alert alert-danger">
                                                <?=$errors['username']; ?>
                                            </div>
                                        <?php endif;?>
                                        <label class="propLabel" for="email">E-Mail:</label>
                                        <input type="email" name="email" placeholder="Correo electronico"value="<?=isset($errors['email'])?"":old('email');?>"> <br>
                                        <?php if(isset($errors['email'])): ?>
                                            <div class="alert alert-danger">
                                                <?=$errors['email']; ?>
                                            </div>
                                        <?php endif;?>
                                        <label class="propLabel" for="password">Password:</label>
                                        <input type="password" name="password" placeholder="Contraseña"> <br>
                                        <label class="propLabel" for="repassword">Re-Password:</label>
                                        <input type="password" name="repassword" placeholder="Repetir contraseña"> <br>
                                        <input type="checkbox" name="confTerms" value="">
                                        <label for="confTerms">Acepto los términos y condiciones.</label><br>


                                        <input class="btn btn-secundary btn-lg mx-auto" type="submit" value="Registrate!"> <br>


                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

        </div>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
