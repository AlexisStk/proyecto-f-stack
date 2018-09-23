<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/propStyles.css">
    <link rel="stylesheet" href="CSS/footer.css">
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

                    <a class="navbar-brand"href="index.php"><img src="Images/logo.png"></a>

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
    
                    <div class="propFormIniciarSesion ">

                        <div class="card">

                            <div class="card-body propCardBody">
                                
                                <h2>Iniciar Sesión</h2>

                                <form action="" method="">

                                    <label for="">Correo Electronico</label><br>
                                    <input type="email" placeholder="ejemplo@ejemplo.com" required><br><br>
                                    <label for="">Contraseña</label><br>
                                    <input type="password" placeholder="" required><br><br>
                                    <input type="checkbox" name="" value="">
                                    <label for="">Recordarme</label><br><br>

                                    <input class="btn btn-secundary btn-lg" type="submit" value="Iniciar session"><br><br>
                                    
                                    <a href="#">¿Olvidaste la contraseña?</a><br>
                                        
                                </form>

                            </div>
                        </div>

                    </div>
                    
                </div>
    
            </div>

    </div>
    
    <hr>
    <section>
        <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase">JuntAR!</h5>
          <p>Esta es una red social que te sera util para organizar una juntada con tus amigos o con personas con los mismo gustos de manera facil y rapida.</p>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">
   
            <h5 class="text-uppercase">Info</h5>

            <ul class="list-unstyled">
              <li>Contactanos: juntar!@gmail.com</li>
              <li>
                <a href="preguntasFrecuentes.html" class="link">Preguntas Frecuentes</a>
              </li>
              <li>
                <a href="registrarse.php" class="link" >Registrate Gratis!</a>
              </li>
              <li>
                <a href="login.php" class="link" >Logueate aca!</a>
              </li>
            </ul>

          </div>

      </div>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="index.html"> JuntAR!</a>
    </div>

  </footer>
    </section>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
