<?php

/*
    Class for getting local paths for files
    Functions that return local file paths for files to be included with include()
    
    model($name)
    view($name)
    controller($name)
    config($name)
    lib($name)
*/

class ga_path {

    /*
        Get a model file path
        
        @param  string  Model file name
    */
    function model($name){
        $path_base  = ROOT . DS . 'app' . DS . 'models' . DS;
        $extensions = array('Model.class.php','.class.php','.php','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $path_base.$name; }
        }
    }

    /*
        Get a view file path
        
        @param  string  View file name
    */
    function view($name){
        $path_base  = ROOT . DS . 'app' . DS . 'views' . DS;
        $extensions = array('View.php','.view.php','.php','.html','.htm','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $path_base.$name; }
        }
    }

    /*
        Get a controller file path
        
        @param  string  Controller file name
    */
    function controller($name){
        $path_base  = ROOT . DS . 'app' . DS . 'controllers' . DS;
        $extensions = array('Controller.class.php','.class.php','.php','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $path_base.$name; }
        }
    }

    /*
        Get a config file path
        
        @param  string  Config file name
    */
    function config($name){
        $path_base  = ROOT . DS;
        $extensions = array('.config.php','.php','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $path_base.$name; }
        }
    }

    /*
        Get a library file path
        
        @param  string  Library file name
    */
    function lib($name){
        $path_base  = ROOT . DS . 'lib' . DS;
        $extensions = array('.class.php','.lib.php','.php','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $path_base.$name; }
        }
    }

}
