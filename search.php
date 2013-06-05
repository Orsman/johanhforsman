<?php get_header(); ?>
     
<div id="content_area">
    <div class="page">
        <div id="content_box">

            <?php get_sidebar(); ?>

            <div id="content">
                <div id="post-header">

                    <h3 class="post-title"><?php _e( 'Search results:'); ?></h3>
                </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                        <div id="post-header">
                            <div class="post-date"><?php echo the_date('F jS, Y') ?></div>                       
                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

            </div> <!-- content -->
        </div> <!-- content_box -->
    </div> <!-- page -->

    <div class="clear"></div>
</div> <!-- content_area -->

<?php get_footer(); ?> 