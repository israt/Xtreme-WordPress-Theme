<?php

/************

 *  This is Home page main Template file *

 *  Template Name:Blog

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
                        	<div class="total_event_details">
                            	<div class="col-md-8">
                                	<div class="row">
                                    <!--full-event starts here....-->
									 <?php
										$args = array(
										'post_type' => 'wiki',
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
                                    	<div class="full-event">
                                        	<h2><?php the_title();?></h2>
                                            <h3><?php  echo $Subtitle = get_post_meta( get_the_ID(), 'Subtitle', true );?></h3>
                                            <div class="col-md-12  col-sm-12">
                                             <img src="<?php echo $feat_image; ?>" alt="" class="img-responsive">
                                                <div class="single_event_details">
                                                    <p><?php echo the_content();?></p>
                                                </div>
                                                <div class="see_more">
                                                    <a href="<?php the_permalink();?>">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
										<?php endwhile; 
				 wp_reset_postdata();?>	
		 <?php endif; ?>  
                                    <!--full-event ends here....-->
                                    
                                    
                                        
                                    </div>
                                   <!-- row ends....-->
                                </div>
                                <!--col-md-8 ends....-->
                                 <?php get_sidebar(); ?>
                                <!--col-md-4 ends....-->
                            </div>
                            <!--total event ends....-->
                        </div>
                    </div>
                </div>
                <!--blog ends..................-->
                
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    
    <!--footer starts...-->
        <!--footer starts...-->
                 

<?php get_footer(); ?>