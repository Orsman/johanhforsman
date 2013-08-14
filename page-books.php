<?php
/*
Template Name: Bookshelf
*/
?>

<?php get_header(); ?>

<section class="page-content">
		<h2> My Bookshelf</h2>
		<div class="book-list">
			<?php $args = array( 'post_type' => 'book', 'showposts' => '-1');
				$book_query = new WP_query($args);						
				if ( $book_query->have_posts() ) :
					while ( $book_query->have_posts() ) : $book_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div>
								<?php the_post_thumbnail(); ?>
								<div class="book-content"> 
									<h4> <?php the_title(); ?> </h4>
									<?php the_content(); ?> 
								</div>
							</div>
						</article> <?php
					 endwhile;
				endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
</section>

<?php get_footer(); ?>
