<?php
/*
    Main Galleon Config File
    
    Primary Galleon settings are configured here
    Optionally you can include further config files with Laod:config('name');

*/

/*
    Application Meta Settings
*/

$config['meta']['name']              = 'Galleon';                       // Application name
$config['meta']['author']            = 'Craig Russell';                 // Author Name - SEO
$config['meta']['email']             = 'craig@craig-russell.co.uk';     // Contact Email
$config['meta']['version']           = 0.1;                             // Version Number
$config['meta']['description']       = 'Galleon PHP MVC Framework';     // Application Description - SEO


/*
    Application Instalation Configuration
*/
$config['galleon']['domain']            = 'http://localhost';
$config['galleon']['root_path']         = '/Galleon';
$config['galleon']['seo_urls']          = true;

/*
    Offline caching
    Configure manifest file /cache-manifest.php
*/
$config['galleon']['manifest_cache']    = false;

