<?php

/*
    Error configuration

    Configured errors are rendered by Galleon
    Array key is error code
    Nested array specifies display parameters
    Nester array values are available to error view

    This array can safely be extended to include new error codes
*/

/* Unknown Error - DO NOT DELETE */
$error[000] = array('title'=>'Unknown Error', 'message'=>'An unknown error has occurred');

/* Apache Client Request Errors */
$error[400] = array('title'=>'Error 400', 'message'=>'Bad Request');
$error[401] = array('title'=>'Error 401', 'message'=>'Authorization Required');
$error[402] = array('title'=>'Error 402', 'message'=>'Payment Required (not used yet)');
$error[403] = array('title'=>'Error 403', 'message'=>'Forbidden');
$error[404] = array('title'=>'Error 404', 'message'=>'Not Found');
$error[405] = array('title'=>'Error 405', 'message'=>'Method Not Allowed');
$error[406] = array('title'=>'Error 406', 'message'=>'Not Acceptable (encoding)');
$error[407] = array('title'=>'Error 407', 'message'=>'Proxy Authentication Required');
$error[408] = array('title'=>'Error 408', 'message'=>'Request Timed Out');
$error[409] = array('title'=>'Error 409', 'message'=>'Conflicting Request');
$error[410] = array('title'=>'Error 410', 'message'=>'Gone');
$error[411] = array('title'=>'Error 411', 'message'=>'Content Length Required');
$error[412] = array('title'=>'Error 412', 'message'=>'Precondition Failed');
$error[413] = array('title'=>'Error 413', 'message'=>'Request Entity Too Long');
$error[414] = array('title'=>'Error 414', 'message'=>'Request URI Too Long');
$error[415] = array('title'=>'Error 415', 'message'=>'Unsupported Media Type');

/* Apache Server Errors */
$error[500] = array('title'=>'Error 500', 'message'=>'Internal Server Error');
$error[501] = array('title'=>'Error 501', 'message'=>'Not Implemented');
$error[502] = array('title'=>'Error 502', 'message'=>'Bad Gateway');
$error[503] = array('title'=>'Error 503', 'message'=>'Service Unavailable');
$error[504] = array('title'=>'Error 504', 'message'=>'Gateway Timeout');
$error[505] = array('title'=>'Error 505', 'message'=>'HTTP Version Not Supported');

