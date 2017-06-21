<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,600,700" rel="stylesheet">

<?php $code1 = get_field('analytics_code_head', 'option');
echo $code1 ? "$code1" : "" ; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $code2 = get_field('analytics_code_body', 'option');
echo $code2 ? "$code2" : "" ; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'firetoss_seed' ); ?></a>
    <div class="top-header">
        <?php if ( is_active_sidebar( 'top_bar' ) ) : ?>
            <div id="topBar" class="top-bar" role="complementary">

                <div class="container">
                <?php dynamic_sidebar( 'top_bar' ); ?>
            </div><!-- #primary-sidebar -->
            </div>
        <?php endif; ?>
    </div>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() );?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div><!-- .site-branding --> 

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

<!--    --><?php //if(!is_home()):?>
	<div id="hero-header">
		<?php get_template_part( 'template-parts/hero', 'header' ); ?>
	</div>
<!--    --><?php //endif; ?>

	<div id="content" class="site-content">

