<section>
    <div class="px-8 md:px-56 prose pb-24 md:pb-[120px]">
        <h3 class="text-2xl text-brand-headline-blue">Third Party Vendors</h3>
        <?php while(have_rows('third_party_tools','option')): the_row(); ?>
            <div>
                <h4 class="text-brand-headline-blue text-xl"><?php the_sub_field('company');?></h4>
                <?php the_sub_field('body'); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>