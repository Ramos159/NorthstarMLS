<section class="multi-tab">
    <div class="nsmls-container">
    <?php 
        $tabs = $args['multi_tabs'];
        ?>
        <div class="multi-tab-wrapper">
            <div class="multi-tab-links">
                <?php 
                $j=0;
                $class='active';
                foreach($tabs as $tab) {
                    if($j) $class=''; 
                    ?>
                    <a class="tab-link <?php echo $class; ?>" href="javascript:void(0);" data-tag="<?php echo $tab['multi_tab_name'] ?>"><?php echo $tab['multi_tab_name'] ?> </a>
                <?php
                 $j++;
               }
   
                ?>    
            </div>

            <div class="multi-tab-content">
            <?php 
            $i=0;
            $class='active';
            foreach($tabs as $tab) { 
            if($i) $class=''; 
            ?>  
            <div class="multi-tab-hidden">
               <a class="tab-link <?php echo $class; ?>" href="javascript:void(0);" data-tag="<?php echo $tab['multi_tab_name'] ?>"><?php echo $tab['multi_tab_name'] ?> </a>
            </div>
                <div class="multi-tab-content-inner <?php echo $class;?>" data-tag="<?php echo $tab['multi_tab_name'] ?>">   
                    <h3><?php echo $tab['multi_content_title'] ?></h3>
                    <?php echo $tab['multi_content_desc'] ?>
                    <a class="multi-content-btn" href="<?php echo $tab['multi_button']['button_url'] ?>"><?php echo $tab['multi_button']['button_text'] ?> </a>
                </div>
            <?php 
                $i++;
            }
                ?> 
               
            </div>
        </div>
</div>
</section>