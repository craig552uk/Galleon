<?php
/*
    Stylesheet controller class
    
    Allows multiple stylesheets to be accessed with a single HTTP request
    Styles sheets can be enabled/disabled in config/galleon.config.php
*/

class StylesheetController{

    function index(){
        global $config;
        
        $stylespath = ROOT . DS . 'application' . DS . 'css' . DS;

        header('Content-type: text/css');
        
        foreach($config['css'] as $file => $enabled){
            if($enabled && file_exists($stylespath . $file . '.css'))
                { include_once($stylespath . $file . '.css'); }
            if($enabled && file_exists($stylespath . $file))
                { include_once($stylespath . $file); }
        }
    }
}
