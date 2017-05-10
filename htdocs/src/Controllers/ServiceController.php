<?php

namespace Controllers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class ServiceController implements ControllerProviderInterface
{
    public function connect (Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/send-mail', function (Application $app) {
            $msg = \Swift_Message::newInstance()
                ->setSubject('[www.atomiclab.org] Atómicos')
                ->setFrom(array('noreply@atomiclab.org'))
                ->setTo(array('chadsfather@gmail.com'))
                ->setBody('Esto es una pruena de envio de mensajes');
            
            $app['mailer']->send($msg);

            return new Response('Thank you for your feedback!', 201);
        });

        return $controllers;
    }
}