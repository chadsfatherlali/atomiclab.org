<?php

namespace Controller

use Silex\Application;
use Silex\ControllerProviderInterface;

class IndexController implements ControllerProviderInterface
{
	public function connect (Application $app)
	{
		print_r($app);
	}
}
