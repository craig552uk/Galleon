<?php
/*
    Galleon static class for showing common things
        Views
        Errors
        
*/

class Show {

    /*
        Load a view
        
        @param  string  View name
        @param  array   Array of data to be accessible from within view
    */
    public static function view($name, $data=array()){
    
        // Redefine array as single variables
        foreach ($data as $k => $v) { $$k = $v; }
    
        // Find and display view
        $path = ROOT . DS . 'app' . DS . 'views' . DS. $name;
        if (file_exists($path . '.view.php'))   { include($path . '.view.php'); }
        if (file_exists($path . '.php'))        { include($path . '.php'); }
        if (file_exists($path . '.html'))       { include($path . '.html'); }
        if (file_exists($path . '.htm'))        { include($path . '.htm'); }
        if (file_exists($path))                 { include($path); }
    }

    /*
        Call an error defined in ga_errors.php
    */
    public static function error($code){
        global $error;

        if (isset($error[$code])){
            // Format error through view
            self::view('error', $error[$code]);
        }else{
            // Return default error
            self::error(000);
        }    
    }
}
