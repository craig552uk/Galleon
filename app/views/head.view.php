<?php global $config; /* Get config data within scope */?>
<!DOCTYPE html>
<html lang="en" class="no-js" <?php ga_manifest(); ?>>
<head>    
    <!-- Document meta data -->
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" >
    <meta name="author" content="<?php echo $config['meta']['author']; ?>">
    <meta name="description" content="<?php echo $config['meta']['description']; ?>">
    
    <!-- Force nice browser behaviours -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Icon images -->
    <link rel="shortcut icon" href="<?php ga_res_img('favicon'); ?>">
    <link rel="apple-touch-icon" href="<?php ga_res_img('apple-touch-icon'); ?>">
    
    <!-- Style sheets -->
    <link rel="stylesheet" href="<?php ga_res_css('meyer-reset-2-0b2'); ?>">
    <link rel="stylesheet" href="<?php ga_res_css('desktop-styles'); ?>">
    <link rel="stylesheet" href="<?php ga_res_css('ipad-styles'); ?>">
    <link rel="stylesheet" href="<?php ga_res_css('smartphone-styles'); ?>">
    
    <!-- Load head.js http://headjs.com -->
    <script src="<?php ga_res_js('head'); ?>"></script>
    
    <script>
        /* Load scripts in parallel, execute in order */
        head.js('<?php ga_res_js("jquery-1.4.4"); ?>')
            .js('<?php ga_res_js("jquery-ui-1.8.9.custom"); ?>');
        
        /* Load print protector script for IE */
        if (head.browser.ie)  {
            head.js('<?php ga_res_js("iepp.1-6-2"); ?>');		
        }
            
        /* Wait for scripts to load then... */
        head.ready(function() {
           
        });
    </script>
</head>
<body>
