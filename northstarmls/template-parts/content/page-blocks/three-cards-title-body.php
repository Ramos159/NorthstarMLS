<?php
    $title = $args['title'];
    $body = $args['body'];
    $cards = $args['cards'];
?>
<section>
    <div data-animation="animate__fadeIn" class="opacity-0 pt-12 md:pt-[120px] text-center pb-12 px-4 md:px-20 max-w-[1400px] mx-auto">
    	<h3 class="text-3xl text-brand-headline-blue pb-6 font-neo-sans-pro-medium"><?php echo $title ?></h3>
    	<div class="text-brand-body-gray pb-12"><?php echo $body ?></div>
    	<div class="md:flex md:gap-x-6 justify-center text-left px-8 md:px-0">
            <?php foreach($cards as $card): ?>
    			<div data-animation="animate__fadeInUp" class="opacity-0 rounded-xl md:h-[525px] md:w-[360px] shadow-xl mb-10">
    				<div class="w-full h-[150px] md:h-[320px] bg-contain bg-no-repeat bg-center" style="background-image: url('<?php echo get_template_directory_uri() . '/public/sample-related-article.png'?>');"></div>
    				<div class="pt-6 px-8">
    					<p class="text-3xl text-brand-headline-blue pb-[18px] border-b-2 border-brand-pale-yellow"><?php echo $card['title']?></p>
    					<div class="text-brand-body-gray text-xs py-4">
                            <?php echo $card['body'];?>
                        </div>
    					<a href="<?php echo $card['link']?>">
                            <p class="pb-4 flex text-brand-headline-blue hover:text-brand-logo-blue focus:border-brand-logo-blue">read more <img class="h-3 pl-4 mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img></p>
                        </a>
    				</div>
    			</div> 
            <?php endforeach;?>
        </div> 
    </div>
</section>