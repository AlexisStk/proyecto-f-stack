<?php
require 'loader.php';
Auth::logout();
redirect('login.php');
?>