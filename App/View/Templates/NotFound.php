<?php 
use Mora\Core\Utils\PathBuilder;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>404 Not Found</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?=PathBuilder::buildPath("/res/style.css")?>">
    </head>
    <body>
        <h1>404 - Page not found</h1>
        <p>The page at "<?=$uri;?>" doesn't exist in this server</p>
        <a href="<?=PathBuilder::buildPath("/")?>">Go back home</a>
    </body>
</html>