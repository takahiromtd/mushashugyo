<?php
/*
Template Name: single-column.php
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2 class="text-center"><?php the_title(); ?></h2>
		<p class="text-center"><?php echo post_custom('wpcf-column-comment'); ?></p>
	</div>
	<div class="container pt-5 pb-5">
		<section id="single-column">
			<div class="row">
				<div class="mb-5 col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
					<article>
						<div class="row">
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
								<img class="img-fluid mx-auto d-block kiji" src="<?php echo post_custom('wpcf-column-profile-img'); ?>">
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<table class="table mx-auto bg-white">
									<tbody>
										<tr>
											<td class="font-weight-bold" width="80">お名前</td>
											<td><?php echo post_custom('wpcf-column-name');?>さん</td>
										</tr>
										<tr>
											<td class="font-weight-bold" width="80">所属</td>
											<td><?php echo post_custom('wpcf-column-uni'); ?></td>
										</tr>
										<tr>
											<td class="font-weight-bold" width="80">参加時期</td>
											<td><?php echo post_custom('wpcf-column-year'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<hr>
						<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; endif; ?>
			<div class="mb-5 d-none d-md-block col-md-4 col-lg-4 col-xl-4">
				<h5>過去の投稿</h5>
				<ul>
					<?php $args = array(
			        'numberposts' => 10,//表示（取得）する記事の数
			        'post_type' => 'column',   //投稿タイプの指定
			        'orderby' => 'rand',
			    );
					$customPosts = get_posts($args);
					if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
					<li>
						<span class="text-dark">●</span><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 400).''; ?></a><br>
						<small class="pl-5"><?php echo get_post_meta($post->ID , 'wpcf-column-uni' ,true); ?></small>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else : //記事が無い場合 ?>
			<p>記事はまだありません。</p>
		<?php endif; wp_reset_postdata(); //クエリのリセット ?>
	</div>
</div>
</div>
</section>
<?php get_template_part('footer-entry'); ?>
<?php get_footer(); ?>