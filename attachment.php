<?php
get_header();
?>

<section class="section section-post-entry">
    <div class="container contact__wrapper">

        <div class="row row-grid justify-content-center">

            <div class="entry-header col-md-10 col-lg-8 text-center mt-6 mb-5 ">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        global $post;
                        
                        ?>
               

                    <div class="entry-content col-md-10 col-lg-8">
                        
                         <h1 class="mb-4"><?php the_title(); ?></h1>
                         <a href="<?php echo $post->guid; ?>" class="btn btn-primary btn-sm btn--has-shadow mt-3 mt-md-0" target="_blank"><?php _e('Download','socio'); ?></a>
                        <?php
                        the_content();
                       
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
}
get_footer();
?>