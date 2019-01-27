<?php get_header(); ?>

<?php // get_template_part('template-part', 'head'); ?>

<?php // get_template_part('template-part', 'topnav'); ?>

    <!-- start content container -->
   <div id="wrapper"> 

        <?php //left sidebar ?>
        <?php get_sidebar( 'left' ); ?>

        <div class="mainContent">
         <h1><?php _e('Sorry This Page Does Not Exist!', 'brandyourself'); ?></h1>
        </div>

        <?php //get the right sidebar ?>
        <?php // get_sidebar( 'right' ); ?>

   </div> 
    <!-- end content container -->

<?php get_footer(); ?>
