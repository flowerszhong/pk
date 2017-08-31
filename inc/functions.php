<?php 
function get_post_img( $id = null,$width="200",$height="150",$size=null) {

    if( $id ){

        $post = get_post($id);

        $post_id = $id;

    }else{

        global $post;

        $post_id = $post->ID;

    }





    if(has_post_thumbnail( $post )){

        set_post_thumbnail_size( $width, $height );



        if($size){

            $attachment_id = get_post_thumbnail_id( $post_id );

            $thumb_url = wp_get_attachment_image_src( $attachment_id, $size ,true);

            return $thumb_url[0];

        }

        return get_the_post_thumbnail_url( $post);

    }



    if(pk_get_meta( 'pk_thumbnail' )){

        return pk_get_meta( 'pk_thumbnail' );

    }





    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

    if( !empty( $matches[1][0] ) ){

        return $matches[1][0];

    }else{

        $width_height = $width . 'x' . $height;

        return 'http://fpoimg.com/' . $width_height;

    }

}


 ?>