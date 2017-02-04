<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">



			<header class="header no-mobile" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div id="inner-header" class="wrap cf">
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">

						<a class="logo" href="<?php echo site_url(); ?>"></a>

						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',				// adding custom nav class
    					         'menu_id' => 'main-menu',	
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

						<div class="admin">
							<div class="search"><a class="search desktop" href="#"><i class="fa fa-search fa-lg2" aria-hidden="true"></i></a></div>
							<div class="cart"><a class="cart desktop" href="#"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></div>
							<div class="login"><a class="login desktop" href="#">Login</a></div>
						</div>
					</nav>
				</div>

			</header>

			<header class="header-mobile">
				<a class="logo" href="<?php echo site_url(); ?>"></a>
				<div id="header-mobile">

					<nav id='cssmenu'>
					
					<div id="head-mobile"></div>
					<div id="mobile-login" class="hidden">
						<div class="header">
							<div class="admin">
								<div class="search"><a class="search mobile" href="#"><i class="fa fa-search fa-lg2" aria-hidden="true"></i></a></div>
								<div class="cart"><a class="cart mobile" href="#"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></div>
								<div class="login"><a class="login mobile" href="#">Login</a></div>
							</div>
						</div>
						<div class="header-search" id="header-search-mobile">
							<form action="">
								<div>
									<input type="text" placeholder="Search site..." required="" id="search" /><input type="submit" value="Go" class="btn-black centered" />
								</div>
								<a class="close-search" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
							</form>
						</div>
						<div id="account-login-mobile" class="">
							<p>Welcome!</p>
							<form action="">
								<div>
									<input type="text" placeholder="Username" required="" id="username" />
								</div>
								<div>
									<input type="password" placeholder="Password" required="" id="password" />
								</div>
								<div>
									<input type="submit" value="Log in" class="btn-red centered full" />
									<p>
										<a href="#">Lost your password?</a>
									</p>
								</div>
							</form>
						</div>
					</div>
					<div class="button"></div>
					<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',				// adding custom nav class
    					         'menu_id' => 'main-menu',	
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
				</div>
			</header>

			<div class="header2 no-mobile" id="header2"></div>

			<div class="header-search no-mobile" id="header-search">
				<div class="wrap">
					<form action="">
						<div>
							<input type="text" placeholder="Search site..." required="" id="search" /><input type="submit" value="Go" class="btn-black centered" />
						</div>
						<a class="close-search desktop" href="#"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a>
					</form>
				</div>
			</div>

			<div class="wrap">
				<div id="account-login" class="no-mobile">
					<p>Welcome!</p>
					<form action="">
						<div>
							<input type="text" placeholder="Username" required="" id="username--" />
						</div>
						<div>
							<input type="password" placeholder="Password" required="" id="password--" />
						</div>
						<div>
							<input type="submit" value="Log in" class="btn-red centered full" />
							<p>
								<a href="#">Lost your password?</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		

