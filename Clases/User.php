<?php

class User {

    private $username;
    private $email;
    private $password;
    private $avatar;
    private $role = 1;

    public function __construct(String $username, String $email, String $password, String $avatar = null)
    {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->avatar = $avatar;
    }
 
    public function getUsername()
    {
        return $this->username;
    }
 
    public function setUsername(String $username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(String $password)
    {
        $this->password = $password;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}

?>