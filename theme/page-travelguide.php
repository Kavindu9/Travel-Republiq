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
                $title = get_sub_field('title');
                $body_desc = get_sub_field('description');
                
                // Determine if this is an odd or even iteration
                $is_odd = ($loop_counter % 2) == 1;
                ?>

            <!-- Grid Layout - Alternating Left/Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start py-8">

                <!-- Content Section -->
                <div <?php echo !$is_odd ? 'class="lg:order-last"' : ''; ?>>
                    <h2 class="text-4xl md:text-5xl font-medium text-[#1f2b3a] mb-8 tracking-wide">
                        <?php echo $title; ?>
                    </h2>

                    <div class="space-y-6 text-[#1f2b3a] text-lg leading-[2.2rem]">
                        <?php echo $body_desc; ?>
                    </div>
                </div>

                <!-- Images Section -->
                <div class="grid grid-cols-2 gap-4 h-full <?php echo !$is_odd ? 'lg:order-first' : ''; ?>">

                    <!-- Large Image -->
                    <div class="h-full">
                        <?php if ($image1): ?>
                            <img
                                src="<?php echo $image1; ?>"
                                alt="Travel Image"
                                class="w-full h-full object-cover rounded-[28px] min-h-[500px]"
                            />
                        <?php endif; ?>
                    </div>

                    <!-- Two Stacked Images -->
                    <div class="flex flex-col gap-4">
                        <?php if ($image2): ?>
                            <img
                                src="<?php echo $image2; ?>"
                                alt="Travel Image"
                                class="w-full h-full object-cover rounded-[28px]"
                            />
                        <?php endif; ?>
                        <?php if ($image3): ?>
                            <img
                                src="<?php echo $image3; ?>"
                                alt="Travel Image"
                                class="w-full h-full object-cover rounded-[28px]"
                            />
                        <?php endif; ?>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>
        <?php endif;?>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">
        <h2 class="text-4xl md:text-5xl font-medium text-[#1f2b3a] mb-8 tracking-wide text-center">
            PLAN YOUR PERFECT TRIP
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                if(have_rows('plan_your_trip')) :
                    while( have_rows('plan_your_trip')) : the_row();

                        $icon = get_sub_field('icon_image');
                        $card_title = get_sub_field('title');
                        $short_desc = get_sub_field('short_desc');
                        
            ?>

            <div class="flex flex-col items-center text-center px-6 py-8 bg-[#e3eded] rounded-[28px]">
                <?php if ($icon): ?>
                    <div style="background:linear-gradient(#16717B,#80915A); width:66px; height:66px; display:flex; align-items:center; justify-content:center; border-radius:50%; margin:0 auto 12px auto;" bis_skin_checked="1">
                        <span style="font-size:20px; color:#fff;"><img src=""></span>
                        <img
                        src="<?php echo $icon; ?>"
                        alt="Icon"
                        class="w-1/2 h-1/2 mb-4">
                    </div>
                    
                <?php endif; ?>
                <h3 class="text-2xl font-semibold text-[#1f2b3a] mb-2">
                    <?php echo $title; ?>
                </h3>
                <p class="text-[#1f2b3a] text-lg leading-[1.8rem]">
                    <?php echo $short_desc; ?>
                </p>
        </div>
        <?php endwhile; ?>
        <?php endif;?>
    </div>
</section>


            
<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>