<?php 
/* 
    Template Name: SPO Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>

<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">
        <div class="flex justify-center flex-wrap" style="gap:clamp(14px,2.4vw,28px);" bis_skin_checked="1">

            <?php
                if(have_rows('offer')) :
                    while( have_rows('offer')) : the_row();
                        $backg_image = get_sub_field('card_background_image');
                        $offer_title = get_sub_field('offer_name');
                        $offer_discount = get_sub_field('offer_discount');
                        $booking_link = get_sub_field('booking_url');
            ?>

            <!-- Card 1 -->
            <div class="relative overflow-hidden" style="flex:1 1 320px;border-radius:15px;box-shadow:0 2px 12px rgba(10,40,140,0.09); min-width:280px;" bis_skin_checked="1">
                <!-- gradient overlay -->
                <div class="absolute" style="inset:0; background: rgba(0, 0, 0, 0.55); pointer-events:none;" bis_skin_checked="1"></div>

                <!-- image (kept 16:9 feel) -->
                <img class="w-full object-cover block" src="<?php echo $backg_image; ?>" style="height: clamp(180px, 28vw, 300px);">

                <!-- badge -->
                <div class="absolute top-3 left-3 font-bold" style="background:#fff; color:#000; font-size:clamp(11px, 1.8vw, 13px);padding:6px 12px; border-radius:6px;" bis_skin_checked="1"><?php echo $offer_discount; ?>% OFF</div>

                <!-- text + button -->
                <div class="absolute bottom-4 left-4 right-4" style="color:#fff;" bis_skin_checked="1">
                    <div style="font-size: clamp(18px, 3.2vw, 28px); text-shadow: rgba(0, 0, 0, 0.26) 0px 2px 10px; line-height: 1.2; max-width: 20ch; text-align: left;" bis_skin_checked="1"><?php echo $offer_title; ?></div>

                    <a href="<?php echo $booking_link; ?>" class="mt-2.5 text-white font-bold items-center gap-2" style="padding:10px 20px; background:linear-gradient(to right ,#0F6F7D,#798E5C); border:none; border-radius:5px 20px 5px 20px; font-size:clamp(13px, 2.2vw, 16px); cursor:pointer; display:inline-flex;text-decoration:none;">
                    Book Now
                    <span class="arrow">↗</span>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
            <?php endif;?>

        </div>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="relative left-1/2 w-screen bg-cover bg-center flex items-center justify-center text-white align-center overflow-hidden" style="
        margin-left:-50vw;
        min-height: clamp(280px, 45vw, 560px);
        background-image: url('<?php echo the_field('special_offer_image'); ?>');
        padding: clamp(10px, 4vw, 24px);
        box-sizing: border-box;
        margin-top: clamp(20px, 5vw, 40px);" bis_skin_checked="1">
        
        <!-- Dark Overlay -->
        <div class="absolute" style="=inset: 0; background: rgba(0, 0, 0, 0.55); z-index: 1;" bis_skin_checked="1"></div>
        
        <!-- Content -->
        <div class="relative" style="width: min(90%, 980px); z-index: 2;" bis_skin_checked="1">
        <h1 class="font-medium text-center" style="font-size: clamp(20px, 5vw, 42px); margin: 0 0 clamp(8px, 2vw, 16px) 0; line-height:1.15;">
            <?php echo the_field('special_offer_title'); ?>
        </h1>
            <p class="text-center" style="font-size: clamp(13px, 2.4vw, 18px); line-height: 1.65; margin: 0 0 clamp(12px, 2.6vw, 20px) 0;"><?php echo the_field('special_offer_details'); ?></p>
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