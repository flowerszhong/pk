<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pk
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-md-3 col-sm-4 col-xs-6">
	<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
	<div class="grid-item">
				<img src="<?php echo get_post_img(); ?>" class="lazy grid-thumbnail" alt="">
			<h3 class="gtitle">
			<?php the_title(); ?>
			
		    </h3>


		
	</div>
	
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
