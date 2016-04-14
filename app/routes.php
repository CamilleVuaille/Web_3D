<?php

$app = new Silex\Application();


$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => '../views/',
    'strict_variables' => false,
));


$app['debug'] = true;

// Home page
$app->get('/home', function () use ($app) {
    return $app['twig']->render('home.twig');
});

$app->get('/level', function () use ($app) {
    return $app['twig']->render('level.twig');
});

$app->get('/game', function () use ($app) {
    return $app['twig']->render('game.twig');
});

$app->get('/profile', function () use ($app) {

    return $app['twig']->render('profile.twig');
});

$app->get('/score:{score}', function($score) use ($app){
    return $score;
});
