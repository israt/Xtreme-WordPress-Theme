<?php

/************

 *  This is Home page main Template file *

 *  Template Name: HomePage

 ***********/

get_header(); ?>

	<!--slider starts...............-->
<section class="slider">
	<!--soil test starts.............-->
    	<div class="form_area_inner_soil">
                                <h2><b>Get You Free Soil Test!!</b></h2>
                                
								<?php echo do_shortcode('[contact-form-7 id="6" title="Get Free Soil Form"]');?>
								
                            </div>
    <!--soil test ends.............-->


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
	  		   <?php
			$args = array(
			'post_type' => 'slide',
			  'orderby' => 'id',
			  'order' => 'ASC',

			  );
			  
			  $query = new WP_Query($args);

		$first=1;

	if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			  if($first==1)
			  {
							  ?>
              <div class="item active">
              <?php } else
			  {
				  ?>
                  <div class="item">
                  <?php
			  }
			  
			  $first++;
				  $feat_image = '';

                        if (has_post_thumbnail( $post->ID ) ){ 

                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
						}
				  ?>
      
          <img src="<?php echo $feat_image; ?>" alt="Chania">
          <div class="carousel-caption">
            <h3><?php echo the_title(); ?></h3>
            <p> <?php echo the_content(); ?> </p>
          </div>
        </div>
		
		             <?php endwhile; 
				 wp_reset_postdata();?>	
		 <?php endif; ?>    
			 

      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	
</section>
<!--slider ends...............-->

<!--full service starts.........-->
<section class="full_service">
	<div class="row">
    	<div class="container">
        	<h1>Your Full Service Lawn & Landscape Company</h1>
        </div>
    </div>
</section>
<!--full service ends...........-->

<!--commercial starts.........-->
<section class="commerce_area">
	<div class="row">
    	<div class="container">
		
        	<div class="col-md-6">
            	<div class="commerce_area_left">
                	<h2><?php echo of_get_option('cs_title','No Entry'); ?></h2>
                    <p><?php echo of_get_option('commercial','No Entry'); ?></p>
                    <div class="read pull-right">
                    	<a href="<?php echo bloginfo('url');?>/commercial-services">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="commerce_area_right">
                	<h2><?php echo of_get_option('rs_title','No Entry'); ?></h2>
                    <p><?php echo of_get_option('residential','No Entry'); ?></p>	
                    <div class="read pull-left">
                    	<a href="<?php echo bloginfo('url');?>/residential-services">Read</a>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</section>
<!--commercial ends...........-->

<!--border starts....-->

<div class="border">
	<hr/>
</div>

<!--border ends....-->

<!--video starts.........-->
<section class="video_area">
	<div class="row">
    	<div class="container">
        	<div class="col-md-6">
            	<div class="video_area_left">
                	<iframe width="550" height="245"
                   		 src="<?php echo of_get_option('cms_video','No Entry'); ?>">
                    </iframe>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="video_area_right">
                	<h2><?php echo of_get_option('cms_title','No Entry'); ?></h2>
                    <h3><?php echo of_get_option('cms_subtitle','No Entry'); ?></h3>
                    <p><?php echo of_get_option('cms_content','No Entry'); ?></p>	
                    <div class="read2 pull-left">
                    	<a href="#">Let Do The Yard Work</a>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</section>
<!--video ends...........-->

