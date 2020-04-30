<?php
/************
 * The template for displaying all single posts
 ***********/
get_header(); ?>
<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
	    <!--banner section starts...-->
    <section class="banner_area_inner_about">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="banner_text_inner_about">
                        <h2><?php the_title(); ?></h2>
                        <p><?php  echo $Subtitle = get_post_meta( get_the_ID(), 'Subtitle', true );?></p>
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
                                    	<div class="single_event_details">
                                            <h2><?php the_title(); ?></h2>
                                            <h3><?php  echo $Subtitle = get_post_meta( get_the_ID(), 'Subtitle', true );?></h3>
											<?php //the_thumbnail();?>									
                                            <!--<img src="xtreme_d/images/event1.jpg" alt="">-->
                                            <?php echo the_content();?>
                                        </div>
                                    </div>
                                </div>
                                <!--col-md-8 ends....-->
                                 <?php get_sidebar(); ?>
                                <!--col-md-4 ends....-->
                            </div>
                            <!--total event ends....-->
                           <div class="photo_gallery">
						<?php    $galleryArray = get_post_gallery_ids($post->ID); 

foreach ($galleryArray as $id) {
	?> 

                        	<div class="col-md-3  col-sm-3">
                            	<div class="gallery_image">
                                	<a class="fancybox" href="xtreme_d/images/g1.jpg" data-fancybox-group="gallery" title="Conferance for businesses"><img src="<?php echo wp_get_attachment_url( $id ); ?>" alt=""></a>
                                </div>
                            </div>
							<?php } ?>
                 </div>
                    <!--photo_gallery ends......-->
                        </div>
                       <!-- row ends.....-->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
	<?php
	endwhile;
		?>
           
<?php get_footer(); ?>