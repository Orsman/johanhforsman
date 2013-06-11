<?php get_header(); ?>
     
<div id="content_area">
    <div class="page">
        <div id="content_box">

            <div id="content" class="hfeed">
            
                <p>I build webpages. Mainly in <a href="http://wordpress.org" target="_blank">Wordpress</a>. When I’m planning and building sites, my main focus is on three things:</p>
                <ul>
                    <li><p><strong>Minimalism.</strong> A lot of webpages today are to flooded with information, banners, commercial, links etc, left and right, for no reason. They have been built with the intention of showing of everything. A company might have many great ideas and products, but if everything is exposed at the same time, it will get the opposite effect. I strongly believe in the good old cliché, <em>“Less is more”</em>.</p></li>
                    <li><p><strong>Adaptability.</strong> Due to that web browsing today is made in various browsers and devices it is very important to make the site adaptable. In nerd-terms this is called Responsive Web Design. (Resize this window and you’ll see what I mean).</p></li>
                    <li><p><strong>Sexy design.</strong> The site has to be attractive. Using the right colors, graphics and fonts can be quite a hassle BUT is super-important for creating a good first impression and reaching out with your message. The site also has to be easy to navigate or as a friend of mine put it <em>“If the person doesn’t know where to go, he leaves.”</em></p></li>
                </ul>

                <p>If you need help with a site, don’t hesitate to contact me and we will sort something out. Just send a mail to <a href="mailto:johan.h.forsman@gmail.com">johan.h.forsman@gmail.com</a>
                <p style="margin-bottom:40px;">Down below are examples of websites I've done.</p>

                <?php the_post(); ?>

                <?php rewind_posts(); ?>         
                 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
                 
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                        <?php $custom_field = get_post_meta(get_the_ID(), 'URL', true) ?>
                        <a href="<?php echo esc_url ($custom_field) ?>">
                        <div class="post-content">
                            <?php if ( has_post_thumbnail() ) the_post_thumbnail('top-feature', array ('class' => 'feature_image')); ?>
                            <h4><?php the_title(); ?></h4>
                        </div>
                        </a>
                           
                    </div><!-- #post-<?php the_ID(); ?> -->
                                     
                <?php endwhile; ?>

                <?php endif; ?>             
            </div> <!-- content -->
        </div> <!-- content_box -->
    </div> <!-- page -->

    <div class="clear"></div>
</div> <!-- content_area -->

<?php get_footer(); ?> 