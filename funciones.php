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

        if(strlen($username) < 6 || strlen($username) > 10){
            $errors['username']="El nombre de usuario debe tener entre 6 y 10 caracteres.";
        }else if(!preg_match('/^[a-zA-Z0-9][A-Za-z0-9]{5,31}$/',$username)){ //Sólo letras o números
            $errors['username']="Sólo se permiten letras o números.";
        }

        // echo $errors['username'];
        //Nombre OK!

        $email = $data['email'];

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

    function CreateUser($data){
        $usuario=[
            'username'=> $data['username'],
            'email'=> $data['email'],
            'password'=> password_hash($data['password'], PASSWORD_DEFAULT)
            
        ];

        return $usuario;
    }


    function saveUser($user){
        $jsonUser=json_encode($user); //recibe el array que tengo createUser lo convierto en json..
        file_put_contents('user.json', $json, PHP_EOL, FILE_APPEND); 
    }

?>
