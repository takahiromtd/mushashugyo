<?php
/*
Template Name: page-about.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold"><?php echo get_the_title(); ?></h2>
	<p class="text-center"><?php echo get_post_meta($post->ID , 'wpcf-page-sub-title' ,true); ?></p>
</div>
<div class="container pt-5 pb-5">
	<div id="about">
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center text-danger font-weight-bold">『自走式エンジン®』を積み、『変態』する<br>超実践型ビジネス研修</h2>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p>社会人として必要な『知識を増やす』『How toを学ぶ』ということも得られますが、より重要なのは『あなたの内側の意識と行動が変わる』というサナギがチョウに変わるような“変態”が起こることです。<br>さらには、プログラムを終えた後も、自分で変態をつづけ、人生や仕事のゴールに向かって全力で向かっていく力、“自走式エンジン®”を手に入れられます。</p>
				</div>
			</div>
		</section>
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center text-danger font-weight-bold">チームで新規ビジネスをカタチにする</h2>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p>参加者達は2～3人のチームに分かれ、最終的に各チームのビジネスプランが損益分岐点を何日で超えるかを公開されている店舗の実売上データを基に発表してもらいます。そして、最終プレゼンでそれらのプランを今後も採用するかどうかを判断します。</p>
					<p>プログラム期間中は、各タームにファシリテーターが付きます。コンサル出身者や現役の経営者がビジネス面でのアドバイスを、企業研修等を行っているコーチング等のスキルをもったプロ研修指導員がチームビルディング・リーダーシップ面でのアドバイスを、それぞれ行います。</p>
					<p>それぞれの分野のプロによる徹底的なフィードバックにより、学生だけでは解決に時間がかかる、あるいは解決が難しい困難な課題を乗りきるためのサポートをします。この「答えを与えないが自分で壁を乗り越えさせる適切なアドバイス」により、一生もののスキルが身に着くのです。</p>
				</div>
			</div>
		</section>
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center text-danger font-weight-bold">国内・海外で武者修行プログラムを開催</h2>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p>これまで当プログラムはベトナムをメイン開催場所として実施してまいりましたが、新型コロナウイルス関連の日本国内・ベトナムでの各種状況を鑑み、以下の３つのプログラムを新しくご用意いたしました。プログラム開催場所問わず『自走式エンジン®』を積み、『変態』することを目的としたプログラムを提供いたします。</p>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<div class="img_wrap">
						<a href="https://mushashugyo.jp/program/online.html"><img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/202008rp01.png" alt=""　width="400px"></a>
					</div>
				</div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<div class="img_wrap">
						<a href="https://mushashugyo.jp/program/innovation.html"><img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/202008rp02.png" alt=""　width="400px"></a>
					</div>
				</div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<div class="img_wrap">
						<a href="https://mushashugyo.jp/program/overseas.html"><img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/202008rp03.png" alt=""　width="400px"></a>
					</div>
				</div>
			</div>
<!-- 			<h2 class="text-center text-danger font-weight-bold">舞台となる旅武者が経営する店舗<small>（一部）</small></h2>
			<div class="row">
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop7.jpg" height="" alt="">
					<p class="font-weight-bold text-center">日本風カフェ</p>

				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop2.jpg" height="" alt="">
					<p class="font-weight-bold text-center">サンドイッチショップ</p>

				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop3.jpg" height="" alt="">
					<p class="font-weight-bold text-center">英語学校</p>

				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop4.jpg" height="" alt="">
					<p class="font-weight-bold text-center">SPA</p>

				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop5.jpg" height="" alt="">
					<p class="font-weight-bold text-center">ヌードルレストラン</p>

				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<img class="img-fluid mx-auto d-block mb-1" src="<?php bloginfo('template_directory'); ?>/img/shop6.jpg" height="" alt="">
					<p class="font-weight-bold text-center">土産物屋</p>

				</div>
			</div> -->
		</section>
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center text-danger font-weight-bold">プログラムスケジュール</h2>
			<table class="table table-bordered mx-auto">
				<tbody>
					<tr>
						<td class="text-center" rowspan="1">日本
						0.5日</td>
						<td class="bg-light">事前研修企画づくり</td>
						<td>
							<ul>
								<li>事前の研修でマーケティングやビジネスの仕組みなどについて学ぶ</li>
								<li>現地で実行するビジネスプランをグループで企画立案する（適宜Web会議）</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="text-center" rowspan="5">現地
						15日</td>
						<td class="bg-light">キックオフ</td>
						<td>
							<ul>
								<li>体感ワークにより、アイスブレイクとチームビルディングを行う</li>
								<li>現地での生活やリスクマネジメントについて学ぶ</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="bg-light">現地リサーチ</td>
						<td>
							<ul>
								<li>競合店や観光客へのリサーチなどをし、現場で事実をつかむことの重要性を体感する</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="bg-light">中間プレゼン</td>
						<td>
							<ul>
								<li>ビジネスオーナーと現地法人トップにプレゼンテーションを行い、承認やフィードバック（FB）をする</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="bg-light">企画の改善と実行
						コーチング/ワークショップ</td>
						<td>
							<ul>
								<li>企画のブラッシュアップ、実行に移すフェーズ。日々、PDCAを重ね、「自ら動き、自ら考える力」をつける</li>
								<li>活動の中で起こる人間関係のコンフリクトや、自分へのブレーキなど、さまざまな個人の課題に対してコーチングやワークショップを適宜実施し、課題を乗り越える</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="bg-light">最終プレゼン</td>
						<td>
							<ul>
								<li>自分たちのビジネスの結果とプロセス、自らの成長についてプレゼン</li>
								<li>ビジネスプランの継続の可否と、No.1チームを決める</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td class="text-center" rowspan="1">日本
						1日</td>
						<td class="bg-light">事後研修</td>
						<td>
							<ul>
								<li>帰国後、学んだことを実践する上での課題や成果を振り返り、現実での継続的な成長を促進する</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</section></div>
	</div>
	<?php get_template_part('footer-navigation'); ?>
	<?php get_template_part('footer-entry'); ?>
	<?php get_footer(); ?>