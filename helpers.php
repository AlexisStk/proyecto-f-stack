<?php
// Debug
function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}

// Errores en if ternario para values en formularios
function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}

function redirect($url)//funcion para redirigir de una pag a otra
{
    header('Location: ' . $url);
    exit;
}

?>
