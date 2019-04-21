<?php

/* SPL Autoloader */
require 'vendor/autoload.php';

/* Lets use some stuff.. */
use SouthCoast\Helpers\Env;
use SouthCoast\SouthWest\Core\Config;
use SouthCoast\SouthWest\Core\ErrorHandler;
use SouthCoast\SouthWest\Core\Route;
use SouthCoast\SouthWest\Core\Session;

/* Set the server timezone */
date_default_timezone_set('Europe/Amsterdam');

/* Load the env file */
Env::load(__DIR__ . '/sc.env');
/* Load the config */
Config::load();
/* Register the error handlers */
ErrorHandler::register();
/* Start the session */
Session::start();

/* Check if we're in development mode */
if (Env::isDev()) {
    /* Make all error's show */
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}

Route::load();
