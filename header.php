<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes"/>	

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head();?>
</head>

	<body <?php body_class(); ?>>
	
		<div id="wrapper" role="main">
			<header id="masthead">
				<h1 class="montez"><?php bloginfo('name');?></h1>
				<nav class="circular-menu">
				
				  <div class="circle">
						<?php
						function st_wp_nav_menu_args( $args = '' )
						{
							$args['container'] = false;
							return $args;
						}
						
						add_filter( 'wp_nav_menu_args', 'st_wp_nav_menu_args' );
						?>
		
						<?php wp_nav_menu( array('menu' => 'Top Menu')); ?>
				  </div>
				  
				  <a href="" class="menu-button fa fa-key"></a>
				
				</nav>
			</header>
