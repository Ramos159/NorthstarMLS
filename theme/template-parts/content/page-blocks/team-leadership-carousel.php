<section>
    <div class="min-h-[834px] md:max-xl:min-h-[950px] lg:min-h-[528px]">
        <div data-animation="animate__fadeIn" class="opacity-0 swiper team-leadership-carousel overflow-hidden h-full w-full pb-16">
            <div class="swiper-wrapper">
                <?php while(have_rows('team_members','option')): the_row(); ?>
                    <div class="swiper-slide flex flex-col-reverse xl:flex-row px-6 md:px-12 lg:px-24 xl:px-32 pt-16 md:bg-white text-center xl:text-start">
                        <div class="mt-auto md:mb-auto  pr-0 xl:pr-16">
                            <p class="text-[12px] md:text-[9px] text-brand-body-gray pb-1 md:pb-3 uppercase font-neo-sans-pro-medium tracking-[1px]">Our Team</p>
                            <h3 class="text-xl md:text-4xl underline-offset-[16px] underline decoration-brand-pale-yellow"><?php the_sub_field('name_position'); ?></h3>
                            <div class="prose-sm prose-p:text-brand-body-gray md:prose py-8">
                                <?php the_sub_field('bio'); ?>
                            </div>
                        </div>
                            <div class="mx-auto shadow-xl min-w-[327px] pb-[327px] md:max-h-[400px] md:min-w-[400px] md:pb-[400px] rounded-3xl bg-contain mb-12 xl:mb-0" style="background-image: url(<?php echo get_sub_field('headshot')['url']; ?>); background-position: center;"></div>
                    </div>
                <?php endwhile;?>
            </div>
            <div class="flex px-6 md:px-[40px] lg:px-[88px] xl:px-[120px] justify-center xl:justify-normal">
                <div class="swiper-button-prev p-5 border rounded-2xl bg-white"></div>
                <div class="swiper-button-next p-5 border rounded-2xl bg-white"></div>
            </div>
        </div>
    </div>
</section>
