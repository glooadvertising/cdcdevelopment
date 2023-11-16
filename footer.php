    <footer class="main-footer">
        <div class="top-left"></div>
        <div class="container">
            <div class="main-content">
                <div class="col col-1">
                    <a href="<?php echo site_url( ); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/CDC_Development_LOGO.png" alt="" class="footer-logo">
                    </a>
                    <span class="social-media-block">
                        <a href="http://www.instagram.com/cdcdevelopmentptyltd/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram_logo_icon.svg" alt="Instagram" class="footer-media-icon">
                        </a>
                        <a href="https://www.facebook.com/pg/CDCDevelopment22" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/facebook_logo_icon.svg" alt="Facebook" class="footer-media-icon">
                        </a>
                    </span>
                </div>
                <div class="col col-2">
                    <p>
                        CONTACT US:<br>
                        Phone: <a href="tel:0362738100" target="_blank">(03) 6273 8100</a><br>
                        Email: <a href="mailto:admin@cdcdevelopment.com.au" target="_blank">admin@cdcdevelopment.com.au</a>
                    </p>
                     
                </div>
                <div class="col col-3">
                    <?php wp_nav_menu( );?>
                </div>
            </div>
            <div class="secondary-content">
                <p>
                    <span>
                        &#169; <?php echo date('Y'); ?> <?php bloginfo('title');?>
                    </span> / 
                    <span>
                        Site by <a href="https://glooadvertising.com.au" target="_blank" rel="noopener noreferrer">Gloo</a>
                    </span>
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>