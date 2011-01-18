<?php
/*
    Main Galleon Config File
    
    Primary Galleon settings are configured here
    Optionally you can include further config files with Laod:config('name');

*/

/*
    Stylesheets combined in to one HTTP request from server.com/stylesheet
    Key     stylesheet name
    Value   stylesheet enabled
*/
$config['css']['meyer-reset'] = true;
$config['css']['desktop-styles'] = true;
$config['css']['smartphone-styles'] = true;
$config['css']['ipad-styles'] = true;


/*
    Load additonal config files
*/

extract(Load::config('monkey'));

devecho("Galleon config loaded\n");
