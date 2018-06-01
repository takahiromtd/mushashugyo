<?php
/*
Template Name: single-qas.php
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2 class="text-center"><?php the_title(); ?></h2>
		<p class="text-center">　</p>
	</div>
	<div class="container pt-5 pb-5">
		<section id="qas" class="mw980 mx-auto d-block">
			<div class="row">
				<div class="mb-5 col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<article>
						<h3>質問への回答</h3>
						<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; endif; ?>
			<div class="mb-5 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<section id="search-form" class="mt-5 mb-5">
					<form class="input-group" role="search" method="get" id="searchform" action="/" >
						<input type="text" class="form-control search-placeholder" placeholder="検索ワードを入力" value="" name="s" class="s">
						<span class="input-group-btn">
							<input class="btn btn-secondary btn-sharp" type="submit" value="検索">
						</span>
					</form>
				</section>
				<h5>よくある質問</h5>
				<ul>
					<?php $args = array(
			        'numberposts' => 30,//表示（取得）する記事の数
			        'post_type' => 'qas',   //投稿タイプの指定
			        'order'   => 'asc',
			    );
					$customPosts = get_posts($args);
					if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
					<li>
						<span class="text-dark">●&nbsp;</span><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 400).''; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else : //記事が無い場合 ?><p>記事はまだありません。</p><?php endif; wp_reset_postdata(); //クエリのリセット ?>
	</div>
</section>
</div>
<?php get_template_part('footer-entry'); ?>
<section class="bg-light pt-0 pb-0">
	<div class="w-50 navigation-left">
		<a href="">
			<div class="pt-5 pb-5 mx-auto d-block">
				<p class="text-center"><a href="/contact" title="お問い合わせ">お問い合わせ</a></p>
			</div>
		</a>
	</div>
	<div class="w-50 navigation-right">
		<a href="">
			<div class="pt-5 pb-5 mx-auto d-block">
				<p class="text-center"><a href="/company" title="運営会社情報">運営会社情報</a></p>
			</div>
		</a>
	</div>
</section>
<?php get_footer(); ?>