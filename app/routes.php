<?php


$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));


// Home page
$app->get('/', function () {
    require '../views/header.php';
    
    
    //variable contenant les données necessaire extraite de la base de ddonnée
    require '../model/User.php';
    

    ob_start();             // start buffering HTML output
    require '../views/home.twig';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
    
    
    
});