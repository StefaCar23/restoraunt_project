<!doctype html>

<html lang=""eng">
    
    <head>
        <title> Restoran <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
    </head>
    
    <body>
        
        <header>
            <h1>
            <a href="<?php echo url_for('/index.php'); ?>">
                <!-- ovde treba slika da se savi -->
                Restoran Aleksic
            </a>
            </h1>
        </header>