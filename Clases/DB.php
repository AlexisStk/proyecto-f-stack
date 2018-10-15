<?php

abstract class DB
{
    abstract public function dbConnect();
    abstract public function emailDbSearch($email);
    abstract public function saveUser(User $user);

    public function photoPath($data)
    {

        $username = $data["username"];
        $nombre = $_FILES["avatar"]["name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = "perfil" . $username . "." . $ext;

        return $miArchivo;
    }

    
    public function saveAvatar($data)
    {
        $errores = [];

        $username = $data["username"];
        
        if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
            $nombre = $_FILES["avatar"]["name"];
            $archivo = $_FILES["avatar"]["tmp_name"];
            
            $ext = pathinfo($nombre, PATHINFO_EXTENSION);

            if($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
                $errores["avatar"] = "Solo acepto formatos jpg y png";
                return $errores;
            }
            
            $miArchivo = dirname(__FILE__);
            $miArchivo = $miArchivo . "/img/";
            $miArchivo = $miArchivo . "perfil" . $username . "." . $ext;

            move_uploaded_file($archivo, $miArchivo);

        } else {
            $errores["avatar"] = "Hubo un error al procesar el archivo";
        }

        return $errores;

    }

}