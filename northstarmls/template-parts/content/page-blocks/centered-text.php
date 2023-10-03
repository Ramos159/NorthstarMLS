<?php
    $title = $args['title'];
    $body = $args['body'];
    $bg = $args['bg_image'];
?>

<section>
    <div data-animation="animate__fadeIn" class="md:h-96 opacity-0 px-4 md:px-20 text-center pb-6 pt-4 md:pt-20" <?php if($bg): ?> style="background-image: url(<?php echo $bg['url']?>); background-size: cover; background-size: round;" <?php endif; ?>>
        <div class="max-w-[1400px] mx-auto">
            <h3 class="mt-0 text-3xl pb-4 text-brand-headline-blue font-neo-sans-pro-medium"><?php echo $title ?></h3>
            <div class="pb-6 text-brand-body-gray font-open-sans">
                <?php echo $body ?>
            </div>
        </div>
    </div>
</section>