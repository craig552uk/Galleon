<?php global $config; /* Get config data in scope */?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
       
    <title><?php echo $title; ?></title>
    <meta name="author" content="<?php echo $config['meta']['author']; ?>">
    <meta name="description" content="<?php echo $config['meta']['description']; ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="<?php echo $config['galleon']['root_path']; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $config['galleon']['root_path']; ?>/apple-touch-icon.png">
  
</head>
<body>
