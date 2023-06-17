<?php
require 'vendor/autoload.php';

$f3 = \Base::instance();

$f3->route('GET /', function($f3) {
    $view = new Template;
    echo $view->render('views/home.html');
});

$f3->run();
