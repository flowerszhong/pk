<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pk
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8 col-sm-12">
		<main id="main" class="site-main">
		<?php if((is_home() or is_front_page()) and !is_paged()){
			get_template_part( 'template-parts/home', 'slider' );
			} ?>

		<?php
		if ( have_posts() ): ?>
				<header>
					<h1 class="panel-title screen-reader-text"><?php 
					if(is_home() or is_front_page()){
						echo "最近更新";
					}else{
						the_archive_title(); 
					}
					?>
					</h1>
				</header>

			<?php

			echo '<div class="post-list">';

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'loop' );

			endwhile;
			echo '</div>';

			get_template_part( 'template-parts/page', 'navigation' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
