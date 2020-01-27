<?php
/*
 * Oleg Rovinskiy
 * 1/27/2020
 * it_328/templating
 */

//Start Session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

$f3 = Base::instance();

$f3->route("GET /", function($f3){
    $f3->set('title', 'All About Templating');
    $view = new Template();
    echo $view->render("views/home.html");
});

$f3->run();