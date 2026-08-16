<?php 
/* 
    Template Name: SPO Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>

<section class="lg:py-10 py-5">
    <div class="max-w-screen-lg mx-auto px-4">
        <!-- <div class="flex justify-center flex-wrap" style="gap:clamp(14px,2.4vw,28px);" bis_skin_checked="1"> -->

            <?php
                // if(have_rows('offer')) :
                //     while( have_rows('offer')) : the_row();
                //         $backg_image = get_sub_field('card_background_image');
                //         $offer_title = get_sub_field('offer_name');
                //         $offer_discount = get_sub_field('offer_discount');
                //         $booking_link = get_sub_field('booking_url');
            ?>

            <!-- Card 1 -->
            <!-- <div class="relative overflow-hidden" style="flex:1 1 320px;border-radius:15px;box-shadow:0 2px 12px rgba(10,40,140,0.09); min-width:280px;" bis_skin_checked="1">
                
                <div class="absolute" style="inset:0; background: rgba(0, 0, 0, 0.55); pointer-events:none;" bis_skin_checked="1"></div>

                
                <img class="w-full object-cover block" src="<?php echo $backg_image; ?>" style="height: clamp(180px, 28vw, 300px);">

                
                <div class="font-body text-base absolute top-3 left-3 font-bold" style="background:#fff; color:#000;padding:6px 12px; border-radius:6px;" bis_skin_checked="1"><?php echo $offer_discount; ?>% OFF</div>

                
                <div class="absolute bottom-4 left-4 right-4" style="color:#fff;" bis_skin_checked="1">
                    <div class="font-body font-normal text-2xl md:text-3xl" style="text-shadow: rgba(0, 0, 0, 0.26) 0px 2px 10px; line-height: 1.2; max-width: 20ch; text-align: left;" bis_skin_checked="1"><?php echo $offer_title; ?></div>

                    <a href="<?php echo $booking_link; ?>" class="font-body text-xl leading-[2.2rem] mt-2.5 text-white font-bold items-center gap-2" style="padding:10px 20px; background:linear-gradient(to right ,#0F6F7D,#798E5C); border:none; border-radius:5px 20px 5px 20px; font-size:clamp(13px, 2.2vw, 16px); cursor:pointer; display:inline-flex;text-decoration:none;">
                    Book Now
                    <span class="arrow">↗</span>
                    </a>
                </div>
            </div> -->
            
        <?php //endwhile; ?>
            <?php //endif;?>

        <!-- </div> -->

        <div class="space-y-16">
          
            <?php 
              $rows = get_field('offer');
              if (have_rows('offer')):
                $x = 1;
                  while( have_rows('offer') ) : the_row();
                      $offer_img = get_sub_field('card_background_image');
                      $offer_name = get_sub_field('offer_name');
                      $offer_desc = get_sub_field('package_description');
                      $date = get_sub_field('date');
                      $no_nights = get_sub_field('nights');
                      $includes = get_sub_field('includes');
                      $Link = get_sub_field('booking_url');

                      if($x % 2 == 1) {
          ?>

            <div class="flex flex-col lg:flex-row bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="lg:w-1/2">
                  <img
                    src="<?php echo $offer_img; ?>"
                    class="h-full w-full object-cover"
                  />
                </div>
                <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                  <h3 class="font-title lg:text-2xl text-3xl font-normal text-gray-900 mb-3">
                  <?php echo $offer_name; ?>
                  </h3>
                  <?php if($offer_desc):  ?>
                    <p class="text-gray-600 mb-6 font-body lg:text-base text-lg prose"><?php echo $offer_desc; ?></p>
                  <?php endif; ?>
                  <div class="space-y-3 text-sm text-gray-600 py-4">
                        <?php if($date):  ?>
                            <div class="flex items-center font-body lg:text-base text-lg">
                                <svg width="800px" class="h-5 w-5 mr-2" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 10H17M7 14H12M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Valid until <?php echo $date; ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if($no_nights):  ?>
                            <div class="flex items-center font-body lg:text-base text-lg">
                            <!-- <ClockIcon class="h-5 w-5 mr-2 text-amber-500" /> -->
                                <svg class="h-5 w-5 mr-2" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?php echo $no_nights; ?> nights minimum</span>
                            </div>
                        <?php endif; ?>
                  </div>
                    <div class="mb-8">
                        <h4 class="font-body lg:text-lg text-base font-medium text-gray-900 mb-4">
                            PACKAGE INCLUDES
                        </h4>
                        <ul class="space-y-2 pros font-body lg:text-base text-lg prose">
                            <?php echo $includes; ?>
                        </ul>
                    </div>
                  <div class="flex items-center justify-between mt-auto">
                    <a href="<?php echo $Link; ?>" class="inline-flex items-center px-4 py-2 border border-transparent font-body lg:font-base text-lg font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700">
                      Book Now
                    </a>
                  </div>
                </div>
            </div>

              <?php }else{ ?>
                <div class="flex flex-col lg:flex-row-reverse bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="lg:w-1/2">
                    <img
                        src="<?php echo $offer_img; ?>"
                        class="h-full w-full object-cover"
                    />
                    </div>
                    <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                    <h3 class="font-title lg:text-2xl text-3xl font-normal text-gray-900 mb-3">
                    <?php echo $offer_name; ?>
                    </h3>
                    <?php if($offer_desc):  ?>
                        <p class="text-gray-600 mb-6 font-body lg:text-base text-lg prose"><?php echo $offer_desc; ?></p>
                    <?php endif; ?>
                    <div class="space-y-3 text-sm text-gray-600">
                        <?php if($date):  ?>
                            <div class="flex items-center font-body lg:text-base text-lg">
                              <svg width="800px" class="h-5 w-5 mr-2" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7 10H17M7 14H12M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            <span>Valid until <?php echo $date; ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if($no_nights):  ?>
                            <div class="flex items-center font-body lg:text-base text-lg">
                              <svg class="h-5 w-5 mr-2" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            <span><?php echo $no_nights; ?> nights minimum</span>
                            </div>
                        <?php endif; ?>
                    </div>
                        <div class="mb-8">
                            <h4 class="font-body lg:text-lg text-base font-medium text-gray-900 mb-4">
                                PACKAGE INCLUDES
                            </h4>
                            <ul class="space-y-2 pros font-body lg:text-base text-lg prose">
                                <?php echo $includes; ?>
                            </ul>
                        </div>
                    <div class="flex items-center justify-between mt-auto">
                        <a href="<?php echo $Link; ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700">
                        Book Now
                        </a>
                    </div>
                    </div>
                </div>

              <?php } ?>
                <?php $x++; 
            endwhile;
        endif;?>
          
            
        </div>



    </div>
</section>
<section class="lg:py-10 py-5">
    <div class="relative left-1/2 w-screen bg-cover bg-center flex items-center justify-center text-white align-center overflow-hidden" style="
        margin-left:-50vw;
        min-height: clamp(280px, 45vw, 465px);
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
        <h1 class="font-title font-normal text-4xl md:text-3xl text-center" style="margin: 0 0 clamp(8px, 2vw, 16px) 0; line-height:1.15;">
            <?php echo the_field('special_offer_title'); ?>
        </h1>
            <p class="font-body text-xl leading-[2.2rem] text-center" style="line-height: 1.65; margin: 0 0 clamp(12px, 2.6vw, 20px) 0;"><?php echo the_field('special_offer_details'); ?></p>
        </div>
  </div>
</section>

<section>
    <div class="news-panel bg-[#eef6f6] rounded-4 p-4 p-lg-5 my-4">
        <h2 class="font-title font-normal text-2xl md:text-3xl  text-center mb-4 mb-lg-5"><?php echo esc_html( get_field('page_headline') ); ?></h2>

            <div class="flex flex-col flex-wrap mt-6 mx-6 items-start gap-6 align-items-start">
                <div class="flex flex-col gap-5">

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
                                        <h3 class="font-title font-normal md:text-2xl text-3xl mb-2" style="font-weight:700;">
                                            <?php echo $news_title; ?>
                                        </h3>
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

                
                    <div id="page-cover" class="page-cover w-full relative bg-cover bg-no-repeat bg-center" style="
                        height: 350px;
                        background-image: url('<?php the_field('news_image');  ?>');
                        background-color: #000000;
                    ">
                    </div>
                



                    <!-- <div class="ratio relative w-full ratio-[4/3] rounded-4 overflow-hidden shadow-sm">
                        <?php if( get_field('news_image') ): ?>
                            <img src="<?php the_field('news_image'); ?>" alt="News Hero" class="w-100 h-500" style="object-fit:cover;">
                        <?php endif; ?>    
                    </div> -->
                </div>
            </div>
        </div>

</section>

<style>

.top-banner-section {
  display: grid;
  grid-template-columns: 1fr; 
  grid-template-rows: 350px; 
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  align-content: center;
  justify-content: center;

  .banner-image-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
  .banner-overlay-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
  .banner-text-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
}


.banner-image {
  display: grid;
  min-width: 350px; 
  width: 100%;
  height: 100%;
  object-fit: cover; 
}


.banner-overlay-div {
  display: grid;
  max-width: 100%;
  background: black;
  background: linear-gradient(
    60deg,
    rgba(0, 0, 0, 0.7777485994397759) 30%,
    rgba(255, 255, 255, 0) 100%
  );
}


.banner-text-div {
  display: grid;
  align-items: center;
  margin-left: 15px;
  margin-right: 15px;
}


.banner-h1-text {
  font-size: calc(10pt + 0.15vw);
  letter-spacing: 0.05em;
  font-weight: bolder;
  text-transform: uppercase;
  color: white;
}

.banner-body-text {
  font-size: calc(10pt + 0.15vw);
  margin-top: 0.5em;
  color: white;
  text-decoration: none;

  &:hover {
    color: white;
  }
  &:visited {
    color: white;
  }
  &:active {
    color: white;
  }
}

.banner-btn {
  margin-top: 1em;
}

.banner-btn-item {
  font-size: calc(8pt + 0.15vw); 
  padding-top: calc(0.5em + 0.08vw);
  padding-bottom: calc(0.5em + 0.08vw);
  padding-left: calc(0.5em + 0.08vw);
  padding-right: calc(0.5em + 0.08vw);
  color: blue;
  background-color: white;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  border: 1px solid white;

  &:link {
    text-decoration: none;
  }
  &:visited {
    text-decoration: none;
  }
}



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