<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NorthstarMLS
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="font-neo-sans-pro">
	<header class="blog-hero entry-header flex px-4 md:px-0">
		<div class="md:flex md:flex-row-reverse w-full md:h-[480px] pt-8 pb-8 md:pb-16 text-center md:text-start">
			<div class=" h-[225px] md:h-[352px] md:mr-0 md:ml-auto rounded-3xl md:rounded-none md:rounded-l-3xl bg-cover md:min-w-[619px] mb-8 md:mb-0"style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');"></div>
			<div class="pb-4 md:pb-0 md:pl-20 md:pr-6">
				<h1 class="font-neo-sans-pro text-5xl text-brand-headline-blue pb-6 pt-0 md:pt-16 bg-contain bg-center"><?php the_title();?></h1>
				<div class="text-xl text-brand-body-gray prose"><?php the_field('post_blurb');?></div>
			</div>
		</div>
	</header>
	<div class="block px-4 md:px-32">
		<div class="md:flex w-full md:pt-16">
			<div id="main-content" class="md:min-w-[78%] text-brand-body-gray font-neo-sans-pro md:pr-32 prose-base md:prose pb-8 md:pb-0 pt-4 md:pt-0">
				<?php the_content(); ?>
			</div>
			<div class="md:min-w-[22%] text-brand-headline-blue text-center md:text-start">
				<h2 class="pb-6 text-3xl text-brand-body-gray">Explore More</h2>
				<ul class="pb-12 text-brand-headline-blue ">
					<li class="pb-4 flex justify-center md:justify-normal">Subscriber Benefits <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></li>
					<li class="pb-4 flex justify-center md:justify-normal">Rules & Regulations <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></li>
					<li class="pb-4 flex justify-center md:justify-normal">NorthstarMLS News <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></li>
					<li class="pb-4 flex justify-center md:justify-normal">Industry News <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></li>
				</ul>
				<h2 class="pb-6 text-3xl text-brand-body-gray">Share This Article</h2>
				<div class="flex gap-7 pb-12 justify-center md:justify-normal">
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/youtube.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/twitter.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/linkedin.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/instagram.png';?>"></img>
					<img class="h-5" src="<?php echo get_template_directory_uri() . '/public/facebook.png';?>"></img>
				</div>
			</div>
		</div>
		<div class="pt-12 md:pt-[120px] text-center pb-12 md:pb-[150px]">
			<h3 class="text-3xl text-brand-headline-blue pb-6">Related Articles<h3>
			<p class="text-brand-body-gray pb-12">Become an industry expert with these insightful articles. For more insights, explore our expansive article library.</p>
			<div class="md:flex md:gap-x-6 justify-center text-left pb-4 md:pb-8 px-8 md:px-0">
				<div class="rounded-xl md:h-[525px] md:w-[360px] shadow-xl mb-10">
					<div class="w-full h-[150px] bg-cover bg-no-repeat md:h-[320px]" style="background-image: url('<?php echo get_template_directory_uri() . '/public/sample-related-article.png'?>'); background-size: contain; background-repeat: no-repeat;"></div>
					<div class="pt-6 px-8">
						<p class="text-3xl text-brand-headline-blue pb-[18px] border-b-2 border-brand-pale-yellow">Article Name</p>
						<p class="text-brand-body-gray text-xs py-4">Condimentum eu fermentum placerat nam. Et erat velit risus ut placerat. Iaculis facilisi proin tellus.</p>
						<p class="pb-4 flex text-brand-headline-blue">read more <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></p>
					</div>
				</div>
				<div class="rounded-xl md:h-[525px] md:w-[360px] shadow-xl mb-10">
					<div class="w-full h-[150px] bg-cover bg-no-repeat md:h-[320px]" style="background-image: url('<?php echo get_template_directory_uri() . '/public/sample-related-article.png'?>'); background-size: contain; background-repeat: no-repeat;"></div>
					<div class="pt-6 px-8">
						<p class="text-3xl text-brand-headline-blue pb-[18px] border-b-2 border-brand-pale-yellow">Article Name</p>
						<p class="text-brand-body-gray text-xs py-4">Condimentum eu fermentum placerat nam. Et erat velit risus ut placerat. Iaculis facilisi proin tellus.</p>
						<p class="pb-4 flex text-brand-headline-blue">read more <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></p>

					</div>
				</div>
				<div class="rounded-xl md:h-[525px] md:w-[360px] shadow-xl mb-10">
					<div class="w-full h-[150px] bg-cover bg-no-repeat md:h-[320px]" style="background-image: url('<?php echo get_template_directory_uri() . '/public/sample-related-article.png'?>'); background-size: contain; background-repeat: no-repeat;"></div>
					<div class="pt-6 px-8">
						<p class="text-3xl text-brand-headline-blue pb-[18px] border-b-2 border-brand-pale-yellow">Article Name</p>
						<p class="text-brand-body-gray text-xs py-4">Condimentum eu fermentum placerat nam. Et erat velit risus ut placerat. Iaculis facilisi proin tellus.</p>
						<p class="pb-4 flex text-brand-headline-blue">read more <a href="https://google.com"><img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></a></p>
					</div>
				</div>
			</div>
			<a href="https://google.com"><button><p class="pb-4 flex p-4 bg-brand-headline-blue text-white rounded-xl">explore our library<img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/yellow-arrow-right.png';?>"></img></p></button></a>
		</div> 
	</div>
	<style>
		.blog-hero {
			background-image: url(<?php echo get_template_directory_uri() . '/public/Background.svg';?>);
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
</article>
