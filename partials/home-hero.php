<?php
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
?>

<div class="home-hero">
    <?php if(has_post_thumbnail( )){?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php if( $alt ): echo $alt; endif; ?>">
    <?php } ?>
</div>
<div class="container-wrapper">
    <div class="bottom-right"></div>
    <div class="container">
        <h1><?php bloginfo('title');?></h1>
        <h2><?php bloginfo('description')?></h2>
    </div>
</div>