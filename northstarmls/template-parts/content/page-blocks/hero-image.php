<?php
    $blurb = $args['blurb'];
    $title = $args['title'];
    $hero_image = $args['hero_image'];
    $has_blue_bg = $args['blue_bg'];
	$hero_setting = $args['hero_image_setting']
?>
<!-- <div data-animation="animate__fadeInRight" class="opacity-0 shadow-xl h-[225px] md:h-[352px] md:mr-0 md:ml-auto rounded-3xl md:rounded-none md:rounded-l-3xl md:min-w-[619px] mb-8 md:mb-0 <?php if($hero_setting == 'stretch-image'): echo 'bg-cover'; else: echo 'p-4 bg-contain'; endif;?>  bg-no-repeat bg-center" style="background-image: url(<?php echo $hero_image['url']; ?>);"></div> -->

<section>
    <div class="<?php if($has_blue_bg): echo 'blue-hero'; endif;?> px-4 md:px-0 md:flex md:flex-row-reverse w-full md:h-[480px] pt-8 pb-8 md:pb-0 text-center md:text-start">
		<?php if($hero_setting == 'stretch-image'): ?>
			<div data-animation="animate__fadeInRight" class="opacity-0 shadow-xl h-[225px] md:h-[352px] md:mr-0 md:ml-auto rounded-3xl md:rounded-none md:rounded-l-3xl md:min-w-[619px] mb-8 md:mb-0 bg-cover  bg-no-repeat bg-center" style="background-image: url(<?php echo $hero_image['url']; ?>);"></div>
		<?php else: ?>
			<div data-animation="animate__fadeInRight" class="h-[225px] md:h-[352px] opacity-0 bg-white shadow-xl md:mr-0 md:ml-auto rounded-3xl md:rounded-none md:rounded-l-3xl md:min-w-[619px] mb-8 md:mb-0 px-4 py-6">
				<div class="min-h-[225px] md:min-h-[300px] bg-contain bg-no-repeat bg-center" style="background-image: url(<?php echo $hero_image['url']; ?>);"></div>	
			</div>
		<?php endif; ?>
		<div class="pb-4 md:pb-0 md:pl-20 md:pr-6">
			<h1 class="font-neo-sans-pro-medium text-5xl text-brand-headline-blue pb-6 pt-0 md:pt-16 bg-contain bg-no-repeat bg-center"><?php echo $title;?></h1>
			<div class="text-xl text-brand-body-gray prose prose-p:font-open-sans"><?php echo $blurb;?></div>
		</div>
	</div>
</section>