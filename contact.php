<?php

/************

 *  This is Home page main Template file *

 *  Template Name: Contact Us

 ***********/

get_header(); ?>

    <!--banner section starts...-->
    <section class="banner_area_inner_about">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="banner_text_inner_about">
					<h2><?php the_title(); ?></h2>
                        <p><?php the_subtitle(); ?></p>
						
                        <h2>Contact Us</h2>
                        <p>Our goal at Xtreme Gardens is to make our clients happy at all times.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner section ends...-->
    <!--inner content section starts...-->
    <section class="inner_content">
    	<div class="row">
        	<div class="container">
            	<!--blog starts.............-->
               <div class="col-md-12 col-sm-12">
                    <div class="inner_about">
                    	<!--contact starts...--> 
                        <div class="contact2">
                            <div class="col-md-6">
                                <div class="contact-book2">
                                    <ul>
                                        <li><b>Address:</b></li>
                                        <li class="green"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf4.png" alt="">&nbsp;Phone:</li>
                                        <li>Dial: <?php echo of_get_option('tel','No Entry'); ?> </li>
                                        <li class="green"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf4.png" alt="">&nbsp;Hours:</li>
                                       <?php echo of_get_option('hour','No Entry'); ?>
                                        <li class="green"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf4.png" alt="">&nbsp;Email:</li>
                                        <li>Customer Feedback:<?php echo of_get_option('c_email','No Entry'); ?></li>
                                        <li>General Inquiries:<?php echo of_get_option('g_email','No Entry'); ?></li>
                                        <li class="green"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf4.png" alt="">&nbsp;Mail:</li>
                                        <?php echo of_get_option('address','No Entry'); ?>
                                    </ul>
                                </div>
                                
                            </div>
                            <!--col-md-6 ends...-->
                            <div class="col-md-6">
                              <div class="form_area_inner">
                                <h2><b>Your Enquiry</b></h2>
                               
							     <?php echo do_shortcode('[contact-form-7 id="23" title="Your Enquiry"]'); ?>
								 
                            </div>
                         </div>
                         <!--col-md-6 ends...-->
                        </div>
						<div class="col-md-12">
							<div class="contact_map">
									
									<?php echo of_get_option('map','No Entry'); ?>
									   
							</div>
						</div>
                        <!--contact ends...--> 
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    
    <!--footer starts...-->
                 

<?php get_footer(); ?>