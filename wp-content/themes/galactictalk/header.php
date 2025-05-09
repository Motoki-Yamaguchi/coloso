<?php
/**
 * The header
 *
 * @package GalacticTalk
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-black text-white ~text-15/16 leading-relaxed antialiased flex flex-col min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<header class="sticy top-0 z-50 w-full max-w-1600 lg:mx-auto lg:px-40">
	<div class="rounded-b-12 bg-black/50 backdrop-blur-[1.25rem] py-8 px-16 lg:flex lg:item-center lg:justify-between lg:rounded-b-16 lg:p-16 lg:shadow-md"  >
		<div class="flex items-center justify-between">
			<a class="flex justify-center p-8" href="php echo esc_url( home_url( '/' ) ); ?>">
				<img class="h-24 w-auto lg:h32 " src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.svg' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="178" height="32">
			</a>
			<button class="js-menu-trigger p-8 lg:hidden" aria-expanded="false" aria-controls="menu-container">
				<img class="size-24" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/menu-button.svg' ) ); ?>" alt="メニュー" width="24" height="24">
			</button>
		</div>
		<nav id="menu-container" class="js-hamburger-container aria-hidden:invisible lg:hidden" aria-hidden="true">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => 'null',
					'menu_id'        => 'menu-hamburger',
					'fallback'       => false,
				)
			);
			?>
		</nav>
		<nav class="hidden lg:block">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => 'null',
					'menu_id'        => 'menu-header',
					'fallback'       => false,
				)
			);
			?>
		</nav>
	</div>
</header>
<div id="js-backdrop" class="fixed inset-0 z-40 hidden lg:hidden"></div>

<div class="lg:flex grow">
	<main class="-mt-[--header-height] flex grow flex-col overflow-hidden ~gap-80/120 lg:flex" role="main">
