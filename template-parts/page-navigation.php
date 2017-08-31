    
<?php if(get_next_posts_link() or get_previous_posts_link()){ ?>

<div class="posts-navigation">
    <div class="row" id="prev-next">
        <div class="col col-md-6 col-xs-6 prev-page">
            <?php if(get_previous_posts_link()){ ?>
            <img src="<?php echo get_template_directory_uri() . '/img/left.png'; ?>" />
            <?php previous_posts_link(); ?>
            <?php } ?>
        </div>

        <?php if(get_next_posts_link()){ ?>
        <div class="col col-md-6 col-xs-6 next-page">
            <img src="<?php echo get_template_directory_uri() . '/img/right.png'; ?>" />
            <?php next_posts_link(); ?>
        </div>
        <?php } ?>
    </div>
</div>

<?php } ?>
