<?php

// Clase Auth (por "Authentication")
class Auth
{
    public static function set()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public static function login(User $user)
    {
        $email = $user->getEmail();
        $_SESSION['email'] = $email;
        self::cookieUp($email);
    }

    private static function cookieUp($email)
    {
        setcookie('email', $email, time() + 3600 * 24 * 7, "/");
    }

    private static function cookieDown()
    {
        setcookie('email', null, time() -1);
    }

    public static function logout()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        self::cookieDown();
    }
 
    public static function check()
    {
        return isset($_SESSION['email']);
    }

    public static function guest()
    {
        return !self::check();
    }

    public static function checkRole(DB $db, User $user)
    {
        if ($user->getRole() == 7) {
            return true;
        } else {
            return false;
        }
    }
}