<?php

add_action('widgets_init', array('Media_Widget', 'register'));

class Media_Widget extends PK_Widget {

    public static function register(){
        register_widget('Media_Widget');
    }

    function __construct() {
        $widget_ops  = array('classname' => 'pk-media-widget', 'description' =>'NBA17PK.com media widget');
        $control_ops = array('width' => 'auto', 'height' => 'auto');
        parent::__construct('pk-meida-widget', 'NBA17PK.com media widget', $widget_ops, $control_ops);
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

            echo '<div class="media-wrap row" role="posts">';

            while ($posts->have_posts()){
                $posts->the_post();
                $post_title = esc_attr(get_the_title());
                $post_url = get_permalink();
                ?>
                <div class="media-item col-md-12 col-sm-6 col-xs-12">
                <div class="media-summary clearfix">

                    <div class="media-image"> 
                        <a href="<?php echo $post_url; ?>" title="<?php echo $post_title; ?>"> 
                            <img src="<?php echo get_post_img(); ?>" class="wp-post-image"> 
                        </a> 
                    </div>

                    <div class="media-details">
                        <h2 class="media-title"> <a href="<?php echo $post_url; ?>"><?php echo $post_title; ?></a> </h2>
                     </div>

               
                </div>
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
