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

class Path {

    /*
        Get a model file path
        
        @param  string  Model file name
    */
    function model($name){
        $path = ROOT . DS . 'app' . DS . 'models' . DS. $name;
        if (file_exists($path . 'Model.class.php')) { return $path . 'Model.class.php'; }
        if (file_exists($path . '.class.php'))      { return $path . '.class.php'; }
        if (file_exists($path . '.php'))            { return $path . '.php'; }
        if (file_exists($path))                     { return $path; }
    }

    /*
        Get a view file path
        
        @param  string  View file name
    */
    function view($name){
        $path = ROOT . DS . 'app' . DS . 'views' . DS. $name;
        if (file_exists($path . 'View.php'))    { return $path . 'View.php'; }
        if (file_exists($path . '.view.php'))   { return $path . '.view.php'; }
        if (file_exists($path . '.php'))        { return $path . '.php'; }
        if (file_exists($path . '.html'))       { return $path . '.html'; }
        if (file_exists($path . '.htm'))        { return $path . '.htm'; }
        if (file_exists($path))                 { return $path; }
    }

    /*
        Get a controller file path
        
        @param  string  Controller file name
    */
    function controller($name){
        $path = ROOT . DS . 'app' . DS . 'controllers' . DS. $name;
        if (file_exists($path . 'Controller.class.php'))    { return $path . 'Controller.class.php'; }
        if (file_exists($path . '.class.php'))              { return $path . '.class.php'; }
        if (file_exists($path . '.php'))                    { return $path . '.php'; }
        if (file_exists($path))                             { return $path; }
    }

    /*
        Get a config file path
        
        @param  string  Config file name
    */
    function config($name){
        $path = ROOT . DS . $name;
        if (file_exists($path . '.config.php')) { return $path . '.config.php'; }
        if (file_exists($path))                 { return $path; }
    }

    /*
        Get a library file path
        
        @param  string  Library file name
    */
    function lib($name){
        $path = ROOT . DS . 'lib' . DS. $name;
        if (file_exists($path . '.lib.php'))    { return $path . '.lib.php'; }
        if (file_exists($path . '.class.php'))  { return $path . '.class.php'; }
        if (file_exists($path . '.php'))        { return $path . '.php'; }
        if (file_exists($path))                 { return $path; }
    }

}
