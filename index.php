<?php

/* Define path constants */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

/* Get SEO friendly url */
$url = $_GET['url'];

/* Lets get on with it! */
include_once (ROOT . DS . 'core' . DS . 'bootstrap.php');

