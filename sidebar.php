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
</div>