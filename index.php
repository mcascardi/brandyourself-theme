<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package        CheckPoint
 * @author         Matt Cascardi
 * @copyright      2014 Check Point
 * @license        license.txt
 * @version        Release: 1.0.0
 * @link
 * @since          available since Release 1.0
 */

get_header();

if ( have_posts() ) {

/* Start the Loop */
    while ( have_posts() ) {
        the_post();

        /**
         * Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include
         * a file called content-___.php (where ___ is the Post Format
         * name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );
    }

    // cp_content_nav( 'nav-below' );
}  else {
    get_template_part( 'no-results', 'index' );
}

get_footer();
