<div class="site-hero relative h-[540px] overflow-hidden">

<?php 
    $video = get_field('hero_video');
?>
    <video autoplay="" loop="" muted="" playsinline="" class="w-full h-[540px] object-cover" >
        <source type="video/mp4" src="<?php echo $video; ?>">
        Your browser does not support this video.
    </video>


    <div class="hero-wrap absolute inset-0 w-full h-full grid place-items-center">
        <div class="font-title text-white container max-w-screen-xl h-[20%] w-2/4 grid place-items-center  mx-auto my-auto px-4 sm:px-2 border-t-2 border-b-2 border-white">
            <h1 class="font-title font-normal text-center text-4xl text-white">DISCOVER MALDIVES WITH US</h1>
        </div>
    </div>
</div>