<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


get_header(); ?>

<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				?>

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
            	<div class="col-md-8">
                    <div class="inner_about">
                    	<?php echo the_content(); ?>
                       
                         						
                         
                        				
                           
                    </div>
                </div>
				
                <?php get_sidebar(); ?>
				
                                <!--col-md-4 ends....-->
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    <?php
		endwhile;
	?>


<?php get_footer(); ?>