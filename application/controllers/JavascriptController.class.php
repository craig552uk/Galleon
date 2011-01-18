<?php
/*
    Javascript Controller Class
    
    Allows multiple javascript libraries to be served in a single http request
    Javascript libraries can be enabled/disabled in config/galleon.config.php
*/

class JavascriptController{

    function index(){
        global $config;
        
        $jspath = ROOT . DS . 'application' . DS . 'javascript' . DS;

        header('Content-type: text/javascript');
        
        foreach($config['js'] as $file => $enabled){
            if($enabled && file_exists($jspath . $file . '.js'))
                { include_once($jspath . $file . '.js'); }
            if($enabled && file_exists($jspath . $file . '.class.js'))
                { include_once($jspath . $file . '.class.js'); }
            if($enabled && file_exists($jspath . $file))
                { include_once($jspath . $file); }
        }
    }
}
