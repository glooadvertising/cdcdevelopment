<div class="service-card" x-text="html">
    <img src="<?php the_post_thumbnail_url( );?>" alt="">

    <!-- Display the Title as a link to the Post's permalink. -->
    <div class="card-content">
        <h3><?php the_title(); ?></h3>
        <div class="entry">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>