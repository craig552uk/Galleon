<?php
/*
    The main Galleon work horse script.
    Chuck any includes and mission critical function calls in here
*/

/* Core Classes and Libraries */
include_once (ROOT . DS . 'sys' . DS . 'ga_controller.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_path.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_url.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_error.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_common.lib.php');

/* Support Classes and Libraries */
include_once (ROOT . DS . 'sys' . DS . 'ga_html.class.php');
include_once (ROOT . DS . 'sys' . DS . 'ga_manifest.lib.php');

/* Load configuration files */
include_once (ga_path::config('galleon'));
include_once (ga_path::config('errors'));
include_once (ga_path::config('mysql'));

/* Request Call Hook */
ga_call_hook(ga_parse_url());

