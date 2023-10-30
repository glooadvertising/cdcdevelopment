<?php $query_args = array(
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'post_type' => 'project',
    'order' => 'ASC'
);?>


<section class="tabs">
    <div class="container">
        <div class="tabs-wrapper" x-data="{
            tab: 1, 
            active: 'active', 
            inactive: 'inactive'}
            ">
            <div class="tabs-content">
                <?php $query = new WP_Query( $query_args ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="tab" x-show="tab === <?php echo get_post_field('menu_order', $post->ID);?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="caption">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php endwhile; 
                    wp_reset_postdata();
                    else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <ul class="buttons">
                <?php $query = new WP_Query( $query_args ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <li @click="tab = <?php echo get_post_field('menu_order', $post->ID);?>" x-bind:class="tab === <?php echo get_post_field('menu_order', $post->ID);?> ? active : inactive"><?php the_title(); ?></li>
                <?php endwhile; 
                    wp_reset_postdata();
                    else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>