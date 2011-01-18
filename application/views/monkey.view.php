<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="<?php getCssUrl(); ?>">
    <script src="<?php getJsUrl() ?>"></script>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    
    <?php Html::input_text('myid1', array('label'=>'Cheese')); ?>
    <?php Html::input_text('myid2', array('label'=>'Cheese')); ?>
    <?php Html::input_text('myid3', array('label'=>'Cheese')); ?>
    <?php Html::input_text('myid4', array('label'=>'Cheese')); ?>
    
    <img src="<?php echo $config['general']['domain'] ?>/image/get/html5logo/20" alt="HTML5 Logo"/>
</body>
</html>
