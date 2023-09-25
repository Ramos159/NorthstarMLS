<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NorthstarMLS
 */

?>

<footer id="colophon" class="lg:px-64 xl:px-[255px] pt-24 pb-8 font-neo-sans-pro">
	<div class="text-center px-[25px] md:px-[50px]">
		<div>
			<h2 class="text-brand-headline-blue text-3xl md:text-5xl pb-8"> Thank you from NorthstarMLS </h2>
			<p class="pb-16 font-neo-sans-pro text-brand-body-gray md:text-2xl">Access your frontend and other tools. Capture data and use it to excel in your industry with NorthstarMLS</p>
		</div>
		<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'northstarmls' ); ?>" class="block lg:flex pb-8 gap-16 justify-center">
			<div class="mx-auto lg:ml-0 lg:mr-auto text-center w-48 text-brand-headline-blue pb-10 lg:pb-0">
				<h3 class="underline underline-offset-[16px] decoration-brand-logo-blue pb-8 text-2xl font-neo-sans-pro-medium text-center">Company</h3>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'Company Footer Menu',
							'menu_id'        => 'company-footer-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							'menu_class'     => 'footer-menu text-center',
						)
					);
				?>
			</div>
			<div class="mx-auto lg:ml-0 lg:mr-auto text-left w-48 text-brand-headline-blue pb-10 lg:pb-0">
				<h3 class="underline underline-offset-[16px] decoration-brand-logo-blue pb-8 text-2xl font-neo-sans-pro-medium text-center">Tools</h3>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'Tools Footer Menu',
							'menu_id'        => 'tools-footer-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							'menu_class'     => 'footer-menu text-center',
						)
					);
				?>
			</div>
			<div class="mx-auto lg:ml-0 lg:mr-auto text-left w-48 text-brand-headline-blue lg:pb-0">
				<h3 class="underline underline-offset-[16px] decoration-brand-logo-blue pb-8 text-2xl font-neo-sans-pro-medium text-center">Legal</h3>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'Legal Footer Menu',
							'menu_id'        => 'legal-footer-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							'menu_class'     => 'footer-menu text-center',
						)
					);
					?>
			</div>
		</nav>
	</div>
	<hr class="border border-t-[1px] border-slate-100">
	<div class="pt-8 block lg:flex pb-8 px-[50px]">
		<div class="footer-menu-logo mx-auto md:ml-0 pb-20 lg:pb-0"></div>
		<div class="flex flex-row-reverse text-brand-headline-blue text-center lg:text-right justify-center lg:justify-normal">
			<ul>
				<li class="pb-2"><a href="mailto:help@northstarmls.com<">help@northstarmls.com</a></li>
				<li class="pb-2"><a href="tel:651-251-5456">651-251-5456</a></li>
				<li>
					<ul class="flex gap-10 lg:gap-6 pt-10 lg:pt-0">
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/youtube.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/twitter.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/linkedin.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/instagram.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/facebook.png';?>"></img>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="flex flex-col lg:flex-row text-xs md:px-[150px] justify-center text-center gap-2 lg:gap-6 text-brand-body-gray">
		<p><span>Copyright © <?php echo date("Y");?> NorthstarMLS</span></p>
		<p><a href="https://google.com">Release Notes</a></p>
	</div>
</footer><!-- #colophon -->
