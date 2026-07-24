<?php 
//$images = have_rows('home_text_slider');
if( have_rows('home_text_slider') ): ?>
    <div class="swiper mySwiper h-80" style="background-image: url(<?php the_field('background_image');  ?>)">
        <div class="swiper-wrapper">
            <?php while( have_rows('home_text_slider') ): the_row(); 
                $heading = get_sub_field('headline');
                $subheading = get_sub_field('sub_headline');
            ?>
                <div class="swiper-slide h-80 bg-gray-600 opacity-40">
                    <div class="flex flex-col items-center justify-end h-52">
                        <h2 class="text-center text-4xl"><?php echo $heading; ?></h2>
                        <div class=" py-5"><p class="text-center text-xl"><?php echo $subheading; ?></p></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<?php endif; ?>