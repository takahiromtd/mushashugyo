<?php
/*
Template Name: page-hoian.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold"><?php echo get_the_title(); ?></h2>
	<p class="text-center"><?php echo get_post_meta($post->ID , 'wpcf-page-sub-title' ,true); ?></p>
</div>
<div class="container pt-5 pb-5">
<div id="hoian">
<section class="mw960 mx-auto d-block">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h2 class="text-center text-danger font-weight-bold">GDP成長率の予測世界第1位のベトナム</h2>
<img class="img-fluid mx-auto d-block mb-5" src="<?php bloginfo('template_directory'); ?>/img/img-52.jpg" width="640" height="" alt=""/>
<p>東南アジアのインドシナ半島東部に位置する国で、日本との時差は２時間。首都はハノイ、ASEAN加盟国である。通貨はドン（VND）。経済発展が著しく、都市圏では人口が大幅に増加しており人口は9000万人を超える。勤勉で穏和な国民性で、国民の平均年齢が約29歳と非常に若いのも特徴。2016〜2050年におけるGDP成長率の予測では、世界第1位はベトナム※だと言われています。</p>
<small>（※「The Long View How will the global economic order change by 2050?」PwC, 2017年2月）</small>
</div>
</div>
</section>
<section class="mw960 mx-auto d-block">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h2 class="text-center text-danger font-weight-bold">世界遺産都市ホイアンについて</h2>
<p>400年程前、朱印船貿易が盛んだった頃、ホイアンの港は日本との玄関口でした。当時は日本人街もあったほど。日本とのつながりの深い場所で、武者修行®は行われています。現在は18~19世紀頃の古い街並みが残る、世界遺産の観光都市として、欧米人を中心とした多くの観光客が訪れる街になっています。</p>
<p>ホイアンは世界遺産都市であることから、ターゲット顧客は欧米各国の観光客が非常に多く、英語でのビジネスがしやすい地域です。成田空港から近隣のダナン空港に直行便も就航し、日本人観光客も増えています。英語力を心配する参加者もいますが、ベトナム人も決して流暢な英語を話すわけではありません。第2言語同士なので、英語に苦手意識を持っている人でも、対等に話すことができます。また、観光が主要産業であるため、特に治安や衛生面の配慮がされています。オフの日にはビーチリゾートなどで息抜きもでき、研修に集中しやすい環境です。</p>
</div>
</div>
</section>
</div>
</div>
<?php get_template_part('footer-navigation'); ?>
<?php get_template_part('footer-entry'); ?>
<?php get_footer(); ?>