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
	<nav class="hidden md:flex flex-row-reverse border-b-[1px] font-neo-sans-pro-medium pr-14 lg:pr-20 xl:pr-36">
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
		<div id="close-mobile-site-menu" class="relative hidden"></div>
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
<!-- This is necessary because you manipulate menu styles in wordpress menu's with classes and regular css. -->
<style>
	.active-arrow {
		transform: rotate(180deg);
	}

	.sub-menu-icon {
		float: right;
		height: 35px;
		width: 35px;
		background-image: url('<?php echo get_template_directory_uri() . '/public/sub-menu-arrow.png';?>');
		background-size: contain;
	}

	#mobile-primary-menu > li > ul.sub-menu {
		margin-left: -60px;
		padding-left: 64px;
		padding-right: 64px;
		padding-top: 16px;
		display: none;
		position: relative;
		background-color: #fff;
		width: 100%;
		z-index: 20;
	}

	#mobile-primary-menu > li > ul.sub-menu > li.menu-item {
		color: #373B61;
		padding-left: 20px;
		padding-top: 10px;
		padding-bottom: 10px;
		width: 100%;
		display: block;
		position: relative;
		background-color: #fff;
	}

	#mobile-menu-container {
		background: white;
	}
	#open-mobile-site-menu {
		background-image: url('<?php echo get_template_directory_uri() . '/public/mobile-menu.png';?>');
		background-size: contain;
		background-repeat: no-repeat;
		height: 40px;
		width: 40px;
	}
	#close-mobile-site-menu {
		background-image: url('<?php echo get_template_directory_uri() . '/public/mobile-menu-cancel.png';?>');
		background-size: contain;
		background-repeat: no-repeat;
		height: 40px;
		width: 40px;
	}
	#mobile-primary-menu > li { 
		padding-bottom: 16px;
		margin-bottom: 16px;
		background: white;
		margin-left: 32px;
		margin-right: 32px;
	}

	#mobile-primary-menu > li > ul > li.current-menu-item > a { 
		text-decoration: #3CAFD6 underline;
		text-decoration-thickness: 2px;
		font-family: NeoSansProMedium;
	}

	#mobile-primary-menu > li.current-menu-item > a { 
		text-decoration: #3CAFD6 underline;
		text-decoration-thickness: 2px;
		font-family: NeoSansProMedium;
	}
	#mobile-primary-menu {
		margin-top: -1px;
		padding-top: 32px;
		position: relative;
		display: none;
		background-color: #fff !important;
		width: 100%;
		z-index: 40;
		min-height: 300px;
		max-height: 1000px;
	}
	.menu-logo {
		width: 263px;
		height: 46px;
		background-size: contain;
		background-image: url('<?php echo get_template_directory_uri() . '/public/NorthstarMLS.png';?>');
		margin-right: auto;
		background-repeat: no-repeat;
	}
	.search-icon:hover {
		cursor: pointer;
	}
	.search-icon {
		height: 20px;
		width: 20px;
		margin-top: 4px;
		margin-bottom: auto;
		background-image: url(<?php echo get_template_directory_uri() . '/public/search.png';?>);
		background-size: contain;
	}
	.menu-item {
		color: #373B61;
	}
	.menu-item-has-children > ul.submenu { 
		margin-left: 20px;
	}
	#primary-menu > .current-menu-parent > a {
		text-decoration: #3CAFD6 underline;
		text-decoration-thickness: 2px;
		font-family: NeoSansProMedium;
	}
	#primary-menu > .current-menu-item > a { 
		text-decoration: #3CAFD6 underline;
		text-decoration-thickness: 2px;
		font-family: NeoSansProMedium;
	}
	#primary-menu > .current-menu-parent > ul > li.current-menu-item > a {
		text-decoration: #3CAFD6 underline;
		text-decoration-thickness: 2px;
		font-family: NeoSansProMedium;
	}
	#primary-menu > .current-menu-parent > a:before {
		content: "\00a0";
	}
	#primary-menu > .current-menu-parent > a:after {
		content: "\00a0";
	}
	#primary-menu > .current-menu-item > a:after {
		content: "\00a0";
	}
	#primary-menu > .current-menu-item > a:before {
		content: "\00a0";
	}
	#primary-menu > li > ul.sub-menu {
		padding-top: 40px;
		margin-left: -40px;
		padding: 20px 0px 20px 20px;
		display: none;
		position: absolute;
		background-color: #fff;
		width: 180px;
		z-index: 20;
		--tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1) !important;
		--tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color) !important;
		box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
		border-bottom-right-radius: 1.5rem/* 24px */ !important;
		border-bottom-left-radius: 1.5rem/* 24px */ !important;
	}
	#primary-menu > li > ul.sub-menu > li:hover {
		background-color: #F0FBFF;
		border-top-left-radius: 1.5rem/* 24px */ !important;
		border-bottom-left-radius: 1.5rem/* 24px */ !important;
	}
	#primary-menu > li > ul.sub-menu > li {
		color: #373B61;
		padding-top: 20px;
		padding-bottom: 20px;
		padding-left: 20px;
		width: 100%;
		display: block;
		position: relative;
		background-color: #fff;
	}
	@media (min-width: 1280px) {
		ul.sub-menu {
			width: 240px;
		}
		.menu-logo {
			width: 233px;
		}
	}
	@media (min-width: 1024px) and (max-width: 1279px){
		.menu-logo {
			width: 180px;
			height: 40px
		}
	}
	@media (min-width: 768px) and (max-width: 1023px) {
		.menu-logo {
			width: 150px;
			height: 32px;
		}
	}

	@media (min-width: 375px) and (max-width: 640px){
		.menu-logo {
			width: 175px;
			height: 30px;
		}

		#open-mobile-site-menu {
			height: 30px;
			width: 30px;
		}

		#close-mobile-site-menu {
			height: 30px;
			width: 30px;
		}
	}

	@media (min-width: 768px){
		#mobile-nav-dropdown {
			display: none;
		}
	}

	@media (min-width: 768px){
		#close-mobile-site-menu {
			display: none;
		}
	}

</style>
