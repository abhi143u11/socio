<?php
/*
 * 
 * Template Name:Full Width Page
 * 
 */

get_header();
?>

<section class="section section-post-entry">
    <div class="container contact__wrapper">

        <div class="row row-grid justify-content-center">

            <div class="entry-header col-md-12 col-lg-12 mt-6 mb-5 text-justify">
                <?php
                while (have_posts()) {
                    the_post();
                    global $post;
                  
                    ?>
                    <h1 class="mb-4"><?php the_title(); ?></h1>


                </div>

                <div class="post-thumbnail col-lg-12 mb-6">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full', ['class' => 'img-fluid rounded']);
                    }
                    ?>
                </div>

                <div class="entry-content col-md-12 col-lg-12 text-justify">
                    <?php
                    the_content();
                    //For Page Breaks 
                    wp_link_pages();
                    ?>
                </div>
               
                
            </div>
        </div>
    </section>

    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>
    <?php
}
get_footer();
?>