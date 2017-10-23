<?php
require( dirname( __FILE__ ) . '/functions/_init.php' );
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie lte-ie9 lte-ie8 ie8" lang="fr"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie lte-ie9 ie9" lang="fr"> <![endif]-->
<!--[if !(IE)]><! -->
<html class="fonts-loading no-js" lang="fr"><!--<![endif]-->
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<title>BeAPI FrontEnd Framework | The WordPress BFF</title>
		
		<!-- Web App favicons from /assets/img/favicons/index_hd.html -->
		<link rel="manifest" href="../assets/img/favicons/manifest.json">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#ffffff">
		<meta name="application-name" content="BFF">
		<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon-180x180.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-title" content="BFF">
		<link rel="icon" type="image/png" sizes="228x228" href="../assets/img/favicons/coast-228x228.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="../assets/img/favicons/browserconfig.xml">
		<link rel="yandex-tableau-widget" href="../assets/img/favicons/yandex-browser-manifest.json">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-320x460.png">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-640x920.png">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-640x1096.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-750x1294.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="../assets/img/favicons/apple-touch-startup-image-1182x2208.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="../assets/img/favicons/apple-touch-startup-image-1242x2148.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-748x1024.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-768x1004.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-1496x2048.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-1536x2008.png">
		
		<!-- Standard favicons from /assets/img/favicons/index_sd.html -->
		<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
		<link rel="shortcut icon" href="../assets/img/favicons/favicon.ico">
		
		<!--[if lte IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchmedia-polyfill.js"></script>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchMedia.addListener.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/html5shiv.min.js"></script>
		<![endif]-->
		<!--[if lte IE 8]>
			<script type="text/javascript" src="../assets/js/vendor_ie/selectivizr.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/style.css">
		<!-- Modernizr Custom (JS + SVG detection) -->
		<script type="text/javascript" src="../assets/js/vendor_async/modernizr.custom.min.js"></script>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	</head>
	<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $class; ?>">
		<div id="main">
			<header id="header" class="header lazyload" role="banner" data-bgset="../assets/img/bg-sample/bg_img-mobile-02.jpg [(max-width: 1023px)] | ../assets/img/bg-sample/bg_img-desktop-02.jpg" >
				<div class="container">
					<div class="header__logo">
						<a href="01-home.php" class="header__logo-link">
							<?php echo get_the_post_thumbnail( 0, 'logo-beapi', array( 'data-location' => 'header-logo', 'class' => 'header__img', 'alt' => 'Logo' ) ); ?> 
						</a>
					</div>
					<?php if ( $class == 'home' ) :?>
						<h1 class="header__title visuallyhidden"><a href="01-home.php">BeAPI FrontEnd Framework</a></h1>
					<?php else: ?>
						<div class="header__title visuallyhidden"><a href="01-home.php">BeAPI FrontEnd Framework</a></div>
					<?php endif; ?>
				</div>
			</header>
			<nav id="menu" class="menu menu__mobile" role="navigation" tabindex="-1" aria-label="Navigation Principal">
				<div class="container">
					<ul class="sf-menu">
						<li class="current-menu-item"><a href="01-home.php">Home</a></li>
						<li>
							<a href="02-page-default.php">Page default</a>
							<ul>
								<li><a href="#">menu item</a></li>
								<li><a href="#">menu item</a></li>
								<li><a href="#">menu item</a></li>
								<li><a href="#">menu item</a></li>
								<li><a href="#">menu item</a></li>
								<li><a href="#">menu item</a></li>
							</ul>
						</li>
						<li><a href="#">menu item</a></li>
						<li><a href="#">menu item</a></li>
						<li><a href="#">menu item</a></li>
					</ul>
				</div>
			</nav>
			<main id="main__content" class="main__content" role="main" tabindex="-1" aria-label="Contenu Principal">
				<div class="container">