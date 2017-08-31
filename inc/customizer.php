<?php
/**
 * pk Theme Customizer
 *
 * @package pk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'pk_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'pk_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'pk_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pk_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pk_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pk_customize_preview_js() {
	wp_enqueue_script( 'pk-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pk_customize_preview_js' );





function pk_get_meta( $value ) {

    global $post;



    $field = get_post_meta( $post->ID, $value, true );

    if ( ! empty( $field ) ) {

        return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );

    } else {

        return false;

    }

}



function pk_add_meta_box() {

    add_meta_box(

        'nba17pk',

        '自定义封面图片，下载链接',

        'pk_html',

        'post',

        'normal',

        'default'

    );

}

add_action( 'add_meta_boxes', 'pk_add_meta_box' );



function pk_html( $post) {

    wp_nonce_field( '_pk_nonce', 'pk_nonce' ); ?>

    <p>如果未找到 特色图片(Featured Image),退而求其次会找到 自定义封面图片</p>



    <p>

        <label for="pk_thumbnail">自定义封面图片，如：http://a.com/a.jpg</label><br>

        <input type="text" class='widefat' name="pk_thumbnail" id="pk_thumbnail" value="<?php echo pk_get_meta( 'pk_thumbnail' ); ?>">

    </p>

    <p>

        <label for="pk_downlink">自定义下载链接，如：http://pan.baidu.com/xxxxx</label><br>

        <input type="text" class='widefat' name="pk_downlink" id="pk_downlink" value="<?php echo pk_get_meta( 'pk_downlink' ); ?>">

    </p>


    <?php

}



function pk_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if ( ! isset( $_POST['pk_nonce'] ) || ! wp_verify_nonce( $_POST['pk_nonce'], '_pk_nonce' ) ) return;

    if ( ! current_user_can( 'edit_post', $post_id ) ) return;



    if ( isset( $_POST['pk_thumbnail'] ) ){
        update_post_meta( $post_id, 'pk_thumbnail', esc_attr( $_POST['pk_thumbnail'] ) );
    }

    if ( isset( $_POST['pk_downlink'] ) ){
        update_post_meta( $post_id, 'pk_downlink', esc_attr( $_POST['pk_downlink'] ) );
    }



}

add_action( 'save_post', 'pk_save' );



/*

    Usage: pk_get_meta( 'pk_thumbnail' )
    Usage: pk_get_meta( 'pk_downlink' )

*/
