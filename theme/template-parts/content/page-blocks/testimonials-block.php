<?php 
    $testimonials = $args['testimonials'];
?>

<section>
    <div class="mx-auto bg-cover bg-center bg-no-repeat h-[432px] flex" style="background-image: url(<?php echo get_template_directory_uri() . '/public/Testimonial.png'; ?>);">
        <div class="min-w-[365px] max-w-[1400px] mx-auto flex my-auto px-4">
            <div class="min-w-[32px] h-[192px] flex flex-col">
                <div class="min-w-[32px] h-[24px] bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri() . '/public/left-quote.svg';?>);"></div>
            </div>
            <div  class="swiper testimonials-carousel overflow-hidden justify-center my-auto">
                <div class="swiper-wrapper">
                    <?php foreach($testimonials as $testimonial):
                        $name = $testimonial['name'];
                        $testimony = $testimonial['testimony'];
                    ?>
                        <div class="swiper-slide text-white text-center my-auto max-h-[192px] flex">
                            <div class="text-lg sm:text-2xl py-6 px-10">
                                <?php echo wp_kses_post($testimony); ?>
                                <p class="text-base pt-8 font-neo-sans-pro-medium">- <?php echo $name; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex px-6 justify-center gap-32 mt-28 sm:mt-12">
                    <div class="swiper-button-prev relative p-5 border rounded-2xl bg-white"></div>
                    <div class="swiper-button-next relative p-5 border rounded-2xl bg-white"></div> 
                </div>
            </div>
            <div class="min-w-[32px] h-[192px] flex flex-col">
                <div class="min-w-[32px] h-[24px] bg-no-repeat md:mt-auto" style="background-image: url(<?php echo get_template_directory_uri() . '/public/right-quote.svg';?>);"></div>
            </div>
        </div>
    </div>
</section>