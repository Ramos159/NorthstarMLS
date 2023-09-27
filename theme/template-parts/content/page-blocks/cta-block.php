<?php
    $title = $args['title'];
    $body = $args['body'];
    $bg = $args['bg_image'];
    $enable_button =$args['cta_button'];
    $cta_url = $args['cta_url'];
    $cta_icon = $args['cta_icon']; 
?>

<section>
    <div data-animation="animate__fadeIn" class="md:h-96 opacity-0 px-4 md:px-20 text-center pb-6 pt-4 md:pt-20" <?php if($bg): ?> style="background-image: url(<?php echo $bg['url']?>); background-size: cover; background-size: round;" <?php endif; ?>>
        <h3 class="mt-0 text-2xl pb-4 text-brand-headline-blue font-neo-sans-pro-medium"><?php echo $title ?></h3>
        <div class="pb-6 text-brand-headline-blue">
            <?php echo $body ?>
        </div>
    <?php if($enable_button): ?>
        <a href="<?php echo $cta_url;?>">
            <button>
                <p class="flex py-2 px-4 bg-brand-headline-blue text-white rounded-xl">
                    <?php echo $cta_text; ?>
                    <img class="h-3 pl-2 mt-1" src="<?php if($cta_icon == 'arrow'): echo get_template_directory_uri() . '/public/yellow-arrow-right.png'; else: echo get_template_directory_uri() . '/public/yellow-link.png'; endif;?>"></img>
                </p>
            </button>
        </a>
    <?php endif; ?>
    </div>
</section>