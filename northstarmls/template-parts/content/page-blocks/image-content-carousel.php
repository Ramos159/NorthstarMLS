<?php 
    $slides = $args['slides'];
?>

<section>
    <div class="h-[568px]">
        <div data-animation="animate__fadeIn" class="opacity-0 swiper image-content-carousel overflow-hidden h-full w-full">
            <div class="swiper-wrapper pr-20">
                <?php foreach($slides as $slide):
                    $eyebrow = $slide['eyebrow'];
                    $title = $slide['title'];
                    $body = $slide['body'];
                    $image = $slide['image'];
                ?>
                    <div class="swiper-slide pt-12 md:py-20 px-6 md:pl-0 md:pr-20 md:flex">
                        <div class="shadow-xl w-full h-56 md:h-[440px] md:w-[689px] lg: min-w-[689px] rounded-3xl md:rounded-none md:rounded-r-3xl mb-12 md:mb-0 bg-contain md:bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                        <div class="md:px-12 my-auto text-center md:text-start">
                            <p class="text-xs text-brand-body-gray pb-1 md:pb-3 uppercase font-neo-sans-pro-medium tracking-[1px]"><?php echo $eyebrow; ?></p>
                            <h3 class="text-2xl md:text-4xl underline-offset-[16px] underline decoration-brand-pale-yellow pb-6 md:pb-12 font-neo-sans-pro-medium text-brand-headline-blue"><?php echo $title; ?></h3>
                            <div class="prose-sm prose-p:text-brand-body-gray md:prose prose-p:font-open-sans">
                                <?php echo $body; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>