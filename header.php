<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>
        <style type="text/css">
<?php if (get_theme_mod('so_background_handle')) { ?>
           
                .gradient-light--lean-right {
                    background-image: url(<?php echo get_theme_mod('so_background_handle'); ?>);
                    background-size:cover;
                    background-repeat:no-repeat;
                }
          
<?php } else { ?>
                .gradient-light--lean-right {
                    background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/background.png);
                    background-size:cover;
                    background-repeat:no-repeat;
                }
<?php } ?>
        </style>

    </head>

    <body <?php body_class(); ?>>

        <header class="header">


            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">


                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>

                        <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" ></a>

                    <?php }
                    ?>



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
                                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
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
