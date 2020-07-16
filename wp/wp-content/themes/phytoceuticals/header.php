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
?>

<!DOCTYPE html>
<html  <?php language_attributes();?> class="no-js no-svg">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>phyto ceuticals</title>
    <!-- style css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/style.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    />
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light shrink fixed-top">
        <a class="navbar-brand" href="<?php bloginfo('url');?>">
          <div class="header-logo">
            <img class="img-responsive" src="<?php echo get_option_tree('logo_image'); ?>" alt="#" />
          </div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
wp_nav_menu(
    array(
        'menu' => 'Main Menu',
        'container' => '',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'navbar-nav ml-auto',
        'menu_id' => '',
    )
);
?>
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php bloginfo('url');?>"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">about us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="private-label.html">Private Label</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">contact us</a>
            </li>
          </ul> -->
        </div>
      </nav>
    </header>
