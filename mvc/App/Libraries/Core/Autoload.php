<?php
// Cargar Controllers base
require_once "App/Libraries/Core/Controllers.php";

spl_autoload_register(function ($class) {
    if (file_exists("App/Libraries/Core/" . $class . ".php")) {
        require_once ("App/Libraries/Core/" . $class . ".php");
    }
});