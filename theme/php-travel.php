<?php 
/* 
    Template Name: Travel With Us Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'pagehero'); ?>

<section class="lg:py-12 py-6">
    <div class="max-w-screen-lg mx-auto px-4">
        <h2 class="font-title text-3xl md:text-4xl font-normal text-[#1f2b3a] mb-8 tracking-wide text-center">
            <?php echo esc_html( get_field('main_title') ); ?>
        </h2>
        <h5 class="font-body font-bold text-2xl md:text-xl text-[#24846b] mb-8 text-center"><?php echo esc_html( get_field('main_subtitle') ); ?></h5>
        <div class="font-body text-xl text-black">
            <?php the_field('main_details'); ?>
        </div>
        <div class="text-center py-4">
            <a href="<?php echo esc_attr( get_field('contact_url') ); ?>" class="font-body mt-2.5 text-white font-bold items-center gap-2" style="padding:10px 20px; background:linear-gradient(to right ,#0F6F7D,#798E5C); border:none; border-radius:5px 20px 5px 20px; font-size:clamp(13px, 2.2vw, 16px); cursor:pointer; display:inline-flex;text-decoration:none;">
                Contact Us
                <span class="arrow">↗</span>
            </a>
        </div>
    </div>
    <div class="lg:py-8 py-4">
        <div class="max-w-screen-lg mx-auto px-4">
            <?php 
            $galimages = get_field('image_grid');
            if( $galimages ): ?>
            <div class="lg:grid lg:grid-cols-3 flex gap-4">
                <?php foreach( $galimages as $image ): ?>
                    <div class="h-full">
                        <img src="<?php echo esc_url($image['url']); ?>" class="w-full h-full object-cover rounded-[9px] min-h-[200px]" />
                    </div>
                <?php endforeach; ?>
            </div>

            <?php endif; ?>  
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