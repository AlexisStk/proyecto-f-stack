<?php
    //
    // $sa['username'] = "92MauroCAI";
    // $sa['email'] = "92MauroCAI@gmail.com";
    // $sa['password'] = "asdasd123";
    // $sa['repassword'] = "asdasd123";
    //
    // registrarValido($sa);

    function registrarValido($data){
        // Con esta funcion verificamos si los datos enviados al registrarse son validos.
        $errors = [];

        $username = trim($data['username']);

        if(userExist($username)){
            $errors['username']="El nombre de usuario ya existe";
        }

        if(strlen($username) < 6 || strlen($username) > 10){
            $errors['username']="El nombre de usuario debe tener entre 6 y 10 caracteres.";
        }else if(!preg_match('/^[a-zA-Z0-9][A-Za-z0-9]{5,31}$/',$username)){ //Sólo letras o números
            $errors['username']="Sólo se permiten letras o números.";
        }

        // echo $errors['username'];
        //Nombre OK!

        $email = $data['email'];

        if(getUserEmail($email)!=null){
            $errors['email'] = "El mail ingresado ya se encuentra en uso";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']="El mail es invalido.";
        }

        // echo $errors['email']
        //Email OK!

        $password = $data['password'];
        $rePassword = $data['repassword'];

        if(strlen($password) < 8 || strlen($password) > 12){
            $errors['password']="La password debe tener entre 8 y 12 caracteres.";
        }

        if($rePassword != $password){
            $errors['password']="Las passwords no coinciden.";
        }

        // echo $errors['password'];
        // echo $errors['repassword'];
        // Passwords OK!

        if(!isset($data['confTerms'])){
            $errors['confTerms']="Debes aceptar los terminos y condiciones";
        }

        // echo $errors['confTerms'];
        // Terminos y Condiciones OK!




        return  $errors;
    }

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

    function getPerfilPath($data){

        $userName = $data['username'];

        $nombreArchivo = $_FILES['userAvatar']['name'];

        $extArchivo = pathinfo($nombreArchivo,PATHINFO_EXTENSION);

        $pathArchivo = 'perfil' . $userName . "." . $extArchivo;

        return $pathArchivo;

    }


    function CreateUser($data){
        $usuario=[
            'username'=> $data['username'],
            'email'=> $data['email'],
            'password'=> password_hash($data['password'], PASSWORD_DEFAULT),
            'userAvatar'=>null,
            'ID' => idGenerate()
        ];

        return $usuario;
    }

    function idGenerate(){
        $fileUsers = file_get_contents("users.json");

        if ($fileUsers == ""){
            return 1; //Primer usuario
        }

        $users = explode(PHP_EOL, $fileUsers);
        array_pop($users);
   
        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);
    
        return $lastUser['ID'] + 1;
    }


    function saveUser($user){

        $jsonUser = json_encode($user); //recibe el array que tengo createUser lo convierto en json..

        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);       

    }

    function getUsersJSON(){

        $fileUsers = file_get_contents('users.json');

        $arrUsersJson = explode(PHP_EOL,$fileUsers);
        array_pop($arrUsersJson);

        foreach($arrUsersJson as $key){
            $arrUsers[] = json_decode($key,true);
        }

        return $arrUsers;

    }

    function getUserEmail($data){
        $users = getUsersJSON();

        foreach($users as $arrUser){
            if($arrUser['email'] == $data){
                return $arrUser;
            }
        }

        return null;
    }

    //SI el nombre de usuario ya existe, return true;
    function userExist($data){
        $users = getUsersJSON();

        foreach($users as $arrUser){
            if($arrUser['username'] == $data){
                return true;
            }
        }

        return false;
    }

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
        redirect('register.php');

    }



?>