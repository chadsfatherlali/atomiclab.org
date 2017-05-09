<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

#$app->get('/', function () use ($app) {
   #return $app['twig']->render('index.html.twig', array());
#})->bind('homepage');

$app->get('/', new Controller\IndexController())->bind('homepage');

$app->get('/test', function () use ($app) {
    return $app->json(array('dev' => 0));
})->bind('testpage');


$app->get('/test-1', function () use ($app) {
    return $app->json(array('dev' => 1));
})->bind('testpage1');

$app->get('/test-2', function () use ($app) {
    return $app->json(array('dev' => 2));
})->bind('testpage2');

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
