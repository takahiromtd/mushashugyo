<section class="bg-light pt-0 pb-0">
	<div class="w-50 navigation-left">
		<a class="navigation-btn mx-auto d-block text-center" href="<?php echo get_post_meta($post->ID , 'wpcf-navigation-left-url' ,true); ?>" title="<?php echo get_post_meta($post->ID , 'wpcf-navigation-left-title' ,true); ?>"><?php echo get_post_meta($post->ID , 'wpcf-navigation-left-title' ,true); ?></a>
	</div>
	<div class="w-50 navigation-right">
		<a class="navigation-btn mx-auto d-block text-center" href="<?php echo get_post_meta($post->ID , 'wpcf-navigation-right-url' ,true); ?>" title="<?php echo get_post_meta($post->ID , 'wpcf-navigation-right-title' ,true); ?>"><?php echo get_post_meta($post->ID , 'wpcf-navigation-right-title' ,true); ?></a>
	</div>
</section>