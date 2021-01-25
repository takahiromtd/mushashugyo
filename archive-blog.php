<?php
/*
Template Name: archive-blog.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center">コラム</h2>
</div>
<div class="container pt-5 pb-5">
	<section id="blog">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="mb-5 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<article class="blog-list">
					<a href="<?php the_permalink(); ?>">
						<img class="img-fluid mx-auto d-block kiji" src="<?php echo post_custom('wpcf-blog-images'); ?>">
					</a>
					<div class="pb-3 pr-3 pl-3">
						<a href="<?php the_permalink(); ?>"><h2 class=""><?php echo mb_substr($post->post_title, 0, 120).'…'; ?></h2></a>
						<time >掲載日：<?php the_time("Y. n. j"); ?></time>
					</div>
				</article>
			</div>
		<?php endwhile; endif; ?>

	</section>
</div>
<?php get_footer(); ?>