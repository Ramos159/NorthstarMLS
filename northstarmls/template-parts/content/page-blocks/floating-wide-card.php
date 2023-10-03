<?php
    $body = $args['body'];
    $title = $args['title'];
    $bg = $args['background_image'];
    $op = $args['opaque_background'];
?>

<section>
    <div class="py-20 px-4 md:px-20" style="background-image: url('<?php echo $bg['url'];?>');">
        <div data-animation="animate__fadeIn" class="<?php if($op): ?> bg-opacity-90 <?php endif; ?> opacity-0 bg-brand-headline-blue p-12 text-center rounded-3xl max-w-[1400px] mx-auto">
            <h3 class="text-white mt-0 text-3xl pb-4"><?php echo $title ?></h2>
            <div class="prose-p:text-white prose-p:font-open-sans">
                <?php echo $body ?>
            </div>
        <div>
    </div>
</section>