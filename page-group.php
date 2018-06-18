<?php
/*
Template Name: page-group.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold"><?php echo get_the_title(); ?></h2>
	<p class="text-center"><?php echo get_post_meta($post->ID , 'wpcf-page-sub-title' ,true); ?></p>
</div>
<div class="container pt-5 pb-5">
	<h3 class="font-weight-bold">教育機関関係者の方へ</h3>
	<p>武者修行プログラムでは、教育機関に向けてアクティブラーニング導入支援、グローバル人材支援をしております。2018年には、立教大学のグローバル・リーダーシップ・プログラムの単位付与対象に指定されました。代表の山口による講演会依頼も受け付けております。詳しくはお問い合わせください。</p>
	<div class="bg-light p-3">
		<p>授業・講演実績</p>
		<p>講演テーマ：グローバル人財、新興国ビジネス、ベンチャー起業、マーケティング など</p>
		<p>実績:茨城大学、大阪大学、島根大学、都留文科大学、東京大学、同志社大学、兵庫県立大学、
		福島大学、法政大学、横浜市立大学、立命館大学、龍谷大学、早稲田大学 など</p>
	</div>
	<h3 class="font-weight-bold">企業関係者の方へ</h3>
	<p>弊社代表 山口による若手社会人向け研修、武者修行プログラムファシリテーターの受け入れ、学生インターン・新卒紹介などをしております。</p>
<?php echo do_shortcode('[ninja_forms id=14]');?>
</div>
<?php get_template_part('footer-navigation'); ?>
<?php get_template_part('footer-entry'); ?>
<?php get_footer(); ?>
