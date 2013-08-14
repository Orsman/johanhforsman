<?php get_header(); ?>

	<section class="about-me">
		<div class="page-wrap">
			<h3>Let me start by telling you how i ended up here...</h3>
			<?php $args = array( 'pagename' => 'about-me');
				$about_query = new WP_query($args);						
				if ( $about_query->have_posts() ) :
					while ( $about_query->have_posts() ) : $about_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div>
								<?php the_content(); ?>
							</div>
						</article> <?php
					 endwhile;
				endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<?php /*
	<section class="blog">
		<div class="page-wrap">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-header">
							<div class="post-meta"><?php echo get_the_date(); ?></div>
							<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

	<section class="portfolio">
		<div class="page-wrap">

		</div>
	</section>

	*/?>
	<section class="travel">
		<div class="page-wrap">
			<h2>Places I've been</h2>
		</div>
	</section>

	<section class="tdbid-wrap">
		<div class="page-wrap">
			<article>
				<h2>To Do Before I Die</h2>
				<?php $args = array( 'p' => '4');
					$portfolio_query = new WP_query($args);						
					if ( $portfolio_query->have_posts() ) :
						while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div>
									<?php the_content(); ?>
								</div>
							</article> <?php
						 endwhile;
					endif; ?>
				<?php wp_reset_postdata(); ?>
			</article>
		</div>
		<div class="tdbid-list">
			<?php $args = array( 'post_type' => 'tdbid', 'showposts' => '-1');
				$book_query = new WP_query($args);						
				if ( $book_query->have_posts() ) :
					while ( $book_query->have_posts() ) : $book_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h4><?php the_title(); ?></h4>
							<div> <?php the_content(); ?> </div>
						</article> <?php
					 endwhile;
				endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>

	<section class="bookshelf clearfix">
		<div class="page-wrap">
			<article>
				<h2>Reading books</h2>
               	<p>For a long time in my life I thought reading was stupid. Sitting all by myself and reading in a book. Seemed like a waste of time. </p>
               	<p>But...</p>
               	<p>A few years ago I stumbled upon a list on how to become a good Personal Trainer. I wanted to be that, so I skimmed through the list of 5 books and picked the one that cought my interest the most. <em>How to Win Friends & Influence People by Dale Carnegie</em>. I was hooked and have been reading reguarly ever since. </p>
               	<p>I try to read as many books as possible. Every time I pick up the habit of reading for one-two hour in the morning I realize how important reading is. It's one of those things that can truly transform your life. It always puts me in a great mood and gets me started for a productive day.</p>
               	<p>Right now I try to read a new book every second week. Click on the link below to see the list of books I've read and what I learned from them in 140 characters. I'll keep adding more as I finnish them.</p>
			</article>
			<h4 class="aligncenter"><a href="<?php echo esc_url(home_url()) ?>/bookshelf">My bookshelf</a></h4>
		</div>

	</section>

<?php get_footer(); ?>