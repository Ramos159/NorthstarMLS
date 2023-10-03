
<?php 
$dark_mode = $args['testimonial_dark_mode'];  
$class ='';  
if($dark_mode) {
    $class = 'dark-mode';
}
?> 
<section class="testimonial-carousel <?php echo $class; ?>">
    <div class="nsmls-container">
        <div class ="testimonial-carousel-content">

         <div class="swiper testimonial-carousel-swiper">
              <div class="swiper-wrapper">
                    <?php //$page_layout = get_field('page_layout');
                    // $slides = $page_layout['testimonial_slides'];
                        //   print_r(get_sub_field('testimonial_slides'));
                    $slides = $args['testimonial_slides'];
                          
                    foreach($slides as $slide) {  ?>
                     <div class="swiper-slide">
                        <p class="testimonial-content"> <?php echo $slide['testimonial_content'] ?> </p>
                        <p class="testimonial-author"> <?php echo $slide['testimonial_author'] ?> </p>
                     </div>
                    <?php }
                
                     ?>
                </div>
           </div>

           <div class="testimonial-carousel-nav">
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>

        </div>
    </div>
</section>