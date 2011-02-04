<?php global $config; /* Get config data within scope */?>
<!DOCTYPE html>
<html lang="en">
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
    
    <!-- Configure and load head.js http://headjs.com -->
    <script>var head_conf = { screens: [640, 1024, 1280, 1680] };</script>
    <script src="<?php ga_res_js('head'); ?>"></script>
    
    <script>
        /* Load scripts in parallel, execute in order */
        head.js('<?php ga_res_js("jquery-1.4.4"); ?>');
        head.js('<?php ga_res_js("jquery-ui-1.8.9.custom"); ?>');
        
        /* Wait for scripts to load then... */
        head.ready(function() {
           
        });
    </script>
</head>
<body>
