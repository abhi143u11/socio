<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <header class="header">

            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">

                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_theme_file_uri().'/assets/images/logo_transparent.png'; ?>" alt="Socio"></a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="offcanvas">
                        <i class="navbar-toggler__bar navbar-toggler__bar--top"></i>
                        <i class="navbar-toggler__bar navbar-toggler__bar--middle"></i>
                        <i class="navbar-toggler__bar navbar-toggler__bar--bottom"></i>
                    </button> <!-- Navbar Toggle Button -->

                    <div class="offcanvas-collapse ml-auto" id="">
                        <?php
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'depth' => 4, // 1 = no dropdowns, 2 = with dropdowns.
                                'container' => false,
                                'container_class' => false,
                                'container_id' => false,
                                'menu_class' => 'navbar-nav',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));
                        }
                        ?>
                        
                      
                    </div>

                </div>
            </nav> <!-- END Navbar -->

        </header>
        <main class="main">