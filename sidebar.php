<div id="sidebar">
	<div class="menu">
		<ul class="categories">
			<?php 
			$args = array (
					'orderby' => 'slug',
					'hide_empty' => 1,
				);
			$categories = get_categories($args); 
			foreach ($categories as $category) {
				echo '<li class="' . $category->slug.'"'. '>'. '<a href="' . get_category_link($category->term_id). '" ' . '>' . $category->name .'</a></li>';
			}
			?>
		</ul>
	</div>

	<div id="social">
		<li><a href="http://www.instagram.com/johanhforsman" class="social-instagram"></a></li>
		<li><a href="http://twitter.com/johan_forsman" class="social-twitter"></a></li>
		<li><a href="http://www.facebook.com/johan.forsman.18" class="social-fb"></a></li>
		<li><a href="http://www.youtube.com" class="social-rss"></a></li>
	</div>
</div>