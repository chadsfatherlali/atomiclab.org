<?php

namespace Controllers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class IndexController implements ControllerProviderInterface
{
	public function connect (Application $app)
	{   
	    $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('index.html.twig', array());
        });
	    
        $controllers->get('/test-1', function (Application $app) {
            return $app->json(array('dev' => 1));
        });
        
        $controllers->get('/test-2', function (Application $app) {
            return $app->json(array('dev' => 2));
        });
        
	    return $controllers; 
	}
}