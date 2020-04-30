<div class="col-md-4">
                                	<div class="row">
                                    	<div class="category">
                                        	<h3 class="cat-heading">Recent Posts:</h3>
                                        	<ul style="margin-left:10%;">
											 <?php
										$args = array(
										'post_type' => 'blog',
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
                                        	<li><a href="<?php the_permalink();?>"><i class="fa fa-chevron-right"></i><?php the_title();?></a></li>
                                            
                                            <?php endwhile; 
				 wp_reset_postdata();?>	
		 <?php endif; ?>  
                                        		
                                        	</ul>
                                            
                                        </div>
                                    </div>
</div>