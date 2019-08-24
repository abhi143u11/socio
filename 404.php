<?php
get_header();
?>

<section class="section section-post-entry">
    <div class="container contact__wrapper">

        <div class="row row-grid justify-content-center">

            <div class="entry-header col-md-10 col-lg-8 text-center mt-6 mb-5 ">

                <h1 class="mb-4"><?php _e('The page you are looking for could not be found','socio'); ?></h1>
                <p class="lead mb-5"><?php _e('Try searching for the best match or browse the links below:','socio'); ?></p>
            </div> 
                <?php get_search_form(); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>