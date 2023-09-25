<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NorthstarMLS
 */

?>

<header id="masthead" class="block shadow-xl md:relative bg-white top-0 h-auto w-full">
	<nav class="hidden md:flex flex-row-reverse border-b-[1px] font-neo-sans-pro-medium pr-14 lg:pr-20 xl:pr-36 text-xs">
		<?php
			wp_nav_menu(
				array(
					'menu' 	      => 'Top Menu',
					'items_wrap'  => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					'menu_class'  => 'flex gap-4 lg:gap-6 xl:gap-8 pl-4 uppercase font-medium'
				)
			);
		?>
	</nav>
	<div class="flex pr-6 md:pr-14 lg:pr-20 xl:pr-36 py-4">
		<div class="menu-logo ml-8 lg:ml-16 xl:ml-28"></div>
		<nav id="main-site-navigation" class="flex flex-row-reverse" aria-label="<?php esc_attr_e( 'Main Navigation', 'northstarmls' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'menu'       		=> 'Primary Menu',
					'menu_id'    		=> 'primary-menu',
					'items_wrap' 		=> '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					'menu_class' 		=> 'hidden md:flex gap-6 lg:gap-8 xl:gap-14 leading-8 underline-offset-4 z-20 font-neo-sans-pro',
					'container_class' 	=> 'inline-grid items-center'
				)
			);
			?>
		</nav>
		<div id="open-mobile-site-menu" class="relative inline-block md:hidden"></div>
		<div id="close-mobile-site-menu" class="relative hidden md:hidden"></div>
	</div>
	<div id="mobile-nav-dropdown">
		<?php
			wp_nav_menu(
				array(
					'menu'         => 'Primary Menu',
					'menu_id'      => 'mobile-primary-menu',
					'items_wrap'   => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					'menu_class'   => 'leading-8 underline-offset-4 z-20 font-neo-sans-pro text-brand-headline-blue text-xl',
					'container_id' => 'mobile-menu-container',
				)
			);
		?>
		<div id="mobile-after-nav">
			<hr class="mx-8">
			<div class="px-8 py-8">
			<?php
				wp_nav_menu(
					array(
						'menu' 	      => 'Top Menu',
						'items_wrap'  => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						'menu_class'  => 'grid grid-flow-col grid-cols-2 grid-rows-3 gap-8 uppercase text-sm font-neo-sans-pro-medium'
					)
				);
			?>
			</div>
			<hr class="mx-8">
			<div class="px-8 py-8">
				<div class="border-2 rounded-3xl flex gap-3 text-base">
					<button class="h-10 w-6"><img src="<?php echo get_template_directory_uri() . '/public/search.png'?>"></img></button>
					<label for="search"></label>
					<input type="text" id="search" name="search" placeholder="Search NorthstarMLS..."></input>
				</div>
			</div>
		</div>
	<div>
</header>
