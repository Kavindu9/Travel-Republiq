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
                <div class="font-body text-base absolute top-3 left-3 font-bold" style="background:#fff; color:#000;padding:6px 12px; border-radius:6px;" bis_skin_checked="1"><?php echo $offer_discount; ?>% OFF</div>

                <!-- text + button -->
                <div class="absolute bottom-4 left-4 right-4" style="color:#fff;" bis_skin_checked="1">
                    <div class="font-body font-normal text-2xl md:text-3xl" style="text-shadow: rgba(0, 0, 0, 0.26) 0px 2px 10px; line-height: 1.2; max-width: 20ch; text-align: left;" bis_skin_checked="1"><?php echo $offer_title; ?></div>

                    <a href="<?php echo $booking_link; ?>" class="font-body text-xl leading-[2.2rem] mt-2.5 text-white font-bold items-center gap-2" style="padding:10px 20px; background:linear-gradient(to right ,#0F6F7D,#798E5C); border:none; border-radius:5px 20px 5px 20px; font-size:clamp(13px, 2.2vw, 16px); cursor:pointer; display:inline-flex;text-decoration:none;">
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
        background: linear-gradient(rgba(0, 0, 0, 0.6),
        rgba(0, 0, 0, 0.6)
        ),url('<?php echo the_field('special_offer_image'); ?>');
        padding: clamp(10px, 4vw, 24px);
        box-sizing: border-box;
        margin-top: clamp(20px, 5vw, 40px);" bis_skin_checked="1">
        
        <!-- Dark Overlay -->
        <div class="absolute" style="=inset: 0; background: #000000a6; z-index: 1;" bis_skin_checked="1"></div>
        
        <!-- Content -->
        <div class="relative" style="width: min(90%, 980px); z-index: 2;" bis_skin_checked="1">
        <h1 class="font-body font-normal text-2xl md:text-3xl text-center" style="margin: 0 0 clamp(8px, 2vw, 16px) 0; line-height:1.15;">
            <?php echo the_field('special_offer_title'); ?>
        </h1>
            <p class="font-body text-xl leading-[2.2rem] text-center" style="line-height: 1.65; margin: 0 0 clamp(12px, 2.6vw, 20px) 0;"><?php echo the_field('special_offer_details'); ?></p>
        </div>
  </div>
</section>

<section>
    <div class="news-panel bg-[#eef6f6] rounded-4 p-4 p-lg-5 my-4">
        <h2 class="font-body font-normal text-2xl md:text-3xl  text-center mb-4 mb-lg-5"><?php echo esc_html( get_field('page_headline') ); ?></h2>

            <div class="flex flex-wrap mt-6 mx-6 items-start gap-6 align-items-start">
                <div class="col-lg-7">

            <?php
                if(have_rows('news_posts')) :
                    while( have_rows('news_posts')) : the_row();
                        $news_title = get_sub_field('news_title');
                        $news_des = get_sub_field('news_details');
                        $news_link = get_sub_field('news_url');
            ?>

                    <a href="<?php echo $news_link; ?>" class="text-decoration-none text-reset">
                        <div class="bg-white rounded-4 shadow-sm p-3 p-lg-4 mb-3">
                            <div class="d-flex gap-3">
                                <div class="flex-grow-1">
                                    <h5 class="font-title font-semibold text-xl mb-2" style="font-weight:700;">
                                        <?php echo $news_title; ?>
                                    </h5>
                                    <p class="font-body text-xl leading-[2.2rem] mb-2 text-muted" style="font-weight:500;">
                                        <?php echo $news_des; ?>
                                    </p>
                                    <div class="small font-body text-base leading-[2.2rem]" style="color:#0f766e"><?php the_date( 'd M y', '', '' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
            <?php endwhile; ?>
            <?php endif;?>
                                                                                                    
                    <div class="mt-4 d-flex justify-content-center"></div>
                </div>

                <div class="col-lg-5" style="">
                    <div class="ratio relative w-full ratio-[4/3] rounded-4 overflow-hidden shadow-sm">
                        <?php if( get_field('news_image') ): ?>
                            <img src="<?php the_field('news_image'); ?>" alt="News Hero" class="w-100 h-500" style="object-fit:cover;">
                        <?php endif; ?>    
                    </div>
                </div>
            </div>
        </div>

</section>

<style>
    @media (min-width: 992px) {
        .col-lg-5 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }
    }

    /* .ratio::before {
        display: block;
        padding-top: var(--bs-aspect-ratio);
        content: "";
    } */

    .ratio>* {
        /* position: absolute; */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
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