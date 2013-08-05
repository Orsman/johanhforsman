<?php get_header(); ?>

<section class="page-content">
		<div class="page-wrap">
			<article id="post-0" class="post error404 not-found">
				<div id="post-header">
					<h3><?php _e( 'Ohhh snap! That page can&apos;t be found.'); ?></h3>
				</div>
				<div class="post-content">
					<p>Apologies, but the page you are looking for no longer exists. Perhaps you can return back to the site's <a href="<?php bloginfo(home_url ('/'))?>"> homepage </a> and see if you can find what you are looking for. </p>
				</div>
			</article>
		</div>
</section>

<?php get_footer(); ?>