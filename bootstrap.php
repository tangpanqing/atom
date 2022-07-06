<?php

$autoload_file = 'vendor/autoload.php';
if (is_file($autoload_file)) require $autoload_file;

use atom\core\App;
use atom\core\Request;
use atom\core\Config;

$routes_file = 'routes/routes.php';
if (is_file($routes_file)) require $routes_file;

$functions_file = 'functions.php';
if (is_file($functions_file)) require $functions_file;

$env_file = '.env';
if (is_file($env_file)) Config::loadEnv($env_file);

function app(): App
{
    return App::getInstance();
}

function request(): Request
{
    return new Request();
}

function load_file($class)
{
    $class_file = str_replace("\\", "/", $class . '.php');
    if (is_file($class_file)) require $class_file;
}

spl_autoload_register("load_file");