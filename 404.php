<?php get_header(); ?>
     
<div id="content_area">
    <div class="page">
        <div id="content_box">

            <?php get_sidebar(); ?>
            <div id="content" class="hfeed">
                
			<article id="post-0" class="post error404 not-found">
				<div id="post-header">
					<h3><?php _e( 'Ohhh snap! That page can&apos;t be found.'); ?></h3>
				</div>
				<div class="post-content">
					<p>Apologies, but the page you are looking for no longer exists. Perhaps you can return back to the site's <a href="<?php bloginfo(home_url ('/'))?>"> homepage </a> and see if you can find what you are looking for. </p>
					<p>Or, you can try to search for it.</p>
					<?php get_search_form(); ?>
				</div>
			</article>           
            </div> <!-- content -->
        </div> <!-- content_box -->
    </div> <!-- page -->

    <div class="clear"></div>
</div> <!-- content_area -->

<?php get_footer(); ?> 