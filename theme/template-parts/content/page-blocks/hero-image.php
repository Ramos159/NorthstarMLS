<?php
    $blurb = $args['blurb'];
    $title = $args['title'];
    $hero_image = $args['hero_image'];
    $has_blue_bg = $args['blue_bg'];
?>

<section>
    <div class="<?php if($has_blue_bg): echo 'blue-hero'; endif;?> px-4 md:px-0 md:flex md:flex-row-reverse w-full md:h-[480px] pt-8 pb-8 md:pb-16 text-center md:text-start">
		<div data-animation="animate__fadeInRight" class="opacity-0 shadow-xl h-[225px] md:h-[352px] md:mr-0 md:ml-auto rounded-3xl md:rounded-none md:rounded-l-3xl bg-cover md:min-w-[619px] mb-8 md:mb-0" style="background-image: url(<?php echo $hero_image['url']; ?>); background-position: center; background-repeat: none;"></div>
		<div class="pb-4 md:pb-0 md:pl-20 md:pr-6">
			<h1 class="font-neo-sans-pro text-5xl text-brand-headline-blue pb-6 pt-0 md:pt-16 bg-contain bg-center"><?php echo $title;?></h1>
			<div class="text-xl text-brand-body-gray prose"><?php echo $blurb;?></div>
		</div>
	</div>
</section>