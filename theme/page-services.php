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
        <div class="service-carousel" 
         data-flickity='{
            "groupCells": true,
            "groupCells": 3,
            "contain": true,
            "cellAlign": "left",
            "wrapAround": true
        }'>
                <?php
                if(have_rows('our_services')) :
                    while( have_rows('our_services')) : the_row();
                        $image = get_sub_field('card_image');
                        $title = get_sub_field('card_title');
                        ?>

                    <!-- <div class="carousel-cell">  -->
                        <div class="carousel-cell rounded-[28px]" style="border-radius: 15px; padding: 20px; border: 1px solid #dfeae8;box-shadow:0 6px 20px rgba(0,0,0,.08); overflow:hidden;">
                            <!-- <a href="#"> -->
                            <div class="service-card">
                                <img class="rounded-md object-cover" src="<?php echo $image; ?>" />

                            <!-- </a>  -->
                                <div class="service-content">
                                    <h5 class="text-xl font-normal text-[#1f2b3a] mb-2">
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
        <h2 class="text-4xl md:text-5xl font-normal text-[#1f2b3a] mb-8 tracking-wide text-center">
            Our Process
        </h2>
        <div class="lg:py-6 py-4 text-center"><?php echo the_field('process_details'); ?></div>
        <div class="lg:py-6 py-4">
            <h2 class="text-3xl text-center"><?php echo esc_html( get_field('benefits_title') ); ?></h2>
        </div>
        <div class="lg:py-6 py-4">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
                <div class="bg-[#f5f5f5] p-7 rounded-lg text-justify" style="min-width: 280px;">
                    <?php echo the_field('benefits_details'); ?>
                </div>
                <div class="bg-[#f5f5f5] p-7 rounded-lg text-white flex flex-col justify-center" style="min-width: 280px; background: linear-gradient(to right, #16717B, #80915A);">
                    <h2 style="margin-bottom:20px; font-size:32px;">VIP Benefits</h2>
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
                            <span style="font-size:15px;"><?php echo $be_title; ?></span>
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
                <h3 class="text-left" style="font-size: 32px; margin-bottom: 10px;"><?php echo esc_html( get_field('ex_title') ); ?></h3>
                <div class="text-justify" style="font-size: 16px; color: #555; line-height: 1.6;"><?php the_field('exp_desc'); ?></div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2.5" style="max-width: 600px;">
                    <?php
                        if(have_rows('experience_fearures')) :
                            while( have_rows('experience_fearures')) : the_row();
                                $exp_image = get_sub_field('exp_icon');
                                $exp_title = get_sub_field('exp_name');
                    ?>
                        <div style="display: flex; align-items: center;" bis_skin_checked="1">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(#16717B, #80915A); display: flex; align-items: center; justify-content: center; margin-right: 12px;" bis_skin_checked="1">
                                <img src="<?php echo $exp_image; ?>">
                            </div>
                            <span style="font-size:16px; font-weight:500;"><?php echo $exp_title; ?></span>
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
        <h2 style="font-size: 32px; margin-bottom: 5px;"><?php echo esc_html( get_field('experience_feature_title') ); ?></h2>
        <div class="text-lg prop" style="margin-bottom: 20px;">
            <?php the_field('experience_feature_des'); ?>            
        </div>
    </div>
</section>

<style>
.service-carousel{
    margin:60px auto;
}

.carousel-cell{
    width:380px;
    margin-right:32px;
}

.service-carousel .carousel-cell{
    width:33.333%;
    padding:15px;
}

.service-card{
    display:flex;
    flex-direction:column;

    height:420px;      /* Fixed card height */
    background:#fff;
}

.carousel-cell:hover{

    transform:translateY(-6px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);

}

.service-card img{
    width:100%;
    height:280px;
    object-fit:cover;
    flex-shrink:0;
}

.service-content{
    padding:24px;
    flex:1;
    display:flex;
    align-items:flex-start;
}

.service-content h3{
    font-size:42px;
    line-height:1.15;
    font-weight:700;
    margin:0;
}

.flickity-button{

    width:65px;
    height:65px;
    border-radius:50%;
    background:#6F8E5B;

}

.flickity-button:hover{

    background:#5f7f4b;

}

.flickity-button-icon{

    fill:#fff;

}

.flickity-prev-next-button.previous{

    left:-30px;

}

.flickity-prev-next-button.next{

    right:-30px;

}

@media(max-width:1024px){

.service-carousel .carousel-cell{

    width:50%;

}

.service-content h3{

    font-size:30px;

}

}

@media(max-width:768px){

.service-carousel .carousel-cell{

    width:100%;

}

.service-card img{

    height:220px;

}

.service-content h3{

    font-size:24px;

}

.flickity-prev-next-button.previous{

    left:5px;

}

.flickity-prev-next-button.next{

    right:5px;

}

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