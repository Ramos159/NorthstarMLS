<section>
    <div class="bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/public/partners-carousel.png'; ?>);">
        <div class="max-w-[1400px] mx-auto">
            <div class="min-h-[834px] lg:min-h-[565px] text-center">
            <h3 class="text-[32px] text-brand-headline-blue font-neo-sans-pro-medium pb-8 pt-12">Our Partners</h3>
                <div data-animation="animate__fadeIn" class="opacity-0 swiper partners-carousel overflow-hidden h-full mx-auto" style="background: transparent;">
                    <div class="swiper-wrapper max-h-[367px]  pb-16">
                        <?php while(have_rows('partners','option')): the_row(); ?>
                            <div class="swiper-slide text-center xl:text-start md:max-w-80 md:max-h-80 py-">
                                <div class="mx-auto bg-white shadow-xl rounded-3xl min-w-[327px] max-w-[327px] min-h-[327px] max-h-[327px] md:min-w-[175px] md:max-w-[175px] md:min-h-[175px] md:max-h-[175px] lg:min-w-[250px] lg:max-w-[250px] lg:min-h-[250px] lg:max-h-[250px] xl:min-w-[327px] xl:max-w-[327px] xl:min-h-[327px] xl:max-h-[327px] flex relative overflow-hidden">
                                        <?php 
                                            switch(get_sub_field('ribbon')) {
                                                case 'customer-association':
                                                    echo '<div class="ribbon lg:py-2"><p>Customer</p><p>Association</p></div>';
                                                    break;
                                                case 'shareholder':
                                                    echo '<div class="ribbon lg:py-2"><p>Shareholder</p></div>';
                                                    break;
                                                case 'common-data-partner':
                                                    echo '<div class="ribbon lg:py-2"><p>Common</p><p>Data Platform</p></div>';
                                                    break;
                                            }
                                        ?>
                                    <div class="mx-auto my-auto bg-contain bg-no-repeat bg-center h-[227px] w-[227px] md:h-[125px] md:w-[125px] lg:h-[150px] lg:w-[150px] xl:h-[227px] xl:w-[227px]" style="background-image: url(<?php echo get_sub_field('picture')['url']; ?>);"></div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next p-5 md:p-3 lg:p-5 border rounded-2xl bg-white"></div>
                    <div class="swiper-button-prev p-5 md:p-3 md:hidden lg:p-5 border rounded-2xl bg-white"></div>
                </div>
            </div>
        </div>
    </div>   
</section>