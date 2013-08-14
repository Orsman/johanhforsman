<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<section class="page-content portfolio-page">
		<div class="page-wrap">
			<h2>Portfolio</h2>
            <p>In webdevelopment I'm driven by the possibilities with responsiveness and usability. I like the challenge of taking and old static webpage and transform it to something fluid and beautiful. That transformation process is what motivates me to keep learning new styles and design patterns.</p> 
			<p>I usually build my webpages from scratch and have good knowledge in CSS/Sass, jQuery and PHP. My prefered and most commonly used CMS is <a href="http://wordpress.org" target="_blank">Wordpress</a>.</p>
			<?php $args = array( 'post_type' => 'portfolio-item', 'showposts' => '-1');
				$portfolio_query = new WP_query($args);						
				if ( $portfolio_query->have_posts() ) :
					while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div>
									<?php the_post_thumbnail(); ?>
									<h4><?php the_title(); ?><h4>
							</div>
						</article> <?php
					 endwhile;
				endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
</section>

<?php get_footer(); ?>
