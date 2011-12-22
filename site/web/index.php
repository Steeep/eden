<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2009-2011 Christian Blanquera <cblanquera@gmail.com>
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */
require dirname(__FILE__).'/../front.php';

/* Get Application
-------------------------------*/
print front()
/* Set Debug
-------------------------------*/
->setDebug(E_ALL, true)

/* Set Autoload
-------------------------------*/
->setLoader(NULL, '/model')

/* Set Paths
-------------------------------*/
->setPaths()

/* Set Database
-------------------------------*/
->addDatabase(array(
  'key' 	=> 'test',
  'type' 	=> 'mysql',
  'default' => true,
  'host' 	=> '127.0.0.1',
  'name' 	=> 'expresso_prod',
  'user' 	=> 'root',
  'pass' 	=> ''))

/* Set Request
-------------------------------*/
->setRequest()

/* Set Response
-------------------------------*/
->setResponse('Front_Page_Index')

/* Get the Response
-------------------------------*/
->getResponse();
echo Eden_MySql_Model::get(front()->getDatabase(), 'store')->load(1)->getStoreName();