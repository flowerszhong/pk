<?php
/**
 * WordPress User Page     
 *
 * Handles authentication, registering, resetting passwords, forgot password,
 * and other user handling.
 *
 * @package WordPress
 */

/** Make sure that the WordPress bootstrap has run before continuing. */
require( dirname(__FILE__) . '/wp-load.php' );
?>
<?php get_header(); ?>
<?php 
if ( !(is_user_logged_in() and current_user_can( 'manage_options' ))) {
    die("未登录，或不是管理员");
}

$title = $_POST['title'];
$img_src = $_POST['img'];
$content = $_POST['content'];
$tags = $_POST['tags'];
$post_name = $_POST['postname'];
$post_category = $_POST['categories'];
$categories = explode(',',$post_category);

if($title and $content){
    $my_post = array(
        'post_title'=>$title,
        'post_content'=>$content,
        'post_name' => $post_name,
        'post_status'=> 'publish',
        'post_type' =>'post',
        'post_author' => 1,
        'post_category' => $categories,
    );
    $the_post_id = wp_insert_post( $my_post );
    if(!empty($img_src)){
        __update_post_meta( $the_post_id, 'pk_thumbnail', $img_src );
    }

    
    if($tags){
        wp_set_post_tags($the_post_id,$tags,1);
    }

    echo "ajax success!!!";
}


function __update_post_meta( $post_id, $field_name, $value = '' )
{
    if ( empty( $value ) OR ! $value )
    {
        delete_post_meta( $post_id, $field_name );
    }
    elseif ( ! get_post_meta( $post_id, $field_name ) )
    {
        add_post_meta( $post_id, $field_name, $value );
    }
    else
    {
        update_post_meta( $post_id, $field_name, $value );
    }
}
?>

<?php get_footer(); ?>
