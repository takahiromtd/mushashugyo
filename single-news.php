<?php
/*
Template Name: single.php
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<div class="mw960 mx-auto"><h2 class="text-center"><?php the_title(); ?></h2></div>
		<p class="text-center"><?php the_time("Y年n月j日 l"); ?></p>
	</div>
	<section id="single-news">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="mb-5 col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<article>
						<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; endif; ?>
			<div class="mb-5 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<div class="bg-dark">
					<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white">弊社へのお問い合わせ</p>
				</div>
				<div class="border bg-white p-5">
					<h4 class="d-none d-md-block text-center">海外ビジネス武者修行プログラム、株式会社旅武者へのお問い合わせは以下のフォームより承っております。</h4>
					<a href="/contact" class="btn btn-danger btn-lg btn-block btn-round text-white btn-entry btn-shadow">お問い合わせフォーム</a>
				</div>
				<h5 class="pt-5">ニュースリリース</h5>
				<ul>
					<?php $args = array(
			        'numberposts' => 10,//表示（取得）する記事の数
			        'post_type' => 'news',   //投稿タイプの指定
			        // 'orderby' => 'rand',
			    );
					$customPosts = get_posts($args);
					if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 400).''; ?></a><br>
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
<section class="bg-light pt-0 pb-0 d-none d-md-block">
	<div class="navigation-bottom">
		<div class="mw960 mx-auto d-block pt-5 pr-3 pb-0 pl-3">
			<p class="text-center">海外ビジネス武者修行プログラム、株式会社旅武者へのお問い合わせは以下のフォームより承っております。</p>
		</div>
		<div class="mw480 mx-auto d-block p-5">
			<a href="/contact" class="btn btn-danger btn-lg btn-block btn-round text-white btn-entry btn-shadow">お問い合わせフォーム</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>