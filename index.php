<?php get_header();?>
<section class="hero">
    <?php if( is_front_page() ) {
            get_template_part( 'partials/home-hero' );
        } elseif(!is_home()){
            get_template_part( 'partials/page-hero' );
        }
    ?>
</section>

<?php if(is_page(['home', 'about'])){?>
    <section class="half">
        <div class="top-left"></div>
        <div class="bottom-right"></div>
        <div class="container">
            <div class="col-left">
                <div class="highlighted"><?php if(has_excerpt( )){the_excerpt();}?></div>
                <?php the_content();?>
            </div>
            <div class="col-right">
                <div class="framed-photo"></div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if(is_page( 'services' )) {?>
    <section class="third">
        <div class="top-left"></div>

        <div class="container">
            <div><?php the_content( );?></div>
            <?php get_template_part( 'partials/grid' );?>
        </div>
    </section>
<?php }?>

<?php if(is_page( 'projects' )) {?>
    <?php get_template_part( 'partials/tabs' );?>
<?php } ?>

<?php if(is_page( 'about' )) { ?>
    <section class="grey-block">
        <div class="container">
            <p>
            From Management through to apprentices, CDC delivers timely and quality work throughout Southern Tasmania. The same quality and efficiency is provided by CDC to the local home owners’ market and private construction industry. We have undertaken and been successfully awarded Federal, State and Local Government projects.
            </p>
        </div>
    </section>
    <section class="two-videos">
        <div class="container">
            <video controls>
                <source src="https://cdcdevelopment.com.au/wp-content/uploads/2018/06/Vet-Pathways-Video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="https://cdcdevelopment.com.au/wp-content/uploads/2018/05/movie-2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
<?php }?>

<?php if(is_page('home')) {?>
    <section class="bgimage" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image6.jpg');">
        <div class="container">
            <div class="translucid-block">
                <p>
                    From the smallest maintenance jobs to large private and government construction work, we will ensure quality work and an attention to detail and to your needs.
                </p>
                <ul>
                    <strong>
                        Our products and services include:
                    </strong>
                    <li>Commercial work, particularly government and private schools, aged care facilities, hospitals and various store fronts</li>
                    <li>Domestic housing, decks and renovations</li>
                    <li>Heritage work, renovations and restoration</li>
                    <li>Construction of large scale private and government buildings, which include buildings which satisfy requirements for remote and wilderness settings</li>
                    <li>Complete office fit-outs and renovations</li>
                    <li>House extensions and remodelling</li>
                    <li>Bathrooms, kitchens and refurbishments</li>
                    <li>Outdoor areas</li>
                </ul>
                <p>
                    CDC Development also provides high quality QUOTES and TENDERS for future work. We provide informative communication with clients. This ensures that the process of building or renovating is inclusive of the client’s needs throughout the journey to completion.
                </p>

            </div>
        </div>
    </section>
<?php }?>

<?php if(is_page('services')) {?>
    <?php get_template_part( 'partials/features' );?>
<?php }?>
    
<?php get_footer();?>