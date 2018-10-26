<?php
/**
 * Home Page Template
 *
 */

get_header();
?>
<div id="wrapper">
    <?php
    get_sidebar();

    if(have_posts()) {
	while(have_posts()) {
	    the_post();

	    /*****
	       <div class="mainContent">
	       <div id="about">
	       <h1 class="fn"><?php echo bloginfo('name'); ?></h1>
	       </div>
	       </div>
	     *****/
    ?>
	<div class="mainContent mattsBackground">
	    <?php echo the_content(); ?>
	</div>
	<div class="spacer"></div>
    <?php
    }

}
?>
</div>

<?php

get_footer();

// EOF
