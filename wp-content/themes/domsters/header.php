<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Jay Skript And The Domsters</title>
</head>
<body <?php body_class(); ?> >
  <div id="header">
    <img src="<?php echo get_bloginfo('template_url') ?>/images/logo.gif" alt="<?php echo get_bloginfo('name') ?>"/>
  </div>
  <div id="navigation">
    <?php wp_head(); ?>

    <?php
   $defaults = array(
     'theme_location'  => 'main-menu',
     'menu'            => '',
     'container'       => 'nav',
     'container_class' => '',
     'container_id'    => 'navigation',
     'menu_class'      => '',
     'menu_id'         => '',
     'echo'            => true,
     'fallback_cb'     => 'wp_page_menu',
     'before'          => '',
     'after'           => '',
     'link_before'     => '',
     'link_after'      => '',
     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
     'depth'           => 0,
     'walker'          => ''
   );
   wp_nav_menu( $defaults );
    ?>
  </div>
