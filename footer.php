<div class="clear seperator"></div>
<div id="footer">
    <div id="footerCenter">
        <div id="socialNetworks">
            <?php
                if ( is_active_sidebar('footer-1') ) {
                    dynamic_sidebar('footer-1');
		}
             ?>
	</div>
	<div class="contactInfo vcard">
	    <?php
		if ( is_active_sidebar('footer-2') ) {
		    dynamic_sidebar('footer-2');
		}
	      ?>
	</div>
    </div>
</div>
<div id="bottomAd">
   <?php printf(__('Website Design &copy; 2016 %s', 'brandyourself'), 'Matt Cascardi'); ?>
</div>
<?php wp_footer(); ?>
  </body>
</html>
