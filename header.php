<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/style.css">
</head>

<body>
    <div class="header">
        <div class="head">
            <img src="<?php echo get_header_image()?>" alt="Logo" width="50"
                height="50">
            <h1><?php bloginfo( 'name' ) ?></h1>
        </div>
        <p id="date"></p>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand " href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <?php
wp_nav_menu(array(
    'theme_location' => 'Primary-menu',
    'menu_class'     => 'navbar-nav ml-auto',
    'container_class'=>'navbar-nav ml-auto',
    'li_class'       =>'nav-item',
    'a_class'        =>'nav-link',
    'active_class'   =>'active'
));

?>

        </div>
        <div class="custom-control custom-switch ml-auto">
            <input type="checkbox" class="custom-control-input" id="themeSwitch">
            <label class="custom-control-label" for="themeSwitch">Dark Mode</label>
        </div>
    </nav>