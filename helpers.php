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

?>
