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
	<section id="news">
		<div class="mb-5 col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="news-list">
					<time><?php the_time("Y/n/j l"); ?></time>
					<a href="<?php the_permalink(); ?>"><h3 class=""><?php echo mb_substr($post->post_title, 0, 70).'…'; ?></h3></a>
				</article>
			<?php endwhile; endif; ?>
		</div>
		<div class="mb-5 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
		</div>
	</section>
</div>
<?php get_footer(); ?>