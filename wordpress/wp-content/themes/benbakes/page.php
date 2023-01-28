<?php get_header(); ?>

<main id="workshop-page">
    <?php 
        if (have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                <div class="flex-wrapper">
                    <div class="flex-container">
                        <h2><?php the_title() ?></h2>
                        <p class="subheadline"> <?= get_post_custom_values( 'subheadline' )[0]; ?> </p>

                        <?php the_content(); ?>
                    </div>

                    <div class="flex-container">
                        <?php the_post_thumbnail() ?>
                    </div>
                </div>
                <?php 
            }
        }
         ?>
</main>

<?php get_footer(); ?>