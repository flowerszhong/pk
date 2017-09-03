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

<body class="celtics">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Goto Top', 'pk' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding container">
			<?php
			the_custom_logo();
			?>

			<div class="motto">
				<p>I can accept defeat but could not accept to give up</p>
				<p>我可以接受失败，但不能接受放弃</p>
				<p>By 迈克尔 乔丹</p>
			</div>
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
		            <li class="nav-index current"><a href="<?php echo site_url('/'); ?>">首页</a></li>
		            <li class="nav-videos"><a href="<?php echo site_url('/tag/training'); ?>">训练</a></li>
		            <li class="nav-videos"><a href="<?php echo site_url('/tag/info'); ?>">资讯</a></li>
		            <li class="nav-news"><a href="<?php echo site_url('/tag/equipment'); ?>">装备</a></li>
					<li class="swither-icon" id="swither-icon"><a title="切换主题">切换主题</a></li>
		        </ul>

				<?php } ?>
			</div>

			<?php get_template_part( 'template-parts/teamlogos'); ?>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content main-col container">
	<div class="row">
		
