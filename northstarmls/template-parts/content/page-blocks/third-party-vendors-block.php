<section class="max-w-[1400px]">
    <div class="px-8 md:px-56 prose prose-p:font-open-sans pb-24 md:pb-[120px]">
        <h3 class="text-2xl text-brand-headline-blue">Vendors Using a NorthstarMLS Data Feed</h3>
        <?php while(have_rows('third_party_tools','option')): the_row(); ?>
            <div>
                <h4 class="text-brand-headline-blue text-xl"><a href="<?php the_sub_field('url');?>" target="_blank"><?php the_sub_field('company');?></a></h4>
                <?php the_sub_field('body'); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>