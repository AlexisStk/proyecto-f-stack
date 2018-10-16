<?php

class Validate
{
    public static function emailValidate($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function imageValidate($file)
    {
        
    }

    public static function passwordMatch($data)
    {
        return $data['password'] == $data['cpassword'];
    }

    public static function termsAndConditions($data)
    {
        return isset($data['confirm']);

    }

    public static function registerValidate(User $user, $data)
    {
        $errors = [];

        $username = $user->getUsername();

        if(userExist($username)){
            $errors['username']="El nombre de usuario ya existe";
        }

        if(strlen($username) < 6 || strlen($username) > 10){
            $errors['username']="El nombre de usuario debe tener entre 6 y 10 caracteres.";
        }else if(!preg_match('/^[a-zA-Z0-9][A-Za-z0-9]{5,31}$/',$username)){ //Sólo letras o números
            $errors['username']="Sólo se permiten letras o números.";
        }

        $email = $user->getEmail();

        if(getUserEmail($email)!=null){
            $errors['email'] = "El mail ingresado ya se encuentra en uso";
        }

        } elseif(!self::emailValidate($email)) {
            $errors['email'] = "El email no es valido";
        }

        $password = trim($user->getPassword());
        $cpassword = trim($data['cpassword']);

        if(strlen($password) < 8 || strlen($password) > 12){
            $errors['password']="La password debe tener entre 8 y 12 caracteres.";
        }

        if(!self::passwordMatch($data)) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }

        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Tenes que aceptar terminos y condiciones";
        }
        return $errors;
        
    }

    public static function passwordValidate($password, $objectPassword)
    {
        return password_verify($password, $objectPassword);
    }

    public static function loginValidate($password, User $user)
    {
        return self::passwordValidate($password, $user->getPassword());

    }

}