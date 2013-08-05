<?php get_header(); ?>
    
    <div class="page-wrap">
            
        <section class="blog">
            <div id="content" class="hfeed">

                <?php the_post(); ?>
     
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                        <div class="post-header">
                            <div class="post-meta"><?php the_date(); ?></div>
                            <h1 class="post-title"><?php the_title(); ?></h1>
                        </div>
                         
                        <div class="post-content">   
                            <?php if ( has_post_thumbnail() ) the_post_thumbnail('top-feature', array ('class' => 'feature_image')); ?>
                            <?php the_content(); ?>
                        </div> 

                    </div>
     
            </div> <!-- #content -->
        </section>
    </div> <!-- .page-wrap -->

<?php get_footer(); ?>

