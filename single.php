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
                                    $author_ID  = $post->post_author;
                                    $author_URL = get_author_posts_url($author_ID);

                                
                            ?>
            <h1 class="mb-4"><?php the_title(); ?></h1>

            <div class="text-center">
              <small class="text-muted mr-3"><?php echo get_the_date(); ?></small>

              <div class="d-inline-block mr-3">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 36,'','',['class' => 'rounded-circle'] ); ?> 
              </div>

              <div class="d-inline-block">
                <a href="<?php echo $author_URL; ?>"><small class="text-muted">By <?php the_author(); ?></small></a>
              </div>
            </div>

          </div>

          <div class="post-thumbnail col-lg-10 mb-6">
          <?php 
       if(has_post_thumbnail()){
           the_post_thumbnail('full',['class' => 'img-fluid rounded']);
       }
       
       ?>
    </div>

          <div class="entry-content col-md-10 col-lg-8">
          <?php the_content();
                //For Page Breaks 
                 wp_link_pages();
          ?>
          </div>
          <div class="entry-content col-md-10 col-lg-8">
            <?php the_tags(); ?>
            
          </div>
          <div class="entry-footer col-md-10 col-lg-8"> 
          <?php previous_post_link(); ?>|
          <?php next_post_link(); ?>
            </div>
        </div>
      </div>
     </section>
       <?php
       if(comments_open() || get_comments_number()){
            comments_template();
       }
       ?>
    
                                <?php }}
get_footer();
?>