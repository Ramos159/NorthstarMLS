<section>
    <div class="px-4 md:px-20 md:grid md:grid-cols-2 text-brand-body-gray pt-16 pb-24">
        <?php while(have_rows('board_members','option')): the_row(); ?>
            <div class="pb-16">
                <h4 class="font-neo-sans-pro-medium text-xl"><?php the_sub_field('name'); ?></h4>
                <p>Company: <?php the_sub_field('company'); ?></p>
                <p>Appointed By: <?php the_sub_field('appointed_by'); ?></p>
            </div>
        <?php endwhile;?>
    </div>
</section>