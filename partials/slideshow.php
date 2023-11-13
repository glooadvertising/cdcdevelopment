<?php if( have_rows('slider') ): ?>
    <ul class="gallery-slideshow">
    <?php while( have_rows('slider') ): the_row(); 
        ?>
        <li>
            <img src="<?php echo the_sub_field('slide'); ?>" alt="">
            <?php if( get_sub_field('slide_caption') ): ?>
            <div class="slide-caption">
                <?php echo the_sub_field('slide_caption');?>
            </div>
            <?php endif; ?>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
