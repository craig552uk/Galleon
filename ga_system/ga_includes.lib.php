<?php

/*
    Include functions
    Functions that return local file names of files to be included
*/

/*
    Show a view
    
    @param  string  View name
    @param  array   Array of data to be accessible from within view
*/
function ga_view($name){
    // Find and display view
    $path = ROOT . DS . 'app' . DS . 'views' . DS. $name;
    if (file_exists($path . '.view.php'))   { return $path . '.view.php'; }
    if (file_exists($path . '.php'))        { return $path . '.php'; }
    if (file_exists($path . '.html'))       { return $path . '.html'; }
    if (file_exists($path . '.htm'))        { return $path . '.htm'; }
    if (file_exists($path))                 { return $path; }
}
