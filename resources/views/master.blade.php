<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="twitter:site" content="@metroui">
	<meta name="twitter:creator" content="@pimenov_sergey">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Metro 4 Components Library">
	<meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
	<meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

	<meta property="og:url" content="https://metroui.org.ua/v4/index.html">
	<meta property="og:title" content="Metro 4 Components Library">
	<meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
	<meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="968">
	<meta property="og:image:height" content="504">

	<meta name="author" content="Sergey Pimenov">
	<meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
	<meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

	<link rel="shortcut icon" href="{{asset('metromini/docs/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('metromini/docs/favicon.ico')}}" type="image/x-icon">

	<link href="{{asset('metromini/docs/metro/css/metro-all.css?ver=@@b-version')}}" rel="stylesheet">
	<link id="color-scheme" href="{{asset('metromini/docs/metro/css/schemes/red-alert.css')}}" rel="stylesheet">
	<link href="{{asset('metromini/docs/metro/css/third-party/datatables.css?ver=@@b-version')}}" rel="stylesheet">

	<title>Schemes demo - Metro 4 :: Popular HTML, CSS and JS library</title>

	<style>
	h2 {
		margin-top: 20px;
	}
	.app-bar-menu li {
		list-style: none!important;
	}
	.abc {
		margin-top: 7px;
	}
</style>
</head>
<body>
	<div class="example" style="height: 800px">
		<div data-role="navview" data-compact="md" data-expanded="lg" data-toggle="#pane-toggle">
			<nav class="navview-pane">
				<button class="pull-button">
					<span class="mif-menu fg-blue"></span>
				</button>
				<?php
				$url = basename($_SERVER['REQUEST_URI']);
				$links = str_replace("/".$url, '', $_SERVER['REQUEST_URI']);
				$link = str_replace("/", '', $links);
				?>

				<ul class="navview-menu">
					<li>
						@if($link == "master")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Master</b></span>
						</a>
						@elseif($link == "inventoryproduk" || $link == "inventoryconfig")
						<a href="{{url('inventory')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Inventory</b></span>
						</a>
						@elseif($link == "pos")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Point Of Sale</b></span>
						</a>
						@elseif($link == "laporan")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Laporan</b></span>
						</a>
						@endif
					</li>
					<li class="item-separator"></li>

					<li class="item-header"></li>
					@if($link == "master")
					<li>
						<a href="{{route('toko.all')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Informasi Toko</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('user.all')}}">
							<span class="icon"><span class="mif-users"></span></span>
							<span class="caption">Daftar User</span>
						</a>
					</li>
					@elseif($link == "inventoryproduk")
					<li>
						<a href="{{route('produk.all')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Produk Tersedia</span>
						</a>
					</li>
					<li>
						<a href="{{route('produk.habis')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Produk Habis</span>
						</a>
					</li>
					@elseif($link == "inventoryconfig")
					<li>
						<a href="{{route('kategori.all')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Kateogori</span>
						</a>
					</li>
					<li>
						<a href="{{route('unit.all')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Unit</span>
						</a>
					</li>
					<li>
						<a href="{{route('bahan.all')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Bahan</span>
						</a>
					</li>
					@elseif($link == "pos")
					<li>
						<a href="{{route('pos.paymentsementara-index')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Pos Sementara</span>
						</a>
					</li>
					<li>
						<a href="{{route('pos.index')}}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">POS</span>
						</a>
					</li>
					@elseif($link == "laporan")
					<li>
						<a href="{{route('barangmasuk.all')}}">
							<span class="icon"><span class="mif-backward"></span></span>
							<span class="caption">Barang Masuk</span>
						</a>
					</li>
					<li>
						<a href="{{route('barangkeluar.all')}}">
							<span class="icon"><span class="mif-forward"></span></span>
							<span class="caption">Barang Keluar</span>
						</a>
					</li>
					@endif
				</ul>
			</nav>

			<div class="navview-content pl-10-md pr-10-md">
				@yield('content')
			</div>
		</div>
	</div>

	<script src="{{asset('metromini/docs/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('metromini/docs/metro/js/metro.js')}}"></script>
	<script>
		$("input[name=r3]").on("click", function(){
			var checked = $(this).is(":checked");
			if (checked) {
				$("#listview-1").data("listview").view(this.value);
			}
		});
	</script>
	<!-- ads-script -->
</body>
</html>