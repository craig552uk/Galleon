<?php
/*
    The main Galleon work horse script.
    Chuck any includes and mission critical function calls in here
*/

/*
    Load Galleon Class and Library files
*/
include_once (ROOT . DS . 'ga_system' . DS . 'ga_common.lib.php');
include_once (ROOT . DS . 'ga_system' . DS . 'ga_includes.lib.php');
include_once (ROOT . DS . 'ga_system' . DS . 'ga_resources.lib.php');

/* 
    Load configuration files
*/
include_once (ga_config('galleon'));
include_once (ga_config('errors'));

/*
    Call functions
*/

// Request Call Hook
ga_call_hook(ga_parse_url());
