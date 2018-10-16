<?php


    //require 'funciones.php';
    require 'loader.php';

    if(Auth::check()) {
        redirect('perfil.php');
    }

    if($_POST){

        $errors = [];
        //De entrada instancio mi usuario
        $usuario = new User($_POST['username'], $_POST['email'], $_POST['password']);

        //Genero los errores si los hubiera
        $errors = Validate::registerValidate($usuario, $_POST, $db);

        if($_FILES['avatar']['error'] == 0) {
            $avatarErrors = $db->saveAvatar($_POST);
            if(count($errors) === 0 ) {
                $avatar = $db->photopath($_POST);
                $usuario->setAvatar($avatar);
            }
        }

        if(!Empty($avatarErrors)){
            $errors = array_merge($errors, $avatarErrors);
        }

        if (count($errors) === 0) {
            $usuarioArray = $db->createUser($usuario);
            $db->saveUser($usuarioArray);
            redirect('login.php');
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

                                    <form action="" method="POST" enctype="multipart/form-data">

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

                                        <?php if(isset($errors['password'])): ?>
                                            <div class="alert alert-danger">
                                                <?=$errors['password']; ?>
                                            </div>
                                        <?php endif;?>

                                        <label class="propLabel" for="cpassword">Re-Password:</label>
                                        <input type="password" name="cpassword" placeholder="Repetir contraseña"> <br>

                                        <?php if(isset($errors['cpassword'])): ?>
                                            <div class="alert alert-danger">
                                                <?=$errors['cpassword']; ?>
                                            </div>
                                        <?php endif;?>

                                        <label for="avatar">Foto de Perfil</label>
                                        <input type="file" name="avatar"> <br>

                                        <input type="checkbox" name="confirm" value="">
                                        <label for="confTerms">Acepto los términos y condiciones.</label><br>

                                        <?php if(isset($errors['confirm'])): ?>
                                            <div class="alert alert-danger">
                                                <?=$errors['confirm']; ?>
                                            </div>
                                        <?php endif;?>


                                        <input class="btn btn-secundary btn-lg mx-auto" type="submit" value="Registrate!"> <br>


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
