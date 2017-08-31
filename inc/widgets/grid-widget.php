<?php

add_action('widgets_init', array('Grid_Widget', 'register'));

class Grid_Widget extends PK_Widget {

    public static function register(){
        register_widget('Grid_Widget');
    }

    function __construct() {
        $widget_ops  = array('classname' => 'pk-grid-widget', 'description' =>'NBA17PK.com grid widget');
        $control_ops = array('width' => 'auto', 'height' => 'auto');
        parent::__construct('pk-grid-widget', 'NBA17PK.com grid widget', $widget_ops, $control_ops);
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

            echo '<div class="grid-wrapper" role="grid">';
            echo '<div class="grid-list row">';

            

            while ($posts->have_posts()){
                $posts->the_post();
                $post_title = esc_attr(get_the_title());
                $post_url = get_permalink();
                ?>

                <div class="col-md-4 col-xs-4">
                <a href="<?php echo $post_url; ?>">
                <img class='grid-img' src="<?php echo get_post_img( '', 360, 237 ); ?>" />
                <span><?php echo $post_title; ?></span>
                </a>
               
                </div>
                
            <?php }
            echo '</div>';
            echo '</div>';

        

            } 
            wp_reset_postdata();

        echo  htmlspecialchars_decode(esc_html($after_widget));
    }


    protected function get_default() {
        return array(
            'title'          => '',
            'posts_per_page' => 9,
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
