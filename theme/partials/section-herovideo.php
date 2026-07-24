<div class="site-hero relative h-80 overflow-hidden">

<?php 
    $video = get_field('hero_video');
?>
    <video autoplay="" loop="" muted="" playsinline="" class="w-full h-80 object-cover" >
        <source type="video/mp4" src="<?php echo $video; ?>">
        Your browser does not support this video.
    </video>


    <div class="hero-wrap absolute inset-0 w-full h-full grid place-items-center">
        <div class="nova-branding text-white container max-w-screen-xl h-[35%] w-2/4 grid place-items-center  mx-auto my-auto px-4 sm:px-2 border-t-4 border-b-4 border-white">
            <h1 class="text-center text-4xl text-white">DISCOVER MALDIVES WITH US</h1>
        </div>
    </div>
</div>