<!--great starts........-->
<section class="great">
	<div class="row">
    	<div class="container">
        	<div class="heading2">
        	<div class="heading">
        	<h2>Great Reasons To Choose</h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/white-logo.png" alt="">
            </div>
            </div>
        	<div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-calculator"></i>
                    <h1><?php echo of_get_option('special1','No Entry'); ?></h1>
                </div>
            </div>
            <div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-usd"></i>
                    <h1><?php echo of_get_option('special2','No Entry'); ?></h1>
                </div>
            </div>
            <div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-files-o"></i>
                    <h1><?php echo of_get_option('special3','No Entry'); ?></h1>
                </div>
            </div>
            <div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-user"></i>
                    <h1><?php echo of_get_option('special4','No Entry'); ?></h1>
                </div>
            </div>
            <div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-clock-o"></i>
                    <h1><?php echo of_get_option('special5','No Entry'); ?></h1>
                </div>
            </div>
            <div class="col-md-2">
            	<div class="great_inner">
                	<i class="fa fa-gift"></i>
                    <h1><?php echo of_get_option('special6','No Entry'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--great ends...........-->

<!--customers strats......-->
<section class="customer">
	<div class="row">
    	<div class="container">
        	<h1>What our customers have to say</h1>
            <div class="col-md-4">
            	<div class="customer_video">
                	<iframe width="300" height="200"
                   		 src="<?php echo of_get_option('video1','No Entry'); ?>">
                    </iframe>
                </div>
            </div>
            <!--col-md-4 ends.......-->
            <div class="col-md-4">
            	<div class="customer_video">
                	<iframe width="300" height="200"
                   		 src="<?php echo of_get_option('video2','No Entry'); ?>">
                    </iframe>
                </div>
            </div>
            <!--col-md-4 ends.......-->
            <div class="col-md-4">
            	<div class="customer_video">
                	<iframe width="300" height="200"
                   		 src="<?php echo of_get_option('video3','No Entry'); ?>">
                    </iframe>
                </div>
            </div>
            <!--col-md-4 ends.......-->
        </div>
    </div>
</section>
<!--customers ends......-->

<!--border starts....-->

<div class="border">
	<hr/>
</div>

<!--border ends....-->

<!--ground expert........-->
<section class="ground">
	<div class="row">
    	<div class="container">
        	<h1>Your Ground Experts</h1>
        </div>
    </div>
</section>
<!--ground expert........-->

<!--tab starts.................-->
<section class="tab_area">
	<div class="row">
    	<div class="container">
        	<div class="col-md-12">
            	<!-- Tabs -->
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1"><?php echo of_get_option('e_title1','No Entry'); ?></a></li>
                            <li><a href="#tabs-2"><?php echo of_get_option('e_title2','No Entry'); ?></a></li>
                            <li><a href="#tabs-3"><?php echo of_get_option('e_title3','No Entry'); ?></a></li>
                            <li><a href="#tabs-4"><?php echo of_get_option('e_title4','No Entry'); ?></a></li>
                            <li><a href="#tabs-5"><?php echo of_get_option('e_title5','No Entry'); ?></a></li>
                            <li><a href="#tabs-6"><?php echo of_get_option('e_title6','No Entry'); ?></a></li>
                        </ul>
                        <div id="tabs-1">
                        	<div class="tab-content">
                            	<p><?php echo of_get_option('e_content1','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img1','No Entry'); ?>" alt="">
                            </div>
                            </div>
                        <div id="tabs-2">
                             <div class="tab-content">
                            	<p><?php echo of_get_option('e_content2','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img2','No Entry'); ?>" alt="">
                            </div>
                        </div>	
                        <div id="tabs-3">
                       <div class="tab-content">
                            	<p><?php echo of_get_option('e_content3','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img3','No Entry'); ?>" alt="">
                            </div>
                        </div>		
                        <div id="tabs-4">
                       <div class="tab-content">
                            	<p><?php echo of_get_option('e_content4','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img4','No Entry'); ?>" alt="">
                            </div>
                        </div>
                        <div id="tabs-5">
                        <div class="tab-content">
                            	<p><?php echo of_get_option('e_content5','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img5','No Entry'); ?>" alt="">
                            </div>
                        </div>
                        <div id="tabs-6">
                        <div class="tab-content">
                            	<p><?php echo of_get_option('e_content6','No Entry'); ?></p></div>
                            <div class="tab-img">
                            	<img src="<?php echo of_get_option('e_img6','No Entry'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                   <!-- tabs ends..............-->
            </div>
        </div>
    </div>
</section>
<!--tab ends.................-->

<!--blog starts.................-->
<section class="blog">
	<div class="row">
    	<div class="container">
        	<h1>What our customers have to say</h1>
            <div class="col-md-4">
            	<div class="blog_inner">
                	<img src="<?php echo of_get_option('c_img1','No Entry'); ?>" alt="">
                    <h3><?php echo of_get_option('c_title1','No Entry'); ?></h3>
                    <p><?php echo of_get_option('c_content1','No Entry'); ?></p>	
                </div>
            </div>
            <!--col-md-4 ends.......-->
            <div class="col-md-4">
            	<div class="blog_inner">
                	<img src="<?php echo of_get_option('c_img2','No Entry'); ?>" alt="">
                    <h3><?php echo of_get_option('c_title2','No Entry'); ?></h3>
                    <p><?php echo of_get_option('c_content3','No Entry'); ?></p>		
                </div>
                <div class="center"><div class="read3">
                  <a href="">READ MORE</a>
            </div>	</div>
            </div>
            <!--col-md-4 ends.......-->
            <div class="col-md-4">
            	<div class="blog_inner">
                	<img src="<?php echo of_get_option('c_img3','No Entry'); ?>" alt="">
                    <h3><?php echo of_get_option('c_title3','No Entry'); ?></h3>
                    <p><?php echo of_get_option('c_content3','No Entry'); ?></p>	
                </div>
            </div>
            <!--col-md-4 ends.......-->
        </div>
    </div>
</section>
<!--blog ends.................-->

<!--footer contact starts.................-->
<section class="footer_contact">
	<div class="row">
    	<div class="container">
        	<h1>What our customers have to say</h1>
            <div class="col-md-6">
            	<div class="footer_inner">
                	<div class="contact-book">
                                    <ul>
                                    	<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/white-logo.png" alt=""></li>
                                        <li><br/></li>
                                        <li><b>Address:</b></li>
                                        <li><?php echo of_get_option('address','No Entry'); ?></li>
                                        <li>Tel: <?php echo of_get_option('tel','No Entry'); ?></li>
                                        <li>Emergency Tel: <?php echo of_get_option('e_tel','No Entry'); ?></li>
                                        <li>Email : <?php echo of_get_option('g_email','No Entry'); ?></li>
                                    </ul>
                     </div>
                </div>
            </div>
            <!--col-md-6 ends.......-->
            <div class="col-md-6">
            	<div class="footer_inner">
                	<h2><b>Your Enquiry</b></h2>
					
                               <?php echo do_shortcode('[contact-form-7 id="23" title="Your Enquiry"]'); ?>
                </div>
            </div>
            <!--col-md-4 ends.......-->
        </div>
    </div>
</section>
<!--blog ends.................-->
              

<?php get_footer(); ?>