<?php
function dd($param)
{
    echo "<pre>";
    die(var_dump($param));
}
function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}
// redirect para no andar escribiendo header(Location) sarasa todo el tiempo
function redirect($url)
{
    header('Location: ' . $url);
    exit;
}
// funcion para mostrar (o no) contenido a usuarios no registrados
function guest()
{
    return !check();
}
// check de rol, 7 es admin, todos los usuarios que se registran en mi sistema vienen con 1 por defecto
function checkRole($email)
{
    // a la variable $user le asigno lo que me devuelva la busqueda por mail
    $user = dbEmailSearch($email);
    // SI el rol del $user es 7
    if($user['role'] == 7) {
        //dame TRUE
        return true;
    } else {
        //cualquier otra cosa, dame FALSE
        return false;
    }
}
