<?php get_header(); ?>

<section class="page-content">
		<div class="page-wrap">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-header">
							<h1 class="post-title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
</section>

<?php get_footer(); ?>
