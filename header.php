<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="main-wrapper">

	<nav class="top-header header bg-light">
		<a class="navbar-brand" href="<?php echo site_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
		<div class="d-md-block d-lg-none order-3">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header_menu',
					'menu_class'     => 'mobile-menu'
				)
			);
			?>
		</div>
		<div class="order-3">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header_menu',
					'menu_class'     => 'desktop-menu'
				)
			);
			?>
		</div>
		<button class="menu-button" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>



	<header class="top-header header bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div>
						<a class="navbar-brand" href="<?php echo site_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
					</div>
					<small><?php bloginfo( 'description' ); ?></small>
				</div>
				<div class="col-md-9">
					<?php if ( has_nav_menu( 'header_menu' ) ) : ?>

						<nav id="main-nav" class="navigation-menu">
							<div class="d-md-block d-lg-none order-3">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'header_menu',
										'menu_class'     => 'mobile-menu'
									)
								);
								?>
							</div>
							<div class="order-3">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'header_menu',
										'menu_class'     => 'desktop-menu'
									)
								);
								?>
							</div>

							<button class="menu-button" type="button">
								<span class="navbar-toggler-icon"></span>
							</button>

						</nav>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>
	
	<section id="composer-header" class="bg-dark">
		<div class="container">
			<?php echo Starter_Kit()->View->load_composer_layout( 'header' ); ?>
		</div>
	</section>
