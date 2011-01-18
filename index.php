<?php

/* Define path constants */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

/* Enable / disable development messages*/
define('DEVELOPMENT_ENVIRONMENT', false);

/* Lets get on with it! */
include_once (ROOT . DS . 'lib' . DS . 'Galleon.Bootstrap.php');
