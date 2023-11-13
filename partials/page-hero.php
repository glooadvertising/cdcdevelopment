<?php
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
?>

<?php if(!is_page('featured-projects')) {?>
<div class="page-hero" data-aos="fade-up" data-aos-anchor-placement="center-center">
    <?php if(has_post_thumbnail( )){?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php if( $alt ): echo $alt; endif; ?>">
    <?php } ?>
</div>
<?php }?>
<div class="container-wrapper centered" data-aos="fade">
    <div class="bottom-right"></div>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php if(is_page('housing')) { ?>
            <h2><?php the_excerpt();?></h2>
        <?php } ?>
    </div>
</div>
