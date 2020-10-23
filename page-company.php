<?php
/*
Template Name: page-company.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold"><?php echo get_the_title(); ?></h2>
	<p class="text-center"><?php echo get_post_meta($post->ID , 'wpcf-page-sub-title' ,true); ?></p>
</div>
<div class="container pt-5 pb-5">
	<div id="company">
		<section>
			<h2 class="text-center">企業概要</h2>
			<table class="table table-bordered mx-auto">
				<tbody>
					<tr>
						<td>社名</td>
						<td>株式会社旅武者</td>
					</tr>
					<tr>
						<td>住所</td>
						<td>● 湯島オフィス<br>
						〒113-0034 東京都文京区湯島2-33-11岡田ビル201号室<br>
					● 早稲田オフィス
							〒169-0051 東京都新宿区西早稲田1-22-3<br>
							早稲田大学インキュベーションセンター内</td>
					</tr>
					<tr>
						<td>代表取締役</td>
						<td>山口和也<br>遠藤まさみ</td>
					</tr>
					<tr>
						<td>設立</td>
						<td>2014年6月3日</td>
					</tr>
					<tr>
						<td>資本金</td>
						<td>32,750,000円（資本準備金含む）</td>
					</tr>
					<tr>
						<td>従業員数</td>
						<td>85名（ベトナム法人含む）</td>
					</tr>
					<tr>
						<td>事業概要</td>
						<td>海外インターンシップの運営
						大学生 / 社会人向け研修の企画・実施</td>
					</tr>
					<tr>
						<td>取引先銀行</td>
						<td>みずほ銀行<br>三井住友銀行<br>城南信用金庫<br>楽天銀行</td>
					</tr>
					<tr>
						<td>顧問</td>
						<td>Seven Rich 法律事務所<br>
						G.S.ブレインズ税理士法人</td>
					</tr>
					<tr>
						<td>ベトナム会社情報</td>
						<td>Tabi Musha Viet Nam Company Limited<br>
							Số 644 Hai Bà Trưng, Phường Cẩm Phô, Thành phố Hội An, Tỉnh Quảng Nam<br>
							100 Le Duy Dinh, Chinh Gian Ward, Thanh Khe District, Da Nang City<br>
							<a href="https://www.tabimushavn.com/" title="https://www.tabimushavn.com/">https://www.tabimushavn.com/</a>
						</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center">商標について</h2>
			<p class="font-weight-bold text-center">旅武者および海外ビジネス武者修行プログラム®では、「武者修行®」、「自走式エンジン®」を商標登録をしております。</p>

			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
					<h3 class="font-weight-bold text-center text-danger">海外ビジネス武者修行プログラム®</h3>
					<p class="text-center">商標登録番号 第5817791号</p>

				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<h3 class="font-weight-bold text-center text-danger">武者修行®</h3>
					<p class="text-center">商標登録番号 第5818437号</p>

				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<h3 class="font-weight-bold text-center text-danger">自走式エンジン®</h3>
					<p class="text-center">商標登録番号 第5818401号</p>

				</div>
			</div>
		</section>
		<section class="mw960 mx-auto d-block">
			<h2 class="text-center">代表挨拶</h2>
			<img class="mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/img/comp-kazuya.jpg" width="300px">
			<p class="font-weight-bold text-center">株式会社旅武者<br>代表取締役　山口和也<small>（やまぐちかずや）</small></p>

			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h3 class="font-weight-bold text-danger">グローバル環境で存在感を発揮してほしい</h3>
					<p class="mb-5">起業以前にアジア太平洋地域で私が働いているとき、アジアで日本の地位が急速に落ちてきていると感じたことが、武者修行®を始めたきっかけです。日本人はグローバル環境において最弱なのではないかと感じたのです。日本人は「○○人」という枠でくくってしまいがちで、「多様性の理解と活用する力が弱い」ことが日本の弱さの要因だと捉えています。日本人は、異なる価値観の中からよりよい第三の案をチームとして創り出すという点において、バリューを発揮できていない状況が多いように思うのです。</p>

					<h3 class="font-weight-bold text-danger">成長にフォーカスした、実践経験を積めるインターンがない…</h3>
					<p class="mb-5">現在のインターンシップの多くは、企業の「採用活動のための学生との接点づくり」になっている風潮があり、企業側はいい面を見せることにフォーカスし、ビジネスのリアルを伝えたり、学生の成長を重視した就業機会にはなっていません。また、ビジネス案を競い合う「ビジネスコンテスト」においても、企画まではしても、実行まで経験できることはほとんどありません。これで本当に起業や仕事を理解し、成長することができるのでしょうか？</p>

					<h3 class="font-weight-bold text-danger">ビジネスを分かって就活しないと、後悔する</h3>
					<p class="mb-5">プロフィールには書いていませんが、私は新卒でブラック企業に入ってしまった経験があります。サービス残業が多いというだけでなく、暴力が横行するような企業でした。その会社は千人以上の従業員がいて、「これから新規事業を始めるからその部署に配属する」「上場を目指していて、株も従業員に買わせている」と入社前に謳っていて、やる気に満ちた当時の私にとっては「自分の実力を試したい」とやる気を喚起され入社を決めました。しかし実情は、金を稼げればなんでもあり、挨拶は全部「押忍！」、営業所長が売れない営業マンを丸めた新聞紙の棒で日々叩くような会社。そのとき、つくづく思いました。「自分って本当にビジネスのことを何もわかっていなかったなあ」と。</p>
					<p class="mb-5">新卒社員は３年で３割が辞めてしまうとよく言われます。それは学生が「営業はしんどそう」「企画やマーケティングはかっこいい」など、ビジネス・仕事を何となくのイメージでしか知らないから。実際は、それぞれの業種・職種にそれぞれの本質的要素と喜びがあります。だから「自分で企画を考えて、実際につくってみて、改良を重ねて、お客さんを喜ばせる」というビジネスのサイクルを体験し、「ビジネスとは何か」という本質を掴むための場づくりをしたいと考えました。</p>

					<h3 class="font-weight-bold text-danger">ゴールは自走式エンジン®を積むこと</h3>
					<p class="mb-5">武者修行®は前述のようなビジネス体験の機会提供、単なる就活対策ではありません。「自分が定めた将来的なゴールに向けて、何が必要かを考え、自ら達成すること」ができる力『自走式エンジン』を積むこと。これが武者修行®でのゴールにしていることです。</p>
					<p class="mb-5">学生にとって、チームで新規事業にチャレンジすることは、とても難しいことです。だからこそ、今までの自分の殻を破り、「自分って変われるんだ！難しいことも何とかできるんだ！」という経験を持ち帰ってもらうことができます。そして、将来の自分の可能性を広げていってほしいと願っています。</p>

				</div>
			</div>
		</section></div>
	</div>
	<?php get_template_part('footer-navigation'); ?>
	<?php get_template_part('footer-entry'); ?>
	<?php get_footer(); ?>