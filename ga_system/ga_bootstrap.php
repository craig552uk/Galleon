<?php
/*
    The main Galleon work horse script.
    Chuck any includes and mission critical function calls in here
*/

/*
    Load Galleon Class and Library files
*/
include_once (ROOT . DS . 'ga_system' . DS . 'ga_common.lib.php');
include_once (ROOT . DS . 'ga_system' . DS . 'ga_show.class.php');

/* 
    Load configuration files
*/
include_once (ROOT . DS . 'ga_config.php');
include_once (ROOT . DS . 'ga_errors.php');

/*
    Call functions
*/

// Request Call Hook
galleonCallHook(galleonGetURL());
