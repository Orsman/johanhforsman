<?php get_header(); ?>

<div id="content_area">
 	<div class="page">
	    <div id="content_box">

	    	<div id="content" class="hfeed">
        		<?php global $query_string; ?>
        		<?php if( is_home() ) query_posts ($query_string . '&cat=-3,-5,-6,-9'); ?>
				<?php if ( have_posts() ) : $count = 0; 
					while ( have_posts() ) : the_post(); $count++; ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
							<div id="post-header">
								<div class="post-date"><?php echo the_date('F jS, Y') ?></div>                       
								<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php $category = get_the_category();
									$cat_name =  $category[0]->category_nicename;
									echo '<p class="post-categories ' . $cat_name . '">'. $cat_name . '</p>';
								?>
							</div>
							 
							<div class="post-content">   
								<?php if ( has_post_thumbnail() ) the_post_thumbnail('top-feature', array ('class' => 'feature_image')); ?>
								<?php the_content ('Continue reading >>'); ?>
							</div>
						</div>	     
				<?php endwhile; ?>
				<?php endif; ?>
				
     		</div> <!-- #content -->
		</div> <!-- #content_box -->
	</div> <!-- .page -->
</div> <!-- #content_area -->

<?php get_footer(); ?>