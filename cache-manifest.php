<?php 
    /*
        Dynamically generated manifest cache file
        
        Links to cached files are inserted by php functions
        Note the use of nl() function to insert new lines after each function call
    */

    /* Set content type */
    header("Content-type: text/cache-manifest"); 
    
    /* No caching of manifest file */
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: ".date(DATE_RFC1123));

    /* Define path constants */
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', dirname(__FILE__));

    /* Include resources library and config file*/
    include_once (ROOT . DS . 'ga_system' . DS . 'ga_resources.lib.php');
    include_once (ROOT . DS . 'galleon.config.php');
    
    /* Function to echo new line character */
    function nl() { echo "\n"; }
?>

CACHE MANIFEST

# Expires <?php echo date(DATE_RFC1123)."\n\r"; /* Not strictly needed, but never-the-less */ ?>

CACHE:
# Icon Images
<?php ga_res_img('favicon'); nl(); ?>
<?php ga_res_img('apple-touch-icon'); nl(); ?>

# Style Sheets
<?php ga_res_css('meyer-reset-2-0b2'); nl(); ?>
<?php ga_res_css('desktop-styles'); nl(); ?>
<?php ga_res_css('ipad-styles'); nl(); ?>
<?php ga_res_css('smartphone-styles'); nl(); ?>

# Javascripts
<?php ga_res_js('head'); nl(); ?>
<?php ga_res_js("jquery-1.4.4"); nl(); ?>
<?php ga_res_js("jquery-ui-1.8.9.custom"); nl(); ?>    

FALLBACK:
#/ /offline.html

NETWORK:
*
