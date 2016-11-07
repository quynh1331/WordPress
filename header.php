<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo("name") . wp_title("|"); ?></title>
  
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet">

    <?php wp_head() ?>
</head><!--/head-->

<body <?php body_class($class); ?>>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">QuincyUX</a>
                </div>

                <?php
                  wp_nav_menu(array(
                    "theme_location" => "main-menu",
                    "container" => "div",
                    "container_class" => "collapse navbar-collapse navbar-right",
                    "menu_class" => "nav navbar-nav",
                    "depth" => 2
                  ));
                ?>
            </div><!--/.container-->
        </nav><!--/nav-->
    
    </header><!--/header-->