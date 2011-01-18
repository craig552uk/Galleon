<?php

/*
    Loads supplimentary files
        Views
        Function Libraries (class libraries loaded automatically)
        Configuration files
*/

class Load {

    /*
        load and display a view
        
        @param  string  View name
        @param  array   Pointer to data object to interact with in view
    */
    public static function view($name, &$data=array()){    
        $path = ROOT . DS . 'application' . DS . 'views' . DS. $name;
        if (file_exists($path . '.view.php'))   { include($path . '.view.php'); }
        if (file_exists($path . '.php'))        { include($path . '.php'); }
        if (file_exists($path . '.html'))       { include($path . '.html'); }
        if (file_exists($path . '.htm'))        { include($path . '.htm'); }
        if (file_exists($path))                 { include($path); }
    }
    
    /*
        load a function library
        
        @param string   Library name
    */
    public static function library($name){
        $path = ROOT . DS . 'lib' . DS . $name;
        if (file_exists($path.'.lib.php'))  { include($path.'.lib.php'); }
        if (file_exists($path.'.php'))      { include($path.'.php'); }
        if (file_exists($path))             { include($path); }
    }
    
    /*
        Load a config file
        
        @param string Config name
    */
    public static function config($name){
        $path = ROOT . DS . 'config' . DS . $name;
        if (file_exists($path.'.config.php'))  { include($path.'.config.php'); }
        if (file_exists($path.'.php'))      { include($path.'.php'); }
        if (file_exists($path))             { include($path); }
    }

}
