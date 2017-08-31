<div class="posts-navigation">
    <div class="box-header">
        <h2 class="box-title">文章导航</h2>
    </div>

    <div class="row" id="prev-next">
        <div class="col col-md-6 prev-post">
            
        <?php if(get_previous_post()) { ?>
            <img src="<?php echo get_template_directory_uri() . '/img/left.png'; ?>" />
            <label>&laquo; 较早发布</label>
            <?php previous_post_link('%link', '%title', TRUE); ?>
        <?php } ?>

        </div>

        <?php if(get_next_post()) {  ?>
        <div class="col col-md-6 next-post text-right">
            <img src="<?php echo get_template_directory_uri() . '/img/right.png'; ?>" />
            <label>最近发布 &raquo;</label>
            <?php next_post_link('%link', '%title', TRUE); ?>
        </div>
        <?php } ?>
    </div>
</div>
