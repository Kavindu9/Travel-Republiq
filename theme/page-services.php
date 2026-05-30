<?php 
/* 
    Template Name: Services Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>


<section class="lg:py-12 py-6">
    <div class="max-w-screen-lg mx-auto px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                if(have_rows('our_services')) :
                    while( have_rows('our_services')) : the_row();
                        $image = get_sub_field('card_image');
                        $title = get_sub_field('card_title');
                        ?>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center px-6 py-8 bg-[#e3eded] rounded-[28px]" style="background: #e3eded;box-shadow: 0 2px 12px rgba(36, 132, 107, 0.09);">
                            <?php if ($image): ?>
                                <div style="background:linear-gradient(#16717B,#80915A); width:66px; height:66px; display:flex; align-items:center; justify-content:center; border-radius:50%; margin:0 auto 12px auto;" bis_skin_checked="1">
                                    <span style="font-size:20px; color:#fff;"><img src="<?php echo $image; ?>" alt="Icon" class="w-1/2 h-1/2 object-cover"></span>
                                </div>
                            <?php endif; ?>
                            <h3 class="text-2xl font-normal text-[#1f2b3a] mb-2">
                                <?php echo $title; ?>
                            </h3>
                        </div>
                    </div>
            <?php endwhile; ?>
            <?php endif;?>
            </div>
        </div>
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