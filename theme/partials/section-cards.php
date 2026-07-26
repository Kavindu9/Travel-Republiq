<section class="lg:py-10 py-8">
    <div class="max-w-screen-lg mx-auto px-4 ">
        <div class="grid grid-cols-3 gap-8">
            <?php while( have_rows('cards') ): the_row(); 
                    $card_title = get_sub_field('card_title');
                    $card_details = get_sub_field('card_details');
                    $card_image = get_sub_field('card_image');
            ?>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">

                <?php if($card_image): ?>
                    <img class="w-full" src="<?php echo esc_url($card_image); ?>">
                <?php endif; ?> 

                <div class="px-6 py-4">

                    <?php if($card_title): ?>
                        <h2 class="font-bold text-xl mb-2"><?php echo esc_html($card_title); ?></h2>
                    <?php endif; ?>

                    <?php if($card_details): ?>
                        <p class="text-gray-700 text-base">
                            <?php echo esc_html($card_details); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </div>


            <?php endwhile; ?>
        </div>

    </div>
</section>