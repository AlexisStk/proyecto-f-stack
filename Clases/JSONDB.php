<?php
require 'DB.php';

class JSONDB extends DB
{

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function dbConnect()
    {
        $usersArray = [];
        $db = file_get_contents($this->file);
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function emailDbSearch($email)
    {
        $users = $this->dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser($usuarioArray)
    {
        $file = $this->file;
        $jsonUser = json_encode($usuarioArray);
        file_put_contents($file, $jsonUser . PHP_EOL, FILE_APPEND);
    }


    public function idGenerate()
    {
        $arr = $this->dbConnect();

        if($arr == []) {
            return 1;
        }

        $lastUser = count($arr);

        return $lastUser + 1;

    }

    public function createUser(User $user)
    {
        $usuario = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'role' => $user->getRole()
        ];

        $usuario['id'] = $this->idGenerate();

        return $usuario;

    }

    /**
     * Get the value of file
     */ 
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set the value of file
     *
     * @return  self
     */ 
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}