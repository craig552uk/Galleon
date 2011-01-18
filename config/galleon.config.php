<?php
/*
    Main Galleon Config File
    
    Primary Galleon settings are configured here
    Optionally you can include further config files with Laod:config('name');

*/

/*
    General application settings
*/

$config['general']['name']              = 'Galleon';
$config['general']['author']            = 'Craig Russell';
$config['general']['version']           = '0.1';
$config['general']['description']       = 'Galleon PHP MVC Framework';
$config['general']['keywords']          = 'php, mvc, framework';
$config['general']['domain']            = 'http://localhost/Galleon';


/*
    Stylesheets combined in to one HTTP request from server.com/stylesheet
    Key     stylesheet name
    Value   stylesheet enabled
*/
$config['css']['meyer-reset-2-0b2.css'] = true;
$config['css']['desktop-styles.css']    = true;
$config['css']['smartphone-styles.css'] = true;
$config['css']['ipad-styles.css']       = true;

/*
    Javascript libraries combined in to one HTTP request
    Key     JS library name
    Value   Js library enabled
*/
$config['js']['modernizr-1.6.min.js']   = true;
$config['js']['jquery-1.4.4.min.js']    = true;


/*
    Image library
    For each image specify an id and image files at various scales (0-100)
*/
// HTML5 Logo images http://www.w3.org/html/logo/
$config['image']['html5logo'][100]      = 'HTML5_Logo_512.png';
$config['image']['html5logo'][50]       = 'HTML5_Logo_256.png';
$config['image']['html5logo'][25]       = 'HTML5_Logo_128.png';
$config['image']['html5logo'][12]       = 'HTML5_Logo_64.png';
$config['image']['html5logo'][6]        = 'HTML5_Logo_32.png';

/*
    Load additonal config files
*/

extract(Load::config('monkey'));

devecho("Galleon config loaded\n");
