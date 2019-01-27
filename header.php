<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo theme_uri(); ?>/css/professional.css" type="text/css" />	
    <link rel="stylesheet" href="<?php echo theme_uri(); ?>/css/blue.css" type="text/css" />  
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body id="page-template" <?php body_class(); ?>>
    <div id="header">
      <?php wp_nav_menu(array('menu' => 'main-nav', 'menu_id' => 'nav')); ?>
    </div>

