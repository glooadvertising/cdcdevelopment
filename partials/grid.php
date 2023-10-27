<div class="grid">
<?php $query = new WP_Query( 'post_type=service&order=ASC' ); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="service-card">
        <img src="<?php the_post_thumbnail_url( );?>" alt="">

        <!-- Display the Title as a link to the Post's permalink. -->
        <div class="card-content">
            <h3><?php the_title(); ?></h3>
            <div class="entry">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>

        <?php endwhile; 
        wp_reset_postdata();
        else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>