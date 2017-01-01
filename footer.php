    <div id="footer">
      <div id="footerCenter">
	<div id="socialNetworks">
                	<?php dynamic_sidebar('footer-1');?>
	  <h4>Social Networks</h4>
	  <ul>
	    <li class="facebook"><a href="https://www.facebook.com/matt.cascardi" rel="nofollow" target="_blank">Facebook</a></li>
	    <li class="linkedin"><a href="http://www.linkedin.com/in/mattcascardi" rel="nofollow" target="_blank">LinkedIn</a></li>
	  </ul>
	</div>
	<div class="contactInfo vcard">
	   <?php dynamic_sidebar('footer-2');?>
	     <h4><span class="fn">Matt Cascardi</span></h4>	  
	  <ul>
	    <li class="adr">
	      El Cerrito, California
		</li>
	  </ul>
	</div>
      </div>
    </div>
    <div id="bottomAd">
      &copy; 2016 Matt Cascardi 
    </div>
    <?php wp_footer(); ?>
  </body>
</html>

<?php
/**
<div id="footer">
        	<div id="footerwrap" class="container">
            <div class="row">
            	<div class="footerwidgets col-md-3">
                	<?php dynamic_sidebar('footer-1');?>
                    </div>
                    
                    <div class="footerwidgets col-md-3">
                 <?php dynamic_sidebar('footer-2');?>
                    </div>
                    
                    <div class="footerwidgets col-md-3">
                    <?php dynamic_sidebar('footer-3');?>
                    </div>
                    
                    <div class="footerwidgets col-md-3">
                    	<?php dynamic_sidebar('footer-4');?>
                    </div>
                <div class="clear"></div>
           <!-- <span id="footer-border"></span>  -->              
                <div id="footer-navigation">
                	<ul>
                    	 <?php 
				
				for($i=0;$i<9; $i++){
					$social_icon  = of_get_option('social_icon_'.$i);
					$social_link  = of_get_option('social_link_'.$i);
					$social_title = of_get_option('social_title_'.$i);
					if($social_link !=""){
					echo '<li><a href="'.esc_url($social_link).'" target="_blank" data-toggle="tooltip" title="'.esc_attr($social_title).'"><i class="'.esc_attr($social_icon).'"></i></a></li>';
					}
					}
					?>
                    </ul>
                </div><!--END footer-navigation-->
                
                <div>
                	<span id="copyright">&copy; <?php echo date("Y");?>, <?php printf(__('Powered by <a href="%s">WordPress</a>. Designed by <a href="%s">HooThemes</a>.','singlepage'),esc_url('http://wordpress.org/'),esc_url('http://www.hoothemes.com/'));?></span>
                </div><!--END copywrite-->
                </div>
            </div><!--END footerwrap-->
            <div class="clear"></div>
        </div>
       <?php wp_footer();?>
</body>
</html>

*/