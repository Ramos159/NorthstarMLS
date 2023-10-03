<?php
    $title = $args['title'];
    $body = $args['body'];
    $bg = $args['bg_image'];
    $cta_text = $args['cta_text'];
    $cta_url = $args['cta_url'];
    $cta_icon = $args['cta_icon']; 
    $font_color = $args['font-color'];
?>

<section>
    <div data-animation="animate__fadeIn" class="md:h-96 opacity-0 px-4 md:px-20 text-center pb-6 pt-4 md:pt-20" <?php if($bg): ?> style="background-image: url(<?php echo $bg['url']?>); background-size: cover; background-size: round;" <?php endif; ?>>
        <div class="max-w-[1400px] mx-auto">
            <h3 class="mt-0 text-3xl pb-4 text-brand-headline-blue font-neo-sans-pro-medium"><?php echo $title ?></h3>
            <div class="pb-6 text-brand-headline-blue">
                <?php echo $body ?>
            </div>
            <a href="<?php echo $cta_url;?>">
                <button>
                    <p class="flex py-2 px-4 bg-brand-headline-blue hover:bg-brand-logo-blue focus:border-brand-logo-blue text-white rounded-xl font-open-sans">
                        <?php echo $cta_text; ?>
                        <img class="h-3 pl-2 mt-1" src="<?php if($cta_icon == 'arrow'): echo get_template_directory_uri() . '/public/yellow-arrow-right.png'; else: echo get_template_directory_uri() . '/public/yellow-link.png'; endif;?>"></img>
                    </p>
                </button>
            </a>
        </div>
    </div>
</section>