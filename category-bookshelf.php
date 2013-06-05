<?php get_header(); ?>
     
<div id="content_area">
    <div class="page">
        <div id="content_box">
            
            <?php get_sidebar(); ?>
            <div id="content" class="hfeed">

                <p>For a long time in my life I thought reading was stupid. Sitting all by myself and reading in a book. Seemed like a waste of time. </p>
                <p>But a few years ago I stumbled upon a list on how to become a good Personal Trainer. I wanted to be that, so I skimmed through the list of 5 books and picked the one that cought my interest the most. <em>How to Win Friends & Influence People by Dale Carnegie</em>. I was hooked and have been reading reguarly ever since. </p>
                <p>I try to read as much books as possible. Every time I pick up the habit of reading for one-two hour in the morning I realize how important reading is. It's one of those things that can truly transform your life. It always puts me in a great mood and gets me started for a productive day.</p>
                <p>Right now I try to read a new book every second week. Down below is a list of the books I've read and what I learned from them in 140 characters. I'll keep adding more as I finnish them.</p>

                <?php query_posts('category_name=bookshelf&showposts=-1&order=DESC'); ?>        
                 
                <?php if ( have_posts() ) :
                	while ( have_posts() ) : the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                        <?php if ( has_post_thumbnail() ) the_post_thumbnail('book', array ('class' => 'feature_image')); ?>
                        <div class="post-content">
                            <h4><?php the_title(); ?></h4>                          
                            <?php the_content(); ?>
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