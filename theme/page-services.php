<?php 
/* 
    Template Name: Services Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>


<section class="lg:py-12 py-6">
    <div class="max-w-screen-lg mx-auto px-4">
        <!-- Flickity Slider -->
        <div class="carousel" data-flickity='{ "groupCells": true }'>
                <?php
                if(have_rows('our_services')) :
                    while( have_rows('our_services')) : the_row();
                        $image = get_sub_field('card_image');
                        $title = get_sub_field('card_title');
                        ?>

                    <!-- <div class="carousel-cell"> -->
                        <div class="carousel-cell block max-w-sm border border-default rounded-base shadow-xs">
                            <a href="#">
                                <img class="rounded-t-base" src="<?php echo $image; ?>" alt="" />
                            </a>
                            <div class="p-6 text-left">
                                <h3 class="text-2xl font-normal text-[#1f2b3a] mb-2">
                                    <?php echo $title; ?>
                                </h3>
                            </div>
                        </div>
                    <!-- </div> -->
            <?php endwhile; ?>
            <?php endif;?>
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