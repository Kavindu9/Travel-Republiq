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
        <div class="service-carousel">
                <?php
                if(have_rows('our_services')) :
                    while( have_rows('our_services')) : the_row();
                        $image = get_sub_field('card_image');
                        $title = get_sub_field('card_title');
                        ?>

                    <!-- <div class="carousel-cell">  -->
                        <div class="carousel-cell rounded-[28px]" style="border-radius: 15px; padding: 10px; border: 1px solid #dfeae8;box-shadow:0 6px 20px rgba(0,0,0,.08); overflow:hidden;">
                            <!-- <a href="#"> -->
                            <div class="service-card">
                                <img class="rounded-md object-cover" src="<?php echo $image; ?>" />

                            <!-- </a>  -->
                                <div class="service-content text-center">
                                    <h5 class="font-title font-normal text-3xl md:text-2xl text-[#1f2b3a] mb-2 text-center">
                                        <?php echo $title; ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
            <?php endwhile; ?>
            <?php endif;?>
        </div>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">
        <h2 class="font-title text-4xl md:text-3xl font-normal text-[#1f2b3a] mb-8 tracking-wide text-center">
            Our Process
        </h2>
        <div class="lg:py-6 py-4 font-body text-xl font-normal leading-[2.2rem] text-center"><?php echo the_field('process_details'); ?></div>
        <div class="lg:py-6 py-4">
            <h2 class="font-title font-normal text-3xl md:text-4xl text-center"><?php echo esc_html( get_field('benefits_title') ); ?></h2>
        </div>
        <div class="lg:py-6 py-4">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
                <div class="bg-[#f5f5f5] p-7 rounded-lg text-justify font-body text-xl font-normal leading-[2.2rem]" style="min-width: 280px;">
                    <?php echo the_field('benefits_details'); ?>
                </div>
                <div class="bg-[#f5f5f5] p-7 rounded-lg text-white flex flex-col justify-center" style="min-width: 280px; background: linear-gradient(to right, #16717B, #80915A);">
                    <h2 class="font-title text-2xl" style="margin-bottom:20px; font-size:32px;">VIP Benefits</h2>
                    <?php
                if(have_rows('benefits')) :
                    while( have_rows('benefits')) : the_row();
                        $be_image = get_sub_field('benefit_icon');
                        $be_title = get_sub_field('benefit_name');
                        ?>
                    
                        <div style="display:flex; align-items:center; margin-bottom:15px;" bis_skin_checked="1">
                            <div style="width:40px; height:40px; border-radius:50%; background:#ffffff; display:flex; align-items:center; justify-content:center; margin-right:15px;" bis_skin_checked="1">
                                <img src="<?php echo $be_image; ?>" style="width:24px; height:24px; object-fit:contain;">
                            </div>
                            <span class="font-body font-normal text-2xl" style="font-size:15px;"><?php echo $be_title; ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif;?>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">        
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
            <div class="rounded-md">
                <?php if( get_field('ex_image') ): ?>
                    <img src="<?php the_field('ex_image'); ?>" />
                <?php endif; ?>
            </div>
            <div>
                <h3 class="text-left font-title text-5xl md:text-4xl" style="margin-bottom: 10px;"><?php echo esc_html( get_field('ex_title') ); ?></h3>
                <div class="text-justify font-body text-xl" style="color: #555; line-height: 1.6;"><?php the_field('exp_desc'); ?></div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2.5 py-3" style="max-width: 600px;">
                    <?php
                        if(have_rows('experience_fearures')) :
                            while( have_rows('experience_fearures')) : the_row();
                                $exp_image = get_sub_field('exp_icon');
                                $exp_title = get_sub_field('exp_name');
                    ?>
                        <div style="display: flex; align-items: center;" bis_skin_checked="1">
                            <div style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-right: 12px;" bis_skin_checked="1">
                                <img src="<?php echo $exp_image; ?>">
                            </div>
                            <span class="font-body text-xl" style="font-size:16px; font-weight:500;"><?php echo $exp_title; ?></span>
                        </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">     
        <h2 class="font-title text-5xl md:text-4xl" style="font-size: 32px; margin-bottom: 5px;"><?php echo esc_html( get_field('experience_feature_title') ); ?></h2>
        <div class="text-xl font-body prop" style="margin-bottom: 20px;">
            <?php the_field('experience_feature_des'); ?>            
        </div>

        <div class="grid lg:grid-cols-2 lg:grid-rows-5 flex flex-wrap gap-4 p-7" style="
            max-width: 1800px;
            width: 100%;
            height: auto;" bis_skin_checked="1">
            <!-- <div style="flex: 1 1 300px;" bis_skin_checked="1"> -->
                <?php
                    if(have_rows('exclusive_advantages')) :
                        while( have_rows('exclusive_advantages')) : the_row();
                            $advantages = get_sub_field('advantages');
                ?>

                    <div class="flex items-center" style="margin-bottom: 10px;" bis_skin_checked="1">
                        <div style="width: 18px; height: 18px; border-radius: 50%; border: 2px solid #16711B; display: flex; align-items: center; justify-content: center; margin-right: 10px;" bis_skin_checked="1">
                        <img src="https://aquamarine-hippopotamus-184653.hostingersite.com/wp-content/uploads/2026/07/17550627013288.webp" style="width: 14px; height: 14px;">
                        </div>
                        <span class="font-body text-xl" style="font-size: 16px;"><?php echo $advantages; ?></span>
                    </div>
                <?php endwhile; ?>
            <?php endif;?>

            <!-- </div> -->
        </div>
    </div>

  </div>
    </div>
