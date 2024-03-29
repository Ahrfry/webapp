<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('PayPal','/home/ubuntu/marin-ccmk/ccmk/application/protected/extensions/paypal/lib/PayPal/');
//Yii::setPathOfAlias('PayPal\Api','/home/ubuntu/marin-ccmk/ccmk/application/protected/extensions/paypal/lib/PayPal/Api/');


// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Bill Split Web Portal',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.models.Payment',
		'application.components.*',
		'application.extensions.*',
		'application.extensions.paypal.*',
		'application.extensions.paypal.lib.PayPal.Api.*',
		'application.extensions.paypal.lib.PayPal.Common.*',
		'application.extensions.paypal.lib.PayPal.Rest.*',
		'application.extensions.paypal.lib.PayPal.Auth.*',
		'application.extensions.paypal.vendor.paypal.sdk-core-php.lib.*',
		'application.extensions.paypal.vendor.paypal.sdk-core-php.lib.exceptions.*',
		'application.extensions.paypal.vendor.paypal.sdk-core-php.lib.auth.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ccmk',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('*','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=ccmk',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '123243',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
