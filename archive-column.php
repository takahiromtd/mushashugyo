<?php
/*
Template Name: archive-column.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold">参加者の体験談</h2>
	<p class="text-center">武者修行®に参加した方の生の声を御覧ください</p>
</div>
<div id="archive-column" class="container pt-5 pb-5">
	<!-- <h3 class="text-center">カテゴリ的な導線？最初に読んでもらいたい体験談</h3> -->
	<script>$(function(){$('#mix-container').mixItUp();});</script>
	<div class="controls mt-5 mb-5">
		<a class="btn btn-light btn-round filter active column-filter" data-filter="all">全て</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".oversea">海外</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".local">地方</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".recruiting">就活</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".friend">仲間</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".science">理系</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".business">ビジネス</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".hentai">自己変革</a>
		<a class="btn btn-light btn-round filter column-filter" data-filter=".freshman">1年生</a>
	</div>
	<div id="mix-container" class="row">
		<script type="text/javascript">$(function() { $('.kiji').matchHeight(); });</script>
		<script type="text/javascript">$(function() { $('.card-title').matchHeight(); });</script>
		<script type="text/javascript">$(function() { $('.card-text').matchHeight(); });</script>
		<?php $paged = get_query_var('paged');
		query_posts($query_string . '&posts_per_page=100&paged=' . $paged);
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="mb-5 col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mix <?php echo get_post_meta($post->ID , 'wpcf-column-category' ,true) ?>" data-order="<?php echo get_the_ID(); ?>">
			<div class="kiji border">
				<a href="<?php the_permalink(); ?>">
					<img class="card-img-top" src="<?php echo catch_that_image(); ?>" alt="Card image cap">
				</a>
				<div class="card-body">
					<h5 class="card-title font-weight-bold"><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 40); ?></a></h5>
					<p class="card-text"><?php echo mb_substr(get_post_meta($post->ID , 'wpcf-column-comment' ,true), 0, 40).''; ?></p>
					<p class="card-text text-right"><?php echo get_post_meta($post->ID , 'wpcf-column-uni' ,true); ?></p>
					<!-- <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-sharp btn-lg btn-block card-btn">つづきを読む</a> -->
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<div class="gap"></div>
	<div class="gap"></div>
</div>
</div>
<?php get_footer(); ?>
