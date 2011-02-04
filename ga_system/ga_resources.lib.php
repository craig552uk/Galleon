<?php
/*
    Functions to echo links to static resources

*/

/*
    Echo path to JavaScript resource
*/
function ga_res_js($name){
    global $config;
    $path = ROOT . DS . 'res' . DS. 'js' . DS . $name;
    $url = $config['galleon']['root_path']. '/res/js/' . $name; 
    
    if (file_exists($path . '.min.js'))     { echo $url . '.min.js'; return 1;}
    if (file_exists($path . '.js'))         { echo $url . '.js'; return 1;}
    if (file_exists($path))                 { echo $url; return 1;}
}

/*
    Echo path to Image resource
*/
function ga_res_img($name){
    global $config;
    $path = ROOT . DS . 'res' . DS. 'img' . DS . $name;
    $url = $config['galleon']['root_path']. '/res/img/' . $name; 
    
    if (file_exists($path . '.png'))        { echo $url . '.png'; return 1;}
    if (file_exists($path . '.jpg'))        { echo $url . '.jpg'; return 1;}
    if (file_exists($path . '.jpeg'))       { echo $url . '.jpeg'; return 1;}
    if (file_exists($path . '.gif'))        { echo $url . '.gif'; return 1;}
    if (file_exists($path . '.ico'))        { echo $url . '.ico'; return 1;}
    if (file_exists($path))                 { echo $url; return 1;}
}

/*
    Echo path to StyleScript resource
*/
function ga_res_css($name){
    global $config;
    $path = ROOT . DS . 'res' . DS. 'css' . DS . $name;
    $url = $config['galleon']['root_path']. '/res/css/' . $name; 
    
    if (file_exists($path . '.min.css'))     { echo $url . '.min.css'; return 1;}
    if (file_exists($path . '.min.style'))   { echo $url . '.min.style'; return 1;}
    if (file_exists($path . '.css'))         { echo $url . '.css'; return 1;}
    if (file_exists($path . '.style'))       { echo $url . '.style'; return 1;}
    if (file_exists($path))                  { echo $url; return 1;}
}
