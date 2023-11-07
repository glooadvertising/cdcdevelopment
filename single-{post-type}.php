<?php get_header();?>

<?php 
    if ( is_singular( 'project' ) ) {
        // conditional content/code
        die;
        ?>
        <section>
            <div class="container">
                <h1>hola</h1>
            </div>
        </section>

        <?php
    }
?>
<?php get_footer();?>