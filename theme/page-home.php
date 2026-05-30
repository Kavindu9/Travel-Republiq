<?php 
/* 
    Template Name: Home Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'herovideo'); ?>
<?php get_template_part('partials/section', 'heroslider'); ?>
<?php //get_template_part('partials/section', 'adventure'); ?>
<?php //get_template_part('partials/section', 'villa'); ?>
<?php //get_template_part('partials/section', 'moments'); ?>
<?php //get_template_part('partials/section', 'underwater'); ?>
<?php //get_template_part('partials/section', 'card'); ?>
<?php //get_template_part('partials/section', 'faq'); ?>
<?php //get_template_part('partials/section', 'book'); ?>



<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>