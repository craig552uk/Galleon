<?php
/*
    Main Galleon Config File
    
    Primary Galleon settings are configured here
    Optionally you can include further config files with Laod:config('name');

*/

/*
    Stylesheets
    Array of stylesheets
    Key is stylesheet name
        File extension required if not .css
    Values is enablement
        true    Enable stylesheet
        fasle   Disable stylesheet
*/
$stylesheets['style1'] = true;
$stylesheets['style2'] = true;

/*
    Load additonal config files
*/

extract(Load::config('monkey'));

devecho("Galleon config loaded\n");
