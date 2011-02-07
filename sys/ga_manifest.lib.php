<?php
/*
    Manifest caching functions
*/

/*
    If manifest caching is enabled echo html attribute with relative link to manifest cache file
*/
function ga_manifest(){
    global $config;
    if ($config['galleon']['manifest_cache']){
        echo 'manifest="'.$config['galleon']['root_path'] . '/cache-manifest.php"';
    }
}
