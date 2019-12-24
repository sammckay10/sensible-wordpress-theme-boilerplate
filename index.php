<?php if (have_posts()) { ?>
    <div class="container">
        <?php while (have_posts()) { ?>
            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
        <?php } ?>
    </div>
<?php } ?>
