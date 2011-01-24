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
    <h2><?php echo $error_code; ?></h2>
</body>
</html>
