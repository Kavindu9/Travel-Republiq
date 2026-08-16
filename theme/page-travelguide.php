<?php 
/* 
    Template Name: Travel Guide Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>

<section class="lg:py-12 py-6">
    <div class="max-w-screen-lg mx-auto px-4">
        <?php
        if(have_rows('Travel_Guide_Section')) :
            $loop_counter = 0;
            while( have_rows('Travel_Guide_Section')) : the_row();
                $loop_counter++;

                $image1 = get_sub_field('image_1');
                $image2 = get_sub_field('image_2');
                $image3 = get_sub_field('image_3');
                $gallery_slider = get_sub_field('image_slider');
                $title = get_sub_field('title');
                $body_desc = get_sub_field('description');
                
                // Determine if this is an odd or even iteration
                $is_odd = ($loop_counter % 2) == 1;
                ?>

            <?php if($is_odd): ?>

                <!-- ========================= -->
                <!-- TEXT LEFT | IMAGES RIGHT -->
                <!-- ========================= -->

                <div class="flex flex-col lg:flex-row items-stretch gap-12 py-20">

                    <!-- Text -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="font-title font-normal text-3xl md:text-2xl text-[#1f2b3a] mb-8 tracking-wide">
                            <?php echo $title; ?>
                        </h2>
                        <div class="font-body text-xl font-normal space-y-6 text-[#1f2b3a] leading-[2.2rem] prose max-w-none">
                            <?php echo $body_desc; ?>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="w-full lg:w-1/2">
                        <div class="travel-guide-carousel" data-flickity='{
                            "cellAlign": "left",
                            "contain": true,
                            "wrapAround": true,
                            "imagesLoaded": true,
                            "pageDots": true,
                            "prevNextButtons": true
                        }'>
                            <?php foreach( $gallery_slider as $image ): ?>
                                <div class="travel-guide-carousel-cell">
                                    <?php
                                    echo wp_get_attachment_image(
                                    $image['ID'],
                                    'full',
                                    false,
                                    array(
                                        'class' => 'travel-guide-carousel-image',
                                        'alt'   => $image['alt'] ?? ''
                                    )
                                );
                                ?>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>

            <?php else: ?>

                <!-- ========================= -->
                <!-- IMAGES LEFT | TEXT RIGHT -->
                <!-- ========================= -->

                <div class="flex flex-col lg:flex-row items-stretch gap-12 py-20">

                    <!-- Images -->
                    <div class="w-full lg:w-1/2">
                        <div class="travel-guide-carousel" data-flickity='{
                            "cellAlign": "left",
                            "contain": true,
                            "wrapAround": true,
                            "imagesLoaded": true,
                            "pageDots": true,
                            "prevNextButtons": true
                        }'>
                            <?php foreach( $gallery_slider as $image ): ?>
                                <div class="travel-guide-carousel-cell">
                                    <?php
                                    echo wp_get_attachment_image(
                                    $image['ID'],
                                    'full',
                                    false,
                                    array(
                                        'class' => 'travel-guide-carousel-image',
                                        'alt'   => $image['alt'] ?? ''
                                    )
                                );
                                ?>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <!-- Text -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="font-title font-normal text-3xl md:text-2xl text-[#1f2b3a] mb-8 tracking-wide">
                            <?php echo $title; ?>
                        </h2>
                        <div class="font-body text-xl font-normal space-y-6 text-[#1f2b3a] leading-[2.2rem] prose max-w-none">
                            <?php echo $body_desc; ?>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

        <?php endwhile; ?>
        <?php endif;?>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="font-title font-normal text-4xl md:text-3xl text-[#1f2b3a] mb-8 tracking-wide text-center">
            PLAN YOUR PERFECT TRIP
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                if(have_rows('plan_your_trip')) :
                    while( have_rows('plan_your_trip')) : the_row();

                        $icon = get_sub_field('icon_image');
                        $card_title = get_sub_field('title_card');
                        $short_desc = get_sub_field('short_desc');
                        $url = get_sub_field('cta_url');
                        
            ?>

            <div class="flex flex-col items-center text-center px-6 py-8 bg-[#e3eded] rounded-[28px]" style="background: #e3eded;box-shadow: 0 2px 12px rgba(36, 132, 107, 0.09);">
                <a href="<?php echo $url; ?>">
                    <?php if ($icon): ?>
                        <div style="background:linear-gradient(#16717B,#80915A); width:66px; height:66px; display:flex; align-items:center; justify-content:center; border-radius:50%; margin:0 auto 12px auto;" bis_skin_checked="1">
                            <span style="font-size:20px; color:#fff;"><img src=""></span>
                            <img
                            src="<?php echo $icon; ?>"
                            alt="Icon"
                            class="w-[55%] h-[55%] object-cover">
                        </div>
                        
                    <?php endif; ?>
                    <h3 class="font-body font-normal text-2xl md:text-3xl text-[#1f2b3a] mb-2">
                        <?php echo $card_title; ?>
                    </h3>
                    <p class="text-[#1f2b3a] font-body text-xl font-normal leading-[1.8rem]">
                        <?php echo $short_desc; ?>
                    </p>
                </a>
            </div>
        <?php endwhile; ?>
        <?php endif;?>
    </div>
</section>

<style>
    .travel-guide-carousel {
    width: 100%;
    height: 100%;
}

.travel-guide-carousel .flickity-viewport {
    height: 100% !important;
}

.travel-guide-carousel-cell {
    width: 100%;
    height: 100%;
    margin-right: 0;
}

.travel-guide-carousel-image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

</style>


            
<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>