<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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

	<link rel='stylesheet' type='text/css' href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Questrial">
	<script src="https://vjs.zencdn.net/5.4.6/video.js"></script>
	

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<?php //get_template_part('template-parts/header/site-header'); 
		?>


		<div class="header-black-bg <?php if (!is_front_page()) {
										echo "headerSolid";
									} ?>"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
		<header id="nav" class="header header-1 header-black ">
			<div class="header-wrapper">
				<div class="container-m-30 clearfix">


					<!-- LOGO -->
					<div class="row w-100">
						<div class="col-md-3 col-xs-9">
							<div class="logo-container-2">
								<div class="">
									<a href="<?php echo esc_url(home_url('/')); ?>" class="clearfix">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/logo-white.png" class="logo-img" alt="Logo">
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xs-3">

							<?php
							$id = get_current_user_id();
							$link = get_user_meta($id, 'avatar_thumb', true);
							print_r($link);
							global $wpdb;
							$results = $wpdb->get_results("SELECT avatar_thumb FROM `wp_uwp_usermeta` WHERE user_id=$id");
							$avtarUrl = $results[0]->avatar_thumb;
							$uploadAvt = esc_url(home_url('/wp-content/uploads')) . $avtarUrl;
							?>
							<div class="d-flex justify-content-end">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu',));
								$username = get_the_author_meta('display_name', get_current_user_id());
								?>
								<?php
								if (is_user_logged_in()) {
								?>

									<div class="dropdown">
										<span class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<div class="d-flex align-items-center">
												<div class="w40 mr8">
													<?php
													if ($avtarUrl===null) {
													?>
														<img class="radius100 w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/users.jpg" class="logo-img" alt="Logo">
													<?php
													} else {
													?>
														<img class="radius100 w-100" src="<?php echo $uploadAvt ?>" class="logo-img" alt="Logo">
													<?php
													}
													?>

												</div>
												<div class="colorWhite text-capitalize">
													<?php echo $username ?>
												</div>
											</div>

										</span>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="<?php echo esc_url(home_url('/account')); ?>">My Profile</a>
											<a class="dropdown-item" href="<?php echo esc_url(home_url('/account')); ?>">My Report</a>
											<a class="dropdown-item" href="<?php echo wp_logout_url($redirect = esc_url(home_url('/login'))) ?>">Logout</a>
										</div>
									</div>
								<?php
								} else {
								?>
									<div class="ml10">
										<a class="menuItems fw700" href="<?php echo esc_url(home_url('/login')); ?>">Login/Signup</a>
									</div>
								<?php
								}
								?>

							</div>



						</div>
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



	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">