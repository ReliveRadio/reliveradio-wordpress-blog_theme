<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>


<link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">



</head>

<body <?php body_class(); ?>>

	<?
	/*<nav class="top-bar">
		<ul class="title-area">
			<li class="name"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1></li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>
	*/
	?>
<nav class="top-bar" data-topbar="">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="/">ReliveRadio</a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  
<section class="top-bar-section">

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="divider"></li>
      <li class="has-dropdown not-click"><a href="/">Hören</a>
        <ul class="dropdown"><li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
          <li><a href="http://testpreview.reliveradio.de/stream/mix">Mix</a></li>
          <li><a href="http://testpreview.reliveradio.de/stream/technik">Technik</a></li>
          <li><a href="http://testpreview.reliveradio.de/stream/kultur">Kultur</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/verzeichnis">Podcast Verzeichnis</a></li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/info/downloads">Downloads</a></li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/info/faq">FAQ</a></li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/info/ueber">Über Uns</a></li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/info/helfen">Uns Unterstützen</a></li>
      <li class="divider"></li>
      <li><a href="http://blog.reliveradio.de/">Blog</a></li>
      <li class="divider"></li>
      <li><a href="http://testpreview.reliveradio.de/info/chat">Chat</a></li>
      <li class="divider hide-for-small"></li>
    </ul>

  </section>
</nav>

	<?php $header =  get_header_textcolor();
	if ( $header !== "blank" ) : ?>
	<header class="site-header" style="background: #F5F5F5; " <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
		<div class="row">
			<div class="large-12 columns">
			<br>
			<br>
				<h1 style="font-size: 60px;">
				<a style="color:#000;" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
				title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<span style="font-weight: bold;">ReliveRadio</span> <span style="color:#555;">Blog</span></a></h1>
			<br>
			</div>
		</div>
	</header>
	<?php endif; ?>

<!-- Begin Page -->
<div class="row">