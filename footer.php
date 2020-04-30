<!--footer starts...-->
    <footer>
    	<div class="row">
        	<div class="container">
            	<div class="col-md-6 col-sm-6">
                    <div class="footer_list1">
                    	<ul>
                    		<li><a href="<?php echo bloginfo('url');?>/commercial-services">Commercial</a></li>
                            <li>/</li>
                    		<li><a href="<?php echo bloginfo('url');?>/residential-services">Residential</a></li>
                            <li>/</li>
                            <li><a href="<?php echo bloginfo('url');?>/about-us">About</a></li>
                            <li>/</li>
                    		<li><a href="<?php echo bloginfo('url');?>/why-extreme-gardens">Why?</a></li>
                            <li>/</li>
                    		<li><a href="<?php echo bloginfo('url');?>/contact-us">Contact</a></li>
                    	</ul>
                         <p>&copy; 2015.Xtreme Garden.All Rights Reserved.</p>
                    </div>
                </div>
                <!--col-md-6 ends....-->
                <div class="col-md-6 col-sm-6">
                    <div class="footer_list2 pull-right">
                    	<ul>
						<li><p>Get In Touch:</p></li>
						<li><a href="<?php echo of_get_option('facebook_link','No Entry'); ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo of_get_option('twitter_link','No Entry'); ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo of_get_option('ins_link','No Entry'); ?>"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?php echo of_get_option('you_link','No Entry'); ?>"><i class="fa fa-youtube"></i></a></li>
                    	</ul>
                    </div>
                </div>
                <!--col-md-6 ends....-->
            </div>
        </div>
    </footer>
    <!--footer starts...-->
  
  
    
	





<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- Menu JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>
<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
<!-- Add fancyBox main JS files -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$('.fancybox').fancybox();

		});
	</script>
    
<!-- sticky header-->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.fix').addClass("sticky");
    }
    else{
        $('.fix').removeClass("sticky");
    }
});
</script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-ui.js"></script>
<script>
$( "#tabs" ).tabs();
</script>
  
    <!--/ End JS Scripts -->
	
</body>
</html>