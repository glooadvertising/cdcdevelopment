<?php get_header();?>
<div class="hero">
    <?php get_template_part( 'partials/page-hero' );?>
</div>

<section class="half">
    <div class="top-left"></div>
    <div class="bottom-right"></div>
    <div class="container">
        <div class="col-left">
            <div class="highlighted"><?php if(has_excerpt( )){the_excerpt();}?></div>
            <?php the_content();?>
        </div>
        <div class="col-right">
            <div class="framed-photo">
                <?php get_template_part( 'partials/slideshow' );?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>