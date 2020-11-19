<?php
/*
Template Name: single-blog.php
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2 class="text-center"><?php the_title(); ?></h2>
		<p class="text-center">　</p>
	</div>
	<section id="single-kiji" class="mw980 mx-auto d-block">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="mb-5 col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
					<article>
						<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>