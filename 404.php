<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pk
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8 col-sm-12">
		<main id="main" class="site-main">

			<section class="error-404 not-found single-post">
				<header class="page-header entry-header">
					<h1 class="entry-title page-title">404 未找到该页面</h1>
				</header><!-- .page-header -->

				<div class="page-content entry-content">
					<p style="text-indent:0;">未找到该页面,请回到[<a href="<?php echo site_url('/'); ?>">首页</a>]或者[重新搜索]</p>

					
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
