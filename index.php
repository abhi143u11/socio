<?php
get_header();
?>
<section class="section section-hero gradient-light--lean-right">

    <div class="container">
        <div class="row row-grid justify-content-center">

            <div class="col-md-8 align-self-center text-center mt-7">

                <h1 class="mb-3"><?php wp_title(' '); ?></h1>

                <p class="lead mb-5">Recent Articles</p>

            </div>

        </div>
    </div>
</section>
<div class="sections__wrapper">
    <div id="blog-1">
        <section class="section section-posts gradient-light--upright">
            <div class="container">
                <div class="row row-grid justify-content-center">

                    <div class="col-lg-12">

                        <div class="row">

                            <div class="posts__wrapper col-lg-8 mb-5 mb-lg-0">
                                <div class="row">

                                    <?php
                                    if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();

                                            get_template_part('partials/post/content-excerpt');
                                        }
                                    }
                                    ?>

                                </div> <!-- inner nested row -->
                            </div> <!-- END Posts Wrapper -->

                            <?php get_sidebar(); ?>

                        </div> <!-- Nested row -->
                    </div>

                    <nav class="mt-4" aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <?php previous_posts_link('<div class="page-link"><small><i class="fas fa-chevron-left"></i> Previous</small></div>'); ?>
                            </li>
                            <li class="page-item">
                                <?php next_posts_link('<div class="page-link"><small>Next <i class="fas fa-chevron-right"></i></small></div>'); ?>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>