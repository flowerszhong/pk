<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="bulls">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pk' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding container">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="site-menu container">
				<?php
				if(has_nav_menu( 'menu-2' )){
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						"menu_class"     => 'main-menu clearfix',
					) );
				}else{
					
				?>
				<ul class="main-menu clearfix">
		            <li class="nav-index current"><a href="/bulls">首页</a></li>
		            <li class="nav-videos"><a href="/bulls/videos">视频</a></li>
		            <li class="nav-news"><a href="/bulls/news">新闻</a></li>
		            <li class="nav-players"><a href="/teams/roster/#!/bulls">球员</a></li>
		            <li class="nav-schedule"><a href="/teams/schedule/#!/bulls">赛程</a></li>
		            <li class="nav-statics"><a href="/teams/leaders/#!/bulls">统计</a></li>
		            <li class="nav-photos"><a href="/bulls/photos">图片</a></li>
		            <li class="nav-mall mall_bulls"><a href="http://www.nbastore.cn/ShopByTeam-Eastern-ChicagoBulls/category.htm" class="team-mall" target="_blank">商城</a></li>
		        </ul>

				<?php } ?>
			</div>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content main-col container">
	<div class="row">
		
