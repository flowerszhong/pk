<div class="posts-navigation">
    <div class="box-header">
        <h2 class="box-title">文章导航</h2>
    </div>

    <div class="row" id="prev-next">
        <div class="col col-md-6 prev-post">
            <img src="<?php echo get_template_directory_uri() . '/img/left.png'; ?>" />
            <?php previous_post_link('%link', '%title', TRUE); ?>

        </div>
        <div class="col col-md-6 next-post text-right">
            <img src="<?php echo get_template_directory_uri() . '/img/right.png'; ?>" />
            <?php next_post_link('%link', '%title', TRUE); ?>
        </div>
    </div>
</div>
