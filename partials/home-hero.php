<?php
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
?>

<div class="home-hero" data-aos="fade-up" data-aos-anchor-placement="center-center">
    <?php if(has_post_thumbnail( )){?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php if( $alt ): echo $alt; endif; ?>">
    <?php } ?>
</div>
<div class="container-wrapper" data-aos="fade">
    <div class="bottom-right" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
    <div class="container">
        <h1><?php bloginfo('title');?></h1>
        <h2><?php bloginfo('description')?></h2>
    </div>
</div>