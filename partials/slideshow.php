<?php if( have_rows('slider') ): ?>
    <ul class="gallery-slideshow">
    <?php while( have_rows('slider') ): the_row(); 
        ?>
        <li>
            <img src="<?php echo the_sub_field('slide'); ?>" alt="">
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