</section>

<style>
.service-carousel {
    margin: 60px auto;
}

.service-carousel .carousel-cell {
    width: 33.333%;
    padding: 15px;
    box-sizing: border-box;
}

.service-card {
    display: flex;
    flex-direction: column;
    height: 380px;
    background: #fff;
}

.carousel-cell:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.service-card img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    flex-shrink: 0;
}

.service-content {
    padding: 15px;
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
}

.service-content h5 {
    margin: 0;
}


/* =========================
   TABLET
   ========================= */

@media (max-width: 1024px) {

    .service-carousel .carousel-cell {
        width: 50%;
    }

}


/* =========================
   MOBILE
   ========================= */

@media (max-width: 768px) {

    .service-carousel .carousel-cell {
        width: 100%;
    }

    .service-card {
        height: 340px;
    }

    .service-card img {
        height: 220px;
    }

    .flickity-prev-next-button.previous {
        left: 5px;
    }

    .flickity-prev-next-button.next {
        right: 5px;
    }

}


/* =========================
   FLICKITY BUTTONS
   ========================= */

.flickity-button {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: #6F8E5B;
}

.flickity-button:hover {
    background: #5f7f4b;
}

.flickity-button-icon {
    fill: #fff;
}

.flickity-prev-next-button.previous {
    left: -30px;
}

.flickity-prev-next-button.next {
    right: -30px;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const carousels = document.querySelectorAll('.service-carousel');

    carousels.forEach(function (carousel) {

        let flkty;

        function getGroupCells() {

            if (window.innerWidth <= 768) {
                return 1;
            }

            if (window.innerWidth <= 1024) {
                return 2;
            }

            return 3;
        }

        function initFlickity() {

            if (flkty) {
                flkty.destroy();
            }

            flkty = new Flickity(carousel, {
                groupCells: getGroupCells(),
                contain: true,
                cellAlign: 'left',
                wrapAround: true,
                prevNextButtons: true,
                pageDots: true
            });

        }

        initFlickity();

        let resizeTimer;

        window.addEventListener('resize', function () {

            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(function () {
                initFlickity();
            }, 200);

        });

    });

});
</script>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>