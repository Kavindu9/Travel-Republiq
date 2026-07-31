<?php 
//$images = have_rows('home_text_slider');
if( have_rows('home_slider') ): ?>
    <!-- <div class="swiper mySwiper h-80" style="background-image: url(<?php //the_field('background_image');  ?>)"> -->
        <div class="hero-carousel" data-flickity='{
                "wrapAround": true,
                "autoPlay": 5000,
                "pageDots": true,
                "prevNextButtons": true,
                "imagesLoaded": true,
                "adaptiveHeight": false
        }'>
            <?php while( have_rows('home_slider') ): the_row(); 
                $heading = get_sub_field('headline');
                $subheading = get_sub_field('sub_headline');
                $image = get_sub_field('image');
            ?>
            
                <div class="carousel-cell">

                    <?php if($image): ?>

                        <img src="<?php echo esc_url($image); ?>" >

                    <?php endif; ?>

                    <div class="overlay"></div>

                    <div class="slide-content">

                        <?php if($heading): ?>
                            <h2 class="font-title text-2xl text-white"><?php echo esc_html($heading); ?></h2>
                        <?php endif; ?>

                        <?php if($subheading): ?>
                            <p class="font-body text-lg text-white"><?php echo esc_html($subheading); ?></p>
                        <?php endif; ?>

                        <a href="<?php echo site_url('/contact'); ?>" class="hero-btn font-body text-base">
                            Contact Us
                            <span class="arrow">↗</span>
                        </a>

                    </div>

                </div>

            <?php endwhile; ?>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    <!-- </div> -->
<?php endif; ?>


<style>
    .hero-carousel{
        background:#000;
    }

    .hero-carousel .carousel-cell{
        width:100%;
        height:60vh;
        min-height:450px;
        position:relative;
        overflow:hidden;
    }

    .hero-carousel .carousel-cell img{
        width:100%;
        height:100%;
        object-fit:cover;
        display:block;
    }

    /* Dark Overlay */

    .hero-carousel .overlay{
        position:absolute;
        inset:0;
        background:rgba(0,0,0,.45);
    }

    /* Content */

    .hero-carousel .slide-content{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        z-index:2;
        text-align:center;
        width:90%;
        color:#fff;
    }

    .hero-carousel h2{
        font-size:70px;
        font-weight:300;
        letter-spacing:4px;
        margin-bottom:20px;
        text-transform:uppercase;
    }

    .hero-carousel p{
        font-size:30px;
        margin-bottom:35px;
        font-weight:300;
    }

    /* Button */

    .hero-btn{
        display:inline-flex;
        align-items:center;
        gap:12px;

        /* padding:15px 32px; */

        /* border:1px solid #fff;
        border-radius:50px;

        color:#fff;
        text-decoration:none;

        transition:.3s; */


    padding: 10px 25px;
    font-size: 14px;
    border: 1px solid white;
    background: transparent;
    color: white;
    border-radius: 5px 20px 5px 20px;
    cursor: pointer;
    transition: 0.3s;

    }

    .hero-btn:hover{
        background:#fff;
        color:#000;
    }

    .hero-btn .arrow{
        font-size:20px;
    }

    /* Arrows */

    .hero-carousel .flickity-prev-next-button{
        background:transparent;
        width:60px;
        height:60px;
    }

    .hero-carousel .flickity-button-icon{
        fill:#fff;
    }

    /* Dots */

    .hero-carousel .flickity-page-dots{
        bottom:40px;
    }

    .hero-carousel .flickity-page-dots .dot{
        width:50px;
        height:4px;
        border-radius:4px;
        background:#fff;
        opacity:.3;
    }

    .hero-carousel .flickity-page-dots .dot.is-selected{
        opacity:1;
    }

    @media(max-width:768px){

        .hero-carousel .carousel-cell{
            height:70vh;
            min-height:500px;
        }

        .hero-carousel h2{
            font-size:42px;
        }

        .hero-carousel p{
            font-size:22px;
        }

    }

</style>