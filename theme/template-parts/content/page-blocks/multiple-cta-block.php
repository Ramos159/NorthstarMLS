<section class="multiple-cta">
    <div class="nsmls-container">
    <?php 
        $title = $args['cta_block_title'];
        $desc = $args['cta_block_desc'];
        $button = $args['cta_block_button']; ?>
        <div class ="multiple-cta-content">
            <h3><?php echo $title ?></h3>
            <p><?php echo $desc ?></p>
            <div class ="multiple-cta-content-btns">

                <?php 
                    foreach($button as $btn) {  ?>
                        <a href="<?php echo $btn['cta_block_button_url'] ?>"> <?php echo $btn['cta_block_button_text'] ?> </a>
                <?php }
                    
                    ?>
            </div>
        </div>



    </div>
</section>