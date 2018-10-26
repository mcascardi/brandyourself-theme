<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'left_sidebar' )  ) {
?>
    <div class="vcard">
        <div id="sideBarInfo">
	    <div id="portrait">
		<img src="http://user.photos.s3.amazonaws.com/user_18691.jpg" alt="Matt Cascardi" class="photo">
	    </div>

	    <?php
	    if ( is_active_sidebar( 'left_sidebar' ) ) {
	    ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'left_sidebar' ); ?>
		</div><!-- #primary-sidebar -->
	    <?php
	    }

	    if ( has_nav_menu( 'social' ) ) {
            ?>
		<nav id="social-navigation" class="social-navigation" role="navigation">
		    <?php
		    // Social links navigation menu.
		    wp_nav_menu([
			'theme_location' => 'social',
			'depth'          => 1
		    ]);
		    ?>
		</nav><!-- .social-navigation -->
	    <?php
	    }

	    if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div id="widget-area" class="widget-area" role="complementary">
		    <?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	    <?php } ?>
	</div><!-- #sideBar -->
    </div><!-- .vcard -->
<?php

}

// EOF
