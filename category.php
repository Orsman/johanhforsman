<?php get_header(); ?>
     
<div id="content_area">
    <div class="page">
        <div id="content_box">
            
            <div id="content" class="hfeed">
             
                 <?php the_post(); ?>          
                             
                    <?php $cat = get_term_by('name', single_cat_title('',false), 'category'); 
                            $the_category = single_cat_title('',false);
                        echo '<p class="post-categories ' . $cat->slug . '">'. $the_category . '</p>'; 
                    ?> 

                <?php rewind_posts(); ?>         
                 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
                 
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                            <div id="post_header">
                                <div class="post_date"><?php echo the_date('F jS, Y') ?></div>                       
                                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                             
                            <div class="post_content">   
                                <?php if ( has_post_thumbnail() ) the_post_thumbnail('top-feature', array ('class' => 'feature_image')); ?>
                                <?php the_content (); ?>
                            </div>
    
                        </div><!-- #post-<?php the_ID(); ?> -->
                                     
                <?php endwhile; ?>

                <?php endif; ?>                             
        
            </div> <!-- content -->

        </div> <!-- content_box -->
    </div> <!-- page -->

    <div class="clear"></div>
</div> <!-- content_area -->

<?php get_footer(); ?>