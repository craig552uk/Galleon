<?php global $config; /* Get config data within scope */?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 ie" <?php ga_manifest(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 ie" <?php ga_manifest(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 ie" <?php ga_manifest(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9 ie" <?php ga_manifest(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js" <?php ga_manifest(); ?>> <!--<![endif]-->
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
    <link rel="shortcut icon" href="<?php echo $this->url->img('favicon'); ?>">
    <link rel="apple-touch-icon" href="<?php echo $this->url->img('apple-touch-icon'); ?>">
    
    <!-- Style sheets -->
    <link rel="stylesheet" href="<?php echo $this->url->css('styles'); ?>">
    
    <!-- Load head.js http://headjs.com -->
    <script src="<?php echo $this->url->js('head'); ?>"></script>
    
    <script>
        /* Load scripts in parallel, execute in order */
        head.js('<?php echo $this->url->js("goog_a"); ?>')
            .js('<?php echo $this->url->js("jquery-1.5"); ?>')
            .js('<?php echo $this->url->js("jquery-ui-1.8.9.custom"); ?>');
        
        /* Load print protector script for IE */
        if (head.browser.ie)  {
            head.js('<?php echo $this->url->js("iepp.1-6-2"); ?>');		
        }
            
        /* Wait for scripts to load then... */
        head.ready(function() {
           
        });
    </script>
</head>
<body>
