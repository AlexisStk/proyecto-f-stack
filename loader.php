<?php

require 'helpers.php';
require 'Classes/User.php';
require 'Classes/Auth.php';
require 'Classes/JSONDB.php';
require 'Classes/Validate.php';

// Instancio mi base de datos
$db = new JSONDB('users.json');
// Me aseguro de que siempre este seteado session_start()
Auth::set();





