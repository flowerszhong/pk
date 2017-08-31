<?php

add_action('widgets_init', array('Random_posts_Widget', 'register'));

class Random_posts_Widget extends PK_Widget {

    public static function register(){
        register_widget('Random_posts_Widget');
    }

    function __construct() {
        $widget_ops  = array('classname' => 'random-widget posts-box', 'description' =>'NBA17PK.com random posts widget');
        $control_ops = array('width' => 'auto', 'height' => 'auto');
        parent::__construct('random-widget', 'NBA17PK.com random posts widget', $widget_ops, $control_ops);
    }

    function widget($args, $instance) {
        $instance = wp_parse_args((array) $instance, $this->get_default());

        extract($args);
        extract($instance);

        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);


        echo htmlspecialchars_decode(esc_html($before_widget));
        if (!empty($title))
            echo  htmlspecialchars_decode(esc_html($before_title . $title . $after_title));

        $query = $this->get_query($instance);
        $posts = new WP_Query($query);

        if ($posts->have_posts()){ 

            echo '<ul>';
            while ($posts->have_posts()){
                $posts->the_post();
                $post_title = esc_attr(get_the_title());
                $post_url = get_permalink();
                ?>
                <li>
                <a href="<?php echo $post_url; ?>" title="<?php echo $post_title; ?>"> 
                <?php the_title(); ?>
                 </a> 
                </li>
                
            <?php }
            echo '</ul>';
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
