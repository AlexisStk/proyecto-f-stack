<?php
    require 'funciones.php';

    if(isLogged()){

        $user = getUserEmail($_SESSION['email']);

        if($user['userAvatar']!= null){
            $pathAvatar = $user['userAvatar'];;
        }else{
            $pathAvatar = 'perfilDefault.jpeg';
        }

    }else{
        //Toca de aca
        redirect('registrarse.php');
    }
?>
<!DOCTYPE html>

    <?php require 'head.php'; ?>

<body>

    <div class="mainHeader">

        <?php require 'navbar.php'; ?>

    </div>

    <div class="container">
        <div class="row sarasa text-center">
        
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                
                <div class="card">
                    <p>Bienvenido <?= $user['username'] ;?>!</p>

                    <img class="card-img-top" src="imgPerfil/<?=$pathAvatar;?>" alt="avatar default"> <br>

                    <a href="#">Administrá tus grupos</a>
                    <a href="#">Grupos en los que participas</a>


                </div>

            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                
                <div class="card">
                    Jutadas Disponibles
                </div>

            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                
                <div class="card">
                    Calendario Personalizado
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