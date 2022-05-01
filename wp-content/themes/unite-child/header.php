<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	<title>Habituary - Fitness & Happiness</title>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Habituary is a people friendly organisation driven towards creating personalised services in the areas of fitness, nutrition and lifestyle choices while pursuing happiness as a constant goal.">
	<meta name="author" content="ABCgomel">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:title" content="Habituary - Tap Into Your Happiness!" />
	<meta property="og:description" content="Habituary is a people friendly organisation driven towards creating personalised services in the areas of fitness, nutrition and lifestyle choices while pursuing happiness as a constant goal." />
	<meta property="og:url" content="https:www.habituary.co" />
	<meta property="og:image" content="images/girl.png" />

	<meta name="theme-color" content="#2a2b2f">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4NQM9WWGVL"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-4NQM9WWGVL');
	</script>

	<!-- FAVICONS -->

	<link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon.ico" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon/apple-touch-icon-114x114.png">
	<link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/favicon/icon-192x192.png">

	<!-- CSS -->
	<!--  GOOGLE FONT -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,200%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/css/bootstrap.min.css"> -->

	<!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/css/icons-fonts.css">

	<!-- TEXT ROTATOR -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/css/text-rotator.css">

	<!-- CSS THEME -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/framework/css/style.css">

	<!-- ANIMATE -->
	<link rel='stylesheet' href="<?php echo get_stylesheet_directory_uri(); ?>/framework/css/animate.min.css">


</head>

<body <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	}
	?>

	<div id="page" class="hfeed site">

		<div class="header-black-bg <?php if(!is_front_page()){
			echo "headerSolid";
		} ?>"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
		<header id="nav" class="header header-1 header-black ">
			<div class="header-wrapper">
				<div class="container-m-30 clearfix">
					

						<!-- LOGO -->
						<div class="row w-100">
							<div class="col-md-3">
							<div class="logo-container-2">
							<div class="">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="clearfix">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/logo-white.png" class="logo-img" alt="Logo">
								</a>
							</div>
						</div>
							</div>

							<div class="col-md-9">
		
							<!-- <nav class="nvigation">
						<ul>
							<li>
								<a href="#">Programs</a>
							</li>
							<li>
								<a href="#">Team</a>
							</li>
							<li>
								<a href="#">Lounge</a>
							</li>
							<li>
								<a href="#">Sign up</a>
							</li>
						</ul>
					</nav> -->

					<nav>
			<div class="container1">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only"><?php esc_html_e('Toggle navigation','unite'); ?></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>

		        </div>

				<?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav justify-content-end',
		                'fallback_cb'       => 'unite_wp_bootstrap_navwalker::fallback',
		                'walker'            => new unite_wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav><!-- .site-navigation -->
							</div>
						</div>
				
						<!-- BUTTON -->
						<div class="menu-btn-respons-container">
							<button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
								<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
							</button>
						</div>
					

				
				</div>

				<!-- END main-menu -->

			</div>
			<!-- END container-m-30 -->

	</div>
	<!-- END main-menu-container -->

	<!-- SEARCH READ DOCUMENTATION -->


	</div>
	<!-- END header-wrapper -->

	</header>

	<div id="content" class="site-content"><?php
											global $post;
											if (is_singular() && get_post_meta($post->ID, 'site_layout', true)) {
												$layout_class = get_post_meta($post->ID, 'site_layout', true);
											} else {
												$layout_class = unite_get_option('site_layout');
											}
											?>
		<div class="row <?php echo esc_attr($layout_class); ?>">