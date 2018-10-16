<?php
//require 'funciones.php';
require 'loader.php';

if(Auth::check()) {
    redirect('perfil.php');
}

if($_POST) {

    $arrayErr = [];

    $usuarioArray = $db->emailDbSearch($_POST['email']);

    $error = 'Usuario o Clave incorrectos.';

    if($usuarioArray != null){

        $userAux = new User($usuarioArray['username'], $usuarioArray['email'],$usuarioArray['password'],$usuarioArray['avatar']);

        if(validate::loginValidate($_POST['password'],$userAux)){
            Auth::login($userAux);
            redirect('perfil.php');
        }else{
            $arrayErr['login'] = $error;
        }

    }else{
        $arrayErr['login'] = $error;
    }

}

    

?>

<!DOCTYPE html>

    <?php require 'head.php'; ?>

<body>

    <div class="mainHeader">

        <?php require 'navbar.php'; ?>

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

                                <form action="" method="POST">

                                    <label for="email">Correo Electronico</label><br>
                                    <input type="email" name="email" id="email" placeholder="ejemplo@ejemplo.com"><br><br>
                                    <label for="password">Contraseña</label><br>
                                    <input type="password" name="password" id="password"><br><br>
                                    <input type="checkbox" name="" value="">
                                    <label for="checkbox">Recordarme</label><br><br>

                                    <?php if(isset($arrayErr)): ?>
                                        <div class="alert alert-danger">
                                            <?=$arrayErr['login']; ?>
                                        </div>
                                    <?php endif;?>

                                    <input class="btn btn-secundary btn-lg" type="submit" value="Iniciar sesion"><br><br>
                                    <!-- <input class="btn btn-secundary btn-lg mx-auto" type="submit" value="Registrate!"> <br> -->
                                    
                                    <a href="#">¿Olvidaste la contraseña?</a><br>
                                        
                                </form>

                            </div>
                        </div>

                    </div>
                    
                </div>
    
            </div>

    </div>
    

    <section>
        <?php require 'footer.php'; ?>
    </section>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
