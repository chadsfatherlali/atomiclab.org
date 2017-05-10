<?php

namespace Controllers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Swift_Message;
use Symfony\Component\HttpFoundation\Request;
use DrewM\MailChimp\MailChimp;

class ServiceController implements ControllerProviderInterface
{
    public function connect (Application $app)
    {
        $controllers = $app['controllers_factory'];

        /**
         * Controlador para el envio de emails
         */
        $controllers->post('/send-mail', function (Application $app, Request $request) {
            $data = $request->request->all();
            $res = array('emailSend' => true);
            
            $msg = Swift_Message::newInstance()
                ->setSubject('[www.atomiclab.org] Atómicos')
                ->setFrom(array('noreply@atomiclab.org'))
                ->setTo(array('chadsfather@gmail.com'))
                ->setBody($data['msg']);
            
            $result = $app['mailer']->send($msg);
            
            $res['emailSend'] = $result ? true : false; 
            
            return $app->json($res);
        });

        /**
         * Controlador para suscripción en mail chimp
         */
        $controllers->post('/suscribe-mailchimp', function (Application $app, Request $request) {
            $data = $request->request->all();
            $mailChimp = new MailChimp('3811e9042d3ef9428acb4314dfe9c6ba-us15');
            $result = $mailChimp->post('lists/a01df64737/members', [
                'email_address' => $data['email'],
                'status' => 'subscribed',
            ]);
            
            return $app->json($result);
        });

        return $controllers;
    }
}