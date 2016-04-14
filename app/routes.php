<?php


$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => '../views/',
    'strict_variables' => false,
));

$app['debug'] = true;

// Home page
$app->get('/', function () use ($app) {
    return $app['twig']->render('home.twig');
});

$app->get('/level', function () use ($app) {
    return $app['twig']->render('level.twig');
});