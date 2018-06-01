<?php
/*
Template Name: page.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold"><?php echo get_the_title(); ?></h2>
	<p class="text-center"><?php echo get_post_meta($post->ID , 'wpcf-page-sub-title' ,true); ?></p>
</div>
<div class="container pt-5 pb-5">
	<?php if (have_posts()): while (have_posts()) : the_post();?>
		<?php the_content(); ?>
	<?php endwhile; else: echo '記事はありません。'; endif; ?>
</div>
<?php get_template_part('footer-navigation'); ?>
<?php get_template_part('footer-entry'); ?>
<?php get_footer(); ?>