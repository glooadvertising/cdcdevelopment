<!-- <ul class="gallery-slideshow">
    <li><img src="https://picsum.photos/600/450?image=494"/></li>
    <li><img src="https://picsum.photos/600/450?image=454"/></li>
    <li><img src="https://picsum.photos/600/450?image=435"/></li>
    <li><img src="https://picsum.photos/600/450?image=433"/></li>
    <li><img src="https://picsum.photos/600/450?image=407"/></li>
    <li><img src="https://picsum.photos/600/450?image=401"/></li>
</ul> -->

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
