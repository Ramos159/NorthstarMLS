<?php
    $line = $args['line'];
    $cta_url = $args['cta_url'];
    $cta_text = $args['cta_text'];
?>

<section>
    <div class="md:flex text-white py-8 justify-center text-center md:text-start" style="background-image:url(<?php echo get_template_directory_uri() . '/public/one-liner-cta.png'?>) ; background-size: cover;">
        <div class="max-w-[1400px] mx-auto w-full md:flex justify-center">
            <h4 class="text-white md:pr-12 text-xl md:text-2xl pb-3 md:pb-0"><?php echo $line;?></h4>
            <a href="<?php echo $cta_url;?>">
                <button>
                    <p class="flex py-[10px] px-4 md:px-6 bg-white text-brand-headline-blue hover:bg-brand-logo-blue focus:border-brand-logo-blue font-neo-sans-pro-medium self-center rounded-xl">
                        <?php echo $cta_text; ?>
                        <img class="h-3 pl-2 md:mt-1" src="<?php echo get_template_directory_uri() . '/public/blue-arrow-right.png';?>"></img>
                    </p>
                </button>
            </a>
        </div>
    </div>
</section>