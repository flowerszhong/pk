<?php

add_action('widgets_init', array('Posts_Widget', 'register'));

class Posts_Widget extends PK_Widget {

    public static function register(){
        register_widget('Posts_Widget');
    }

    function __construct() {
        $widget_ops  = array('classname' => 'pk-posts-widget', 'description' =>'NBA17PK.com posts widget');
        $control_ops = array('width' => 'auto', 'height' => 'auto');
        parent::__construct('pk-posts-widget', 'NBA17PK.com posts widget', $widget_ops, $control_ops);
    }

    function widget($args, $instance) {
        $instance = wp_parse_args((array) $instance, $this->get_default());

        extract($args);
        extract($instance);

        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
        $before_widget = '<div class="posts-box posts-box-related-posts">';

        echo htmlspecialchars_decode(esc_html($before_widget));
        if (!empty($title))
            echo  htmlspecialchars_decode(esc_html($before_title . $title . $after_title));

        $query = $this->get_query($instance);
        $posts = new WP_Query($query);

        if ($posts->have_posts()){ 

            echo '<div class="posts-wrapper row" role="posts">';

            while ($posts->have_posts()){
                $posts->the_post();
                $post_title = esc_attr(get_the_title());
                $post_url = get_permalink();
                ?>

                <div class="col-md-4">
                 <article class="post-summary post-format-standard psum-featured">
                    <div class="post-image"> <a href="<?php echo $post_url; ?>" title="<?php echo $post_title; ?>"> 
                    <img width="360" height="237" src="<?php echo get_post_img( '', 360, 237 ); ?>" class="attachment-wyy-md wp-post-image" alt="<?php echo $post_title; ?>"> </a> </div>
                    <div class="post-details">
                       <h2 class="post-title"> <a href="<?php echo $post_url; ?>"><?php echo $post_title; ?></a> </h2>
                       <ul class="post-meta no-sep">
                          <li class="post-date"> <span class="fa fa-clock-o"></span><?php echo get_the_date( 'Y-m-d'); ?></li>
                          <li class="post-views"> <span class="fa fa-eye"></span>view:<?php post_views('',''); ?></li>
                       </ul>
                    </div>
                 </article>
                </div>
                
            <?php }
            echo '</div>';

        

            } 
            wp_reset_postdata();

        echo  htmlspecialchars_decode(esc_html($after_widget));
    }


    protected function get_default() {
        return array(
            'title'          => '',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'category'       => array(),
            'post_tag'       => array(),
            'post_format'    => array(),
            'relation'       => 'OR',
            'in'             => '',
        );
    }


}

?>
