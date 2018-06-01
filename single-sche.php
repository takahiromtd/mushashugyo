<?php
/*
Template Name: single-sche.php
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2 class="text-center"><?php the_title(); ?></h2>
		<p class="text-center">2週間のビジネス経験で『変態』し、『自走式エンジン』を搭載する!</p>
	</div>
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="mb-5 col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<article>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
							<h4>説明会日程</h4>
							<?php the_content(); ?>
						</div>
						<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
							<h4>会場詳細</h4>
							<p><?php echo get_post_meta($post->ID , 'wpcf-place-info' ,true); ?></p>
							<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-sharp text-white btn-entry d-lg-none d-xs-block">説明会に参加する</a>
						</div>
					</div>
				</article>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>
