<?php
/*
    The main Galleon work horse script.
    Chuck any includes and mission critical function calls in here
*/

/* 
    Load library files
*/
include_once (ROOT . DS . 'ga_system' . DS . 'ga_common.lib.php');


/* 
    Load configuration files
*/
include_once (ROOT . DS . 'ga_config.php');

/*
    Call functions
*/
callHook();
