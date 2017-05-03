<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                ?>
                <img src="<?php echo $image[0] ?>" width="80" />
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php wp_nav_menu(array(
                    'theme_location' => 'top',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'walker' => new Custom_Menu_Walker()
                )); ?>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li class="active" class="scroll hvr-underline-from-center"><a href="index.html">Inicio</a></li>
                <li><a class="scroll hvr-underline-from-center" href="#about">¿Quienes Somos?</a></li>
                <li><a class="scroll hvr-underline-from-center" href="#service">Proyectos</a></li>
                <li><a class="scroll hvr-underline-from-center" href="#team">Contacto</a></li>
                <li><a class="btn btn-lg btn-primary" href="#" role="button">¡Pedir una Protesis!</a></li>
            </ul> -->
        </div><!--/.nav-collapse -->
    </div>
</nav>
