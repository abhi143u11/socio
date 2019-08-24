<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<section class="section section-subscribe gradient-light--upright">

    <div class="container">
        <div class="row row-grid justify-content-center">
            <h2 class="section__title mb-4"><?php _e('Comments','socio'); ?></h2>
            <?php foreach ($comments as $comment) { ?>
               <div class="col-md-12">

                        <blockquote class="blockquote shadow">
                          

                          <p><?php comment_text(); ?></p>

                          <footer class="blockquote-footer d-flex align-items-center">
                            <div class="testimony__avatar d-inline-block mr-3">
                              
                              <?php echo get_avatar($comment,60,'','',['class' => 'rounded-circle']); ?>
                            </div>

                            <div class="testimony__info d-inline-block">

                              <span class="info-name d-block">  <?php comment_author(); ?></span>
                              <span class="info-company d-block"><?php comment_date(); ?></span>
                            </div>

                          </footer>
                        </blockquote>

                      </div>
              
                
                

            <?php }
            ?>
            
<div class="col-lg-12 contact-form__wrapper p-2">
    <?php 
                comment_form([
                    'comment_field' => '  <div class="col-sm-12 mb-3">
                          <div class="form-group">
                            <label class="required-field" for="comment">Comment</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Comment"></textarea>
                          </div>
                        </div>',
                    'fields' => [
                        'author' => '<div class="col-sm-12 mb-3">
                          <div class="form-group">
                            <label class="required-field" for="name">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Socio">
                          </div>
                        </div>',
                        'email' => '<div class="col-sm-12 mb-3">
                          <div class="form-group">
                            <label class="required-field" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="contact@socio.com">
                          </div>
                        </div>',
                        
                    ],
                    'class_submit' => 'btn btn-primary',
                    'label_submit' => __('Submit Comment','socio'),
                    'title_reply' => __('Leave a Comment','socio')
                ]);
    
    ?>
    
    
                  </div>
        </div>
    </div>
</section>