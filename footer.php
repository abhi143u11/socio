
</main>
<footer class="footer background--dark">
    <div class="container">
        <div class="row">

          
            <div class="footer-content col-12 d-md-flex justify-content-between align-items-center">
                <div class="footer__brand">
                    <a class="footer-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri().'/assets/images/logo_transparent.png'; ?>" alt="Socio"></a>

                    <p class="mb-0">Socio is website theme for social media marketing business.</p>
                </div>

               
                       <?php
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'depth' => 0, // 1 = no dropdowns, 2 = with dropdowns.
                                'container' => 'div',
                                'container_class' => 'footer__menu',
                                'container_id' => false,
                                'menu_class' => 'footer-nav nav',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));
                        }
                        ?>
            </div> <!-- Footer Content -->

            <div class="col-12">
                <div class="footer-copyright-column d-md-flex justify-content-between align-items-center">
                    <div class="copyright">
                        <p>©2019 - Socio. All rights reserved.</p>
                    </div>

                    <ul class="social-icons ml-auto mb-0">
                        <li><a href="index.html#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html#0"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="index.html#0"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="index.html#0"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer> <!-- END Footer -->

<div class="alert-notifications-wrapper">

    <div id="subscribe-success-notification" class="alert alert-validation alert-success alert-dismissible fade" role="alert">
        Thank you for subscribing! Please check your inbox to opt-in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> <!-- Subscribe Success -->

    <div id="subscribe-error-notification" class="alert alert-validation alert-danger alert-dismissible fade" role="alert">
        Oh no, error happened! Please check the email address and/or try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> <!-- Subscribe Error -->

</div> <!-- END Alert Notifications Wrapper -->
<?php wp_footer(); ?>
</body>
</html>