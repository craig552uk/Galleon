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
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . $name . 'Model.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_LOWER) . 'Model.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_TITLE) . 'Model.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . $name . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . $name . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . $name;
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_LOWER);
        $paths[] = ROOT . DS . 'app' . DS . 'model' . DS . mb_convert_case($name, MB_CASE_TITLE);
        
        foreach ($paths as $path){
            if (file_exists($path)) { return $path; }
        }
    }

    /*
        Get a view file path
        
        @param  string  View file name
    */
    function view($name){
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name . 'View.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER) . 'View.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE) . 'View.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name . '.view.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.view.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.view.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name . '.html';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.html';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.html';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name . '.htm';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.htm';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.htm';
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . $name;
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_LOWER);
        $paths[] = ROOT . DS . 'app' . DS . 'views' . DS . mb_convert_case($name, MB_CASE_TITLE);
        
        foreach ($paths as $path){
            if (file_exists($path)) { return $path; }
        }
    }

    /*
        Get a controller file path
        
        @param  string  Controller file name
    */
    function controller($name){
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . $name . 'Controller.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_LOWER) . 'Controller.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_TITLE) . 'Controller.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . $name . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.class.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . $name . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.php';
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . $name;
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_LOWER);
        $paths[] = ROOT . DS . 'app' . DS . 'controllers' . DS . mb_convert_case($name, MB_CASE_TITLE);
        
        foreach ($paths as $path){
            if (file_exists($path)) { return $path; }
        }
    }

    /*
        Get a config file path
        
        @param  string  Config file name
    */
    function config($name){
        $paths[] = ROOT . DS . $name . '.config.php';
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_LOWER) . '.config.php';
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_TITLE) . '.config.php';
        $paths[] = ROOT . DS . $name . '.php';
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_LOWER) . '.php';
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_TITLE) . '.php';
        $paths[] = ROOT . DS . $name;
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_LOWER);
        $paths[] = ROOT . DS . mb_convert_case($name, MB_CASE_TITLE);
        
        foreach ($paths as $path){
            if (file_exists($path)) { return $path; }
        }
    }

    /*
        Get a library file path
        
        @param  string  Library file name
    */
    function lib($name){
        $paths[] = ROOT . DS . 'lib' . DS . $name . '.class.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.class.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.class.php';
        $paths[] = ROOT . DS . 'lib' . DS . $name . '.lib.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.lib.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.lib.php';
        $paths[] = ROOT . DS . 'lib' . DS . $name . '.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_LOWER) . '.php';
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_TITLE) . '.php';
        $paths[] = ROOT . DS . 'lib' . DS . $name;
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_LOWER);
        $paths[] = ROOT . DS . 'lib' . DS . mb_convert_case($name, MB_CASE_TITLE);
        
        foreach ($paths as $path){
            if (file_exists($path)) { return $path; }
        }
    }

}
