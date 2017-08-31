<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pk
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-wrap">
	<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
	<div class="ppost">
		<header class="entry-header">
		<h3 class="ptitle">
			<?php the_title(); ?>
			
		</h3>
		</header><!-- .entry-header -->

		<div class="entry-excerpt">
			<div class="post-thumbnail">
				<img src="<?php echo get_post_img(); ?>" class="lazy post-thumbnail" alt="">
			</div>

			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>

		</div><!-- .entry-excerpt -->

		<footer class="entry-footer">
			<span>
			<?php the_time('Y-m-d H:i'); ?>
			</span>

			<span class="fr">评论 <?php comments_number( false, false, false ); ?></span>
		</footer><!-- .entry-footer -->
	</div>
	
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
