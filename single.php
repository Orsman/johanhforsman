
<?php get_header(); ?>

<section class="page-content">
    <div class="page-wrap">
        <?php the_post(); ?>
         
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
            <div class="post-header">
                <div class="post-meta"><?php the_date(); ?></div>
                <h2 class="post-title"><?php the_title(); ?></h2>
            </div>
                             
            <div class="post-content">   
                <?php if ( has_post_thumbnail() ) the_post_thumbnail('top-feature', array ('class' => 'feature_image')); ?>
                <?php the_content(); ?>
            </div> 
        </div>
    </div>
</section>

<?php get_footer(); ?>
