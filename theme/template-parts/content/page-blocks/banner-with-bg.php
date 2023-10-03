<section class="banner">
    <div class="nsmls-container">
    <?php 
      
        $banner_title = $args['banner_title'];
        $desc = $args['banner_desc']; 
        $button = $args['banner_button'];
        ?>


        <div class ="banner-content">
            <div class ="banner-content-left"></div>
                <div class ="banner-content-right">
                    <h1><?php echo $banner_title ?></h1>
                    <p><?php echo $desc ?></p>
                    <a class="banner-btn" href="<?php echo $button['button_url'] ?>"> <?php echo $button['button_text'] ?> </a>

                </div>
                
            </div>
    </div>
</section>