<section class="lg:py-10 py-8">
    <div class="max-w-screen-lg mx-auto px-4 ">
        <div class="grid grid-cols-3 gap-8">
            <?php while( have_rows('cards') ): the_row(); 
                    $card_title = get_sub_field('card_title');
                    $card_details = get_sub_field('card_details');
                    $card_image = get_sub_field('card_image');
            ?>

                <div class="d-flex" bis_skin_checked="1">
                    <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0px 4px 6px rgba(0,0,0,0.1); text-align: center; background: #fff; padding-bottom: 15px; width: 100%; display: flex; flex-direction: column; justify-content: space-between;" bis_skin_checked="1">
                        <div class="m-3.5" bis_skin_checked="1">
                            <h3 style=""><img class="object-cover aspect-[9/11] rounded-md" src="<?php echo esc_url($card_image); ?>"></h3>
                            <?php if($card_title): ?>
                                <h3 class="font-body font-normal text-2xl m-4" style="color: rgb(34, 34, 34);"><?php echo esc_html($card_title); ?></h3>
                            <?php endif; ?>    
                            <hr style="width: 80%; margin: 0 auto 15px; border: 1.5px solid #00000078; border-radius: 5px;">
                            <?php if($card_details): ?>
                                <div class="font-body text-xl font-normal" style="letter-spacing: -0.03em; padding: 0px 15px 15px; color: #000;">
                                    <?php echo $card_details; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            <!-- <div class="max-w-sm rounded overflow-hidden shadow-lg">

                <?php if($card_image): ?>
                    <img class="w-full aspect-[9/11]" src="<?php echo esc_url($card_image); ?>">
                <?php endif; ?> 

                <div class="px-6 py-4">

                    <?php if($card_title): ?>
                        <h2 class="font-title font-bold text-xl mb-2"><?php echo esc_html($card_title); ?></h2>
                    <?php endif; ?>

                    <?php if($card_details): ?>
                        <p class="font-body text-gray-700 text-base">
                            <?php echo $card_details; ?>
                        </p>
                    <?php endif; ?>

                </div>

            </div> -->


            <?php endwhile; ?>
        </div>

    </div>
</section>