<?php
    session_start();

    function AvatarValido($data){

        $err = [];

        $userName = $data["username"];


        if($_FILES["userAvatar"]["error"] == UPLOAD_ERR_OK){
            
            $nombreArchivo = $_FILES["userAvatar"]["name"];
            $tempArchivo = $_FILES["userAvatar"]["tmp_name"];

            $extArchivo = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

            if($extArchivo != "jpg" && $extArchivo !="png" && $extArchivo != "jpeg"){
                $err["userAvatar"] = "Formato de imagen Invalido. (jpg/png)";
                dd($err);
                return $err;
            }

            $path = dirname(__FILE__);
            $path = $path . "/imgPerfil/";
            $path = $path . "perfil" . $userName . "." . $extArchivo;

            move_uploaded_file($tempArchivo, $path);


        }else{

            $err["userAvatar"] = "Hubo un error al subir el archivo";


        }

        return $err;

    }
    // //SI el nombre de usuario ya existe, return true;
    // function userExist($data){
    //     $users = emailDBSearch($data['email']);
    //     foreach($users as $arrUser){
    //         if($arrUser['username'] == $data){
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    function logIn($user){

        $_SESSION['email'] = $user['email'];

        setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");

    }

    function logOut(){
        if(!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        setcookie('email', null, time() -1);
        redirect('registrarse.php');

    }

    function isLogged(){
        if(isset($_SESSION['email'])){
            return true;
        }
        return false;
    }



?>