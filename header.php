<!DOCTYPE html>
<html <?php language_attributes(); ?> >
   <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <title> <?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	 …
	<?php wp_head(); ?>
   </head>
   <body>
     <header> … </header>
	<nav>  …  </nav>
