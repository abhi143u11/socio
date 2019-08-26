<?php
get_header();
?>

<section class="section section-post-entry">
    <div class="container contact__wrapper">

        <div class="row row-grid justify-content-center">
        
            <div class="entry-header col-md-10 col-lg-8 text-left mt-6 mb-5 ">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                        ?>
                        <h1 class="mb-4 text-center"><?php the_title(); ?></h1>

                        <div class="text-center pb-4">
                            <small class="text-muted mr-3"><?php echo get_the_date(); ?></small>

                            <div class="d-inline-block mr-3">
                                <?php echo get_avatar(get_the_author_meta('ID'), 36, '', '', ['class' => 'rounded-circle']); ?> 
                            </div>

                            <div class="d-inline-block">
                                <a href="<?php echo $author_URL; ?>"><small class="text-muted">By <?php the_author(); ?></small></a>
                            </div>
                        </div>

                   
            
                    <div class="post-thumbnail col-lg-12 mb-6">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', ['class' => 'img-fluid rounded']);
                        }
                        ?>
                    </div>

                    <div class="entry-content col-md-12 col-lg-12">
                        <?php
                        the_content();
                        //For Page Breaks 
                        wp_link_pages();
                        ?>
                    </div>
                    <div class="entry-content col-md-12 col-lg-12">
                        <?php the_tags(); ?>

                    </div>
                    <div class="entry-footer col-md-12 col-lg-12"> 
                        <?php previous_post_link(); ?>|
                        <?php next_post_link(); ?>
                    </div>
                </div>
            <?php get_sidebar(); ?>
            </div>
    </div>
        </section>

        <section class="section related-posts gradient-light--upright">
            <div class="container">
                <div class="row row-grid justify-content-center">

                    <div class="col-lg-12">

                        <div class="text-center">
                            <h2 class="mb-5">Related Posts</h2>
                        </div>

                        <div class="row">
                            <?php
                            $catgories = get_the_category();

                            $rp_query = new WP_Query([
                                'posts_per_page' => 3,
                                'post__not_in' => [$post->ID],
                                'cat' => !empty($catgories) ? $catgories[0]->term_id : null
                            ]);

                            if ($rp_query->have_posts()) {
                                while ($rp_query->have_posts()) {
                                    $rp_query->the_post();
                                    $author_ID = $post->post_author;
                                    $author_URL = get_author_posts_url($author_ID);
                                    ?>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="post card h-100 p-0 border-0 shadow-sm">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumbnail', ['class' => 'card-img-top']);
                                            }
                                            ?>
                                            <div class="card-body">
                                                <p class="card-text mb-2"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                                                <a href="<?php the_permalink(); ?>" class="h4 card-title d-block mb-4"><?php the_title(); ?></a>

                                                <p class="card-text"><?php the_excerpt(); ?></p>
                                            </div>

                                            <div class="card-footer">
                                                <div class="d-inline-block mr-3">
                                                    <?php echo get_avatar(get_the_author_meta('ID'), 36, '', '', ['class' => 'rounded-circle']); ?> 
                                                </div>

                                                <div class="d-inline-block">
                                                    <a href="<?php echo $author_URL; ?>"><span class="text-muted">By <?php the_author(); ?></span></a>
                                                </div>
                                            </div>
                                        </div> <!-- Card for a Post/Artile -->
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>


                        </div>
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