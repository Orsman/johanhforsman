
<div id="sidebar">
	<?php if( ! dynamic_sidebar ('main-sidebar') ) :

		 /* In case there isn't an active sidebar, down below is some hardcoded standard functionality */ ?>
		<aside id="search">
				
		</aside>

		<aside id="archives">
				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'johanforsman' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>				
		</aside>
	<?php endif; ?>
</div>
