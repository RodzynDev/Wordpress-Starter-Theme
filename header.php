<!DocType HTML>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>

    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php the_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri().'/images/favicon.ico'; ?>" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> data-spy="scroll">
    <header id="header">
      <!-- Content of header !-->
    </header>