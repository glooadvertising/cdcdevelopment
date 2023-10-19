    <footer class="main-footer">
        <div class="top-left"></div>
        <div class="container">
            <div class="main-content">
                <div class="col">
                    <a href="<?php echo site_url( ); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/CDC_Development_LOGO.jpg" alt="" class="footer-logo">
                    </a>
                </div>
                <div class="col">
                    <h5>CONTACT US:</h5>
                    <p><strong>Phone:</strong> <a href="tel:0362738100" target="_blank">(03) 6273 8100</a></p>
                    <p><strong>Email:</strong> <a href="mailto:admin@cdcdevelopment.com.au" target="_blank">admin@cdcdevelopment.com.au</a></p>
                     
                </div>
                <div class="col">
                    <?php wp_nav_menu( );?>
                </div>
            </div>
            <div class="secondary-content">
                <p>
                    <span>
                        &#169; <?php echo date('Y'); ?> <?php bloginfo('title');?>
                    </span> / 
                    <span>
                        Site by <a href="https://glooadvertising.com.au" target="_blank">Gloo</a>
                    </span>
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>