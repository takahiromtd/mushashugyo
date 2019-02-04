<?php
/*
Template Name: archive-sche.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron d-none d-md-block">
	<h2 class="text-center font-weight-bold">説明会会場・日程</h2>
	<p class="text-center">ご参加希望の会場をご選択し、日程・会場をご確認の上ご予約ください</p>
</div>
<div class="container pt-0 pb-5">
	<section id="sche">
		<p class="text-center d-md-none d-xs-block d-md-none font-weight-bold">ご参加希望の会場をご選択し、<br>下部の日程をご確認の上ご予約ください</p>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<table class="table nav nav-tabs">
					<tbody>
						<tr>
							<th class="bg-light">東京都</th>
							<td><a class="" data-toggle="tab" href="#home">早稲田</a></td>
							<td><a class="" data-toggle="tab" href="#yushima">上野</a></td>
							<td><a class="" data-toggle="tab" href="#shinjuku">新宿</a></td>
							<td><a class="" data-toggle="tab" href="#mita">三田</a></td>
							<td><a class="" data-toggle="tab" href="#wtokyo">八王子</a></td>
						</tr>
						<tr>
							<th class="bg-light"></th>
							<td><a class="" data-toggle="tab" href="#kokubunji">国分寺</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr>
							<th class="bg-light">関東</th>
							<td><a class="" data-toggle="tab" href="#hiyoshi">日吉</a></td>
							<td><a class="" data-toggle="tab" href="#sfc">藤沢</a></td>
							<td><a class="" data-toggle="tab" href="#yokohama">横浜</a></td>
							<td><a class="" data-toggle="tab" href="#tsukuba">つくば</a></td>
							<td><a class="" data-toggle="tab" href="#ibaraki">茨城</a></td>

						</tr>
						<tr>
							<th class="bg-light"></th>
							<td><a class="" data-toggle="tab" href="#saitama">埼玉</a></td>
							<td><a class="" data-toggle="tab" href="#chiba">千葉</a></td>
							<td><a class="" data-toggle="tab" href="#utsunomiya">栃木</a></td>
							<td><a class="" data-toggle="tab" href="#gunma">群馬</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr>
							<th class="bg-light">中部</th>
							<td><a class="" data-toggle="tab" href="#nagoya">愛知</a></td>
							<td><a class="" data-toggle="tab" href="#kanazawa">金沢</a></td>
							<!-- <td><a class="" data-toggle="tab" href="#toyama">富山</a></td> -->
							<td><a class="" data-toggle="tab" href="#fukui">福井</a></td>
							<td><a class="" data-toggle="tab" href="#yamanashi">山梨</a></td>
							<td><a class="" data-toggle="tab" href="#shizuoka">静岡</a></td>
						</tr>
						<tr>
							<th class="bg-light">近畿</th>
							<td><a class="" data-toggle="tab" href="#kyoto">京都</a></td>
							<td><a class="" data-toggle="tab" href="#osaka">梅田</a></td>
							<td><a class="" data-toggle="tab" href="#tennoji">天王寺</a></td>
							<td><a class="" data-toggle="tab" href="#otsu">滋賀</a></td>
							<td><a class="" data-toggle="tab" href="#kobe">神戸</a></td>

						</tr>
						<tr class="table-border-bottom-l">
							<th class="bg-light">中国</th>
							<td><a class="" data-toggle="tab" href="#hiroshima">広島</a></td>
							<td><a class="" data-toggle="tab" href="#okayama">岡山</a></td>
							<!-- <td><a class="" data-toggle="tab" href="#tottori">鳥取</a></td> -->
							<td><a class="" data-toggle="tab" href="#matsue">島根</a></td>
							<td><a class="" data-toggle="tab" href="#yamaguchi">山口</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<table class="table nav nav-tabs">
					<tbody>
						<tr>
							<th class="bg-light">北海道</th>
							<td><a class="" data-toggle="tab" href="#sapporo">札幌</a></td>
							<td><a class="" data-toggle="tab" href="#asahikawa">旭川</a></td>
							<td><a class="" data-toggle="tab" href="#hakodate">函館</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr>
							<th class="bg-light">東北</th>
							<td><a class="" data-toggle="tab" href="#aomori">青森</a></td>
							<td><a class="" data-toggle="tab" href="#morioka">岩手</a></td>
							<td><a class="" data-toggle="tab" href="#akita">秋田</a></td>
							<td><a class="" data-toggle="tab" href="#yamagata">山形</a></td>
							<td><a class="" data-toggle="tab" href="#sendai">仙台</a></td>
						</tr>
						<tr>
							<th class="bg-light"></th>
							<td><a class="" data-toggle="tab" href="#fukushima">福島</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr>
							<th class="bg-light">四国</th>
							<td><a class="" data-toggle="tab" href="#matsuyama">愛媛</a></td>
							<td><a class="" data-toggle="tab" href="#kochi">高知</a></td>
							<td><a class="" data-toggle="tab" href="#tokushima">徳島</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr>
							<th class="bg-light">九州</th>
							<td><a class="" data-toggle="tab" href="#fukuoka">福岡</a></td>
							<td><a class="" data-toggle="tab" href="#apu">大分</a></td>
							<td><a class="" data-toggle="tab" href="#miyazaki">宮崎</a></td>
							<td><a class="" data-toggle="tab" href="#nagasaki">長崎</a></td>
							<td><a class="" data-toggle="tab" href="#kagoshima">鹿児島</a></td>
						</tr>
						<tr>
							<th class="bg-light"></th>
							<td><a class="" data-toggle="tab" href="#kumamoto">熊本</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<!-- <td><a class="" data-toggle="tab" href="#saga">佐賀</a></td> -->
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<!-- <td><a class="" data-toggle="tab" href="#kobetsu">個別</a></td> -->
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
						<tr class="table-border-bottom-r">
							<th class="bg-light">その他</th>
							<td><a class="" data-toggle="tab" href="#kobetsu">ｵﾝﾗｲﾝ</a></td>
							<td><a class="" data-toggle="tab" href="#taiwan">台湾</a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
							<td><a class="" data-toggle="tab" href="#"></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row pt-4">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 tab-content mb-5">
				<div id="home" class="tab-pane active">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="yushima" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo $page->post_title; ?>会場（本社）</p>
					</div>
					<div class="border p-5 container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="mita" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('mita',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('mita',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('mita',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="wtokyo" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kokubunji" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="hiyoshi" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="yokohama" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="tsukuba" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('tsukuba',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('tsukuba',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('tsukuba',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="ibaraki" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="sfc" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('sfc',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('sfc',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('sfc',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="saitama" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="chiba" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="utsunomiya" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="gunma" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('gunma',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('gunma',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('gunma',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="nagoya" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kanazawa" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="toyama" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="fukui" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="yamanashi" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="niigata" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('niigata',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('niigata',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('niigata',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="shizuoka" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kyoto" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="osaka" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="tennoji" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('tennoji',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('tennoji',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('tennoji',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="otsu" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kobe" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="sapporo" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="asahikawa" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="hakodate" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('hakodate',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('hakodate',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('hakodate',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="aomori" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="morioka" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="akita" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('akita',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('akita',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('akita',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="yamagata" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="sendai" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="fukushima" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('fukushima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('fukushima',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('fukushima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="hiroshima" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="okayama" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('okayama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('okayama',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('okayama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="tottori" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="matsue" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="yamaguchi" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="matsuyama" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="tokushima" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kochi" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kochi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kochi',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kochi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="fukuoka" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="apu" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('apu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('apu',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('apu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="miyazaki" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('miyazaki',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('miyazaki',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('miyazaki',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="nagasaki" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('nagasaki',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('nagasaki',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('nagasaki',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kagoshima" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kobetsu" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kobetsu" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kobetsu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="kumamoto" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('kumamoto',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('kumamoto',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('kumamoto',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="saga" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('saga',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('saga',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('saga',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="taiwan" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('taiwan',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('taiwan',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('taiwan',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="tab-pane fade">
					<div class="bg-dark">
						<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white"><?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					</div>
					<div class="border p-5 tab-pane container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
								<h4>説明会日程</h4>
								<?php $page = get_page_by_path('',OBJECT,'sche'); echo $page->post_content; ?>
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
								<h4>会場詳細</h4>
								<ul>
									<li><?php $page = get_page_by_path('',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?></li>
								</ul>
								<a href="/entry" class="mt-3 btn btn-danger btn-lg btn-block btn-round btn-shadow text-white btn-entry d-lg-none d-xs-block">説明会予約フォーム</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="d-none d-lg-block col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<div class="bg-dark">
					<p class="mt-0 mb-0 pt-4 pb-4 text-center text-white">説明会のご予約</p>
				</div>
				<div class="border bg-white p-5">
					<h4 class="d-none d-md-block text-center">過去の参加者から直接プログラム内容や体験談が聞ける説明会に参加しませんか？</h4>
					<ul class="">
						<li> ● 累計2,518名 / 全国各地の大学生が参加</li>
						<li> ● 英語力は完全不問</li>
					</ul>
					<a href="/entry" class="btn btn-danger btn-lg btn-block btn-round text-white btn-entry btn-shadow">説明会予約フォーム</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
</div>
<?php get_footer(); ?>