<?php
/*
    The main Galleon work horse script.
    Chuck any includes and mission critical function calls in here
*/

/*
    Load Galleon Class and Library files
*/
include_once (ROOT . DS . 'sys' . DS . 'ga_common.lib.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_resources.lib.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_manifest.lib.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_controller.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_path.class.php');

/* 
    Load configuration files
*/
include_once (Path::config('galleon'));
include_once (Path::config('errors'));
include_once (Path::config('mysql'));

/*
    Call functions
*/

// Request Call Hook
ga_call_hook(ga_parse_url());

/*
    Create objects
*/

