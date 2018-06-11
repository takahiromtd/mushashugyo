<?php
/*
Template Name: search.php
*/
?>
<?php get_header(); ?>
<?php global $wp_query; $total_results = $wp_query->found_posts; $search_query = get_search_query(); ?>
<div class="jumbotron">
	<h2 class="text-center"><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h2>
	<p class="text-center">　　</p>
</div>
<div class="container pt-5 pb-5">
	<section id="search-form">
		<form class="input-group" role="search" method="get" id="searchform" action="/" >
			<input type="text" class="form-control search-placeholder" placeholder="検索ワードを入力" value="" name="s" class="s">
			<span class="input-group-btn">
				<input class="btn btn-secondary btn-sharp" type="submit" value="検索">
			</span>
		</form>
	</section>
</div>
<div class="container pt-5 pb-5">
	<section id="news">
		<div class="row">
			<script type="text/javascript">$(function() { $('.kiji').matchHeight(); });</script>
			<?php if( $total_results >0 ): if(have_posts()): while(have_posts()): the_post(); ?>
				<article class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="kiji border p-5 mt-5 mb-5">
						<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<time><?php the_time("Y/n/j l"); ?></time>
					</div>
				</article>
			<?php endwhile; endif; else: ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<p><?php echo $search_query; ?> に一致する情報は見つかりませんでした。</p>
			</div>
		<?php endif; ?>
	</div>
</section>
</div>
<div id="pagenation" class="container pt-5 pb-5">
	<div class="pagenation mx-auto d-block">
		<?php $big = 9999999999;
		$arg = array( 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), 'current' => max( 1, get_query_var('paged') ), 'total'   => $wp_query->max_num_pages );
		echo paginate_links($arg); ?>
	</div>
</div>
<?php get_footer(); ?>
