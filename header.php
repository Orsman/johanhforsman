<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php
	    if ( is_single() ) { single_post_title(); }       
	    elseif ( is_home() || is_front_page() ) { bloginfo('description');  print ' | '; bloginfo('name');  }
	    elseif ( is_category() ) { get_the_category($id); print ' | '; bloginfo('name'); }
	    elseif ( is_page() ) { single_post_title(''); }
	    elseif ( is_search() ) { bloginfo('name'); print ' | Search results'; }
	    elseif ( is_404() ) { print 'Not Found | '; bloginfo('name'); }
	    else { bloginfo('name'); wp_title('|');  }
	?></title>
	     
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	     
	<link rel="shortcut icon" href="/favicon.ico" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>	    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<div class="page">
				<div class="site-title">
					<a href="<?php bloginfo('url'); ?>">
						<h1><?php bloginfo( 'name' ); ?></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</a>
				</div>
			</div>
		</header>

