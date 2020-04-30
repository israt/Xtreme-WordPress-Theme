<?php

/************

 *  This is Home page main Template file *

 *  Template Name: Gallery

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
                    	<div class="row">
                        	<div class="total_event">
                                <!--<div class="col-md-3 col-sm-3">
                                	<div class="single_event">
                                        <div class="event_img  box1">
                                            <a href="event_list.php"><img src="images/img1.jpg" alt="" class="img-responsive image2"></a>						</div>
                                        <div class="event_title">
                                            <a href="event_list.php"><h2>simply dummy </h2></a>
                                            <p> simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                                        </div>
                                    </div>
                                </div>-->
                                <!--col-md-3 col-sm-3 ends....-->
                              <ul class="bxslider">
							  <?php
			$args = array(
			'post_type' => 'gallery',
			  'orderby' => 'id',
			  'order' => 'ASC',

			  );
			  
			  $query = new WP_Query($args);


	if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		
				  $feat_image = '';

                        if (has_post_thumbnail( $post->ID ) ){ 

                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
						}
				  ?>
                              <li>
                               		<img src="<?php echo $feat_image; ?>" alt="">     
                              </li>
							   <?php endwhile; 
				 wp_reset_postdata();?>	
		 <?php endif; ?>   
                              
                            </ul>
                            
                            </div>
                            <!--total event ends....-->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    
      <!--footer starts...-->
                 

<?php get_footer(); ?>