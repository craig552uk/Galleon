<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" >
    <?php Html::getJS(); ?>
    <?php Html::getCSS(); ?>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    
    <?php
        $data = array(
            'LABEL' => 'Che<!ese',
            'required' => true,
            'value' =>  'Chedder'
        );
        Html::input_text('myid', $data);
    ?>
    
</body>
</html>
