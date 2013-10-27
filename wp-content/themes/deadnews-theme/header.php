<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>  prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:title" content="The Grateful Dead Archive Online" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.gdao.org/" />
<meta property="og:image" content="http://www.gdao.org/themes/gdao-theme/images/logo-gdao.png" />
<meta property="og:description" content="The Grateful Dead Archive Online (GDAO) is a socially constructed collection comprised of over 45,000 digitized items drawn from the UCSC Library&#039;s extensive Grateful Dead Archive (GDA) and from digital content submitted by the community and global network of Grateful Dead fans." />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
    <!-- favicon -->
<link rel="icon" type="image/gif" href="/themes/gdao-theme/images/favicon.gif" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_enqueue_script("jquery"); ?>


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/theme-scripts.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<div id="branding" role="banner">
      <div id="head-content">
				<h1 id="site-title"><a href="/" title="Grateful Dead Archive Online">Grateful Dead Archive Online</a></h1> 
                <div id="banner-top">
<ul id="nav-site">
<li class="nav-home">
<a href="/">home</a>
</li>
<li class="nav-about">
<a href="/about">about</a>
</li>
<li class="nav-dead-news current">
<a href="/deadnews/">dead news</a>
</li>
<li class="nav-online-exhibits">
<a href="/exhibits">online exhibits</a>
</li>
<li class="nav-help">
<a href="/help">help</a>
</li>
</ul>
<ul id="nav-contribute">
<li class="nav-contribute">
<a href="/contribution">Contribute</a>
</li>
</ul>
</div>
<div id="banner-bottom"><!--begin #banner-bottom -->
        <ul id="nav-collection">
<li class="nav-shows">
<a href="/shows">Shows</a>
</li>
<li class="nav-milestones">
<a href="/milestones">Milestones</a>
</li>
<li class="nav-artists">
<a href="/artists">Artists</a>
</li>
<li class="nav-media">
<a href="/media">Media</a>
</li>
<li class="nav-fan-art">
<a href="/fan-art">Fan Art</a>
</li>
</ul>
        <div id="search-collection"><!--begin #search-collection -->
          <div id="searchwrapper"><!--begin #searchwrapper -->
            <form id="simple-search" action="/solr-search/results/" method="get">
              <fieldset>
                <input type="text" name="solrq" id="solrq" value="Search the Collection..." class="searchbox default-value">
                <input type="hidden" name="solrfacet" value="" id="solrfacet">
                <input type="image" name="submit_search" id="submit_search"
                  src="/themes/gdao-theme/images/search-collection-transparent.png"
                  class="searchbox_submit" value="">
              </fieldset>
            </form>
          </div><!-- end #searchwrapper -->
          <p><a href="/advanced-search">Advanced Search</a></p>
        </div><!--end #search-collection -->
      </div><!--end #banner-bottom -->

      </div>
	</div><!-- #branding -->

	<div id="main">
      <div id="content-wrap">

