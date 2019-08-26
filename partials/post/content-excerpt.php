<div class="col-md-6 mb-5">
    <div class="post card h-100 p-0 border-0 shadow-sm">
       <?php 
       if(has_post_thumbnail()){
           the_post_thumbnail('medium',['class' => 'card-img-top']);
       }else{ ?>
        <img src="http://via.placeholder.com/350x200" width="350" height="200" class="card-img-top">
      <?php
      }
       
       ?>
        <div class="card-body">
            <p class="card-text mb-2"><small class="text-muted"><?php echo get_the_date(); ?></small>,<small class="text-muted"><?php the_category(' '); ?></small>,<small class="text-muted"><?php comments_number('No Comments'); ?></small></p>
            <a href="<?php the_permalink(); ?>" class="h4 card-title d-block mb-4"><?php the_title(); ?></a>

           
        </div>

        <div class="card-footer">
            <div class="d-inline-block mr-3">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 36,'','',['class' => 'rounded-circle'] ); ?>
            </div>

            <div class="d-inline-block">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span class="text-muted">By <?php the_author(); ?></span></a>
            </div>
        </div>
    </div> <!-- Card for a Post/Artile -->
</div>