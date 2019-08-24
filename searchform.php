<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">

    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="form-group">

                <input type="search" id="<?php echo $unique_id; ?>" class="form-control" id="firstName" name="s"  placeholder="<?php _e('Search', 'socio'); ?>" value="<?php the_search_query(); ?>">
            </div>
        </div>


        <div class="col-sm-12 mb-3">
            <button type="submit" name="submit" class="btn btn-primary btn-block"><?php _e('Search', 'socio'); ?></button>
        </div>

    </div>
</form>