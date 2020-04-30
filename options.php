<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

//////////////////////////////////////////////GENERAL SETTINGS START////////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'desc' => __('Enter Site name .', 'options_check'),
		'id' => 'sitename',
		'type' => 'text');
		
	 $options[] = array(
		'name' => __('Upload Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logo',
		'type' => 'upload');
	
	$options[] = array(
		'name' => __('Upload Favicon Image', 'options_check'),
		'desc' => __('Upload Your favicon.ico [16x16 PX]', 'options_check'),
		'id' => 'fav',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Telephone No', 'options_check'),
		'desc' => __('Enter Telephone', 'options_check'),
		'id' => 'tel',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Emergency Telephone No', 'options_check'),
		'desc' => __('Enter Telephone', 'options_check'),
		'id' => 'e_tel',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Customer Feedback E-mail', 'options_check'),
		'desc' => __('Enter E-mail', 'options_check'),
		'id' => 'c_email',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('General Inquiries E-mail', 'options_check'),
		'desc' => __('Enter E-mail', 'options_check'),
		'id' => 'g_email',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Address', 'options_check'),
		'desc' => sprintf( __( 'Enter Address:', 'options_check' ), '' ),
		'id' => 'address',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Office Hour', 'options_check'),
		'desc' => sprintf( __( 'Enter Address:', 'options_check' ), '' ),
		'id' => 'hour',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Google Map', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'map',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'desc' => __('Enter Footer Copyright Text .', 'options_check'),
		'id' => 'copyright',
		'type' => 'text');
	
//////////////////////////////////////////////GENERAL SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////SOCIAL LINK SETTINGS START////////////////////////////////////////////////////////////////////
	
	$options[] = array(
		'name' => __('Social Link Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Twitter Link', 'options_check'),
		'desc' => __('Enter Your Twitter Page Link', 'options_check'),
		'id' => 'twitter_link',
		'std' => 'https://twitter.com',
		'type' => 'text');
		
	/*$options[] = array(
		'name' => __('Twitter Logo', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'twitter_logo',
		'std' => '',
		'type' => 'upload');*/
		
	$options[] = array(
		'name' => __('Facebook Link', 'options_check'),
		'desc' => __('Enter Your Facebook Page Link', 'options_check'),
		'id' => 'facebook_link',
		'std' => 'https://www.facebook.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Instrogram Link', 'options_check'),
		'desc' => __('Enter Your Instrogram Link', 'options_check'),
		'id' => 'ins_link',
		'std' => 'https://www.instrogram.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Youtube Link', 'options_check'),
		'desc' => __('Enter Your Youtube Link', 'options_check'),
		'id' => 'you_link',
	    'std' => 'http://www.youtube.com',
		'type' => 'text');

//////////////////////////////////////////////SOCIAL LINK SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////CMS SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('Homepage CMS', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Commercial Service Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cs_title',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Commercial Service Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'commercial',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Residential Service Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'rs_title',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Residential Service Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'residential',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('CMS Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cms_title',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('CMS SubTitle', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cms_subtitle',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('CMS Video', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'cms_video',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('CMS Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cms_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
				
//////////////////////////////////////////////CMS SETTINGS END////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////Specility SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('Our Specilities', 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Specility 1', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special1',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Specility 2', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Specility 3', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Specility 4', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Specility 5', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special5',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Specility 6', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'special6',
		'type' => 'text');	
		
//////////////////////////////////////////////Specility SETTINGS END////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////Ground Experts SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __("Customers Have To Say", 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Video 1', 'options_check'),
		'desc' => sprintf( __( 'Enter Video Link:', 'options_check' ), '' ),
		'id' => 'video1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Video 2', 'options_check'),
		'desc' => sprintf( __( 'Enter Video Link:', 'options_check' ), '' ),
		'id' => 'video2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Video 3', 'options_check'),
		'desc' => sprintf( __( 'Enter Video Link:', 'options_check' ), '' ),
		'id' => 'video3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('1. Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'c_title1',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('1. Image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'c_img1',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('1. Content', 'options_check'),
		'desc' => __('Enter Content', 'options_check'),
		'id' => 'c_content1',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('2. Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'c_title2',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('2. Image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'c_img2',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('2. Content', 'options_check'),
		'desc' => __('Enter Content', 'options_check'),
		'id' => 'c_content2',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('3. Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'c_title3',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('3. Image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'c_img3',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('3. Content', 'options_check'),
		'desc' => __('Enter Content', 'options_check'),
		'id' => 'c_content3',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	
		
//////////////////////////////////////////////Ground Experts SETTINGS END////////////////////////////////////////////////////////////////////Ground Experts

//////////////////////////////////////////////Ground Experts SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('Ground Experts', 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('1. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title1',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('1. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img1',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('1. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content1',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('2. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title2',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('2. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img2',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('2. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content2',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
		
	$options[] = array(
		'name' => __('3. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title3',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('3. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img3',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('3. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content3',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('4. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title4',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('4. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img4',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('4. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content4',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('5. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title5',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('5. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img5',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('5. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content5',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
		
	$options[] = array(
		'name' => __('6. Expert Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'e_title6',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('6. Expert image', 'options_check'),
		'desc' => sprintf( __( 'Upload Image:', 'options_check' ), '' ),
		'id' => 'e_img6',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('6. Expert Content', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'e_content6',		
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
//////////////////////////////////////////////Ground Experts SETTINGS END////////////////////////////////////////////////////////////////////Ground Experts
	
	

	return $options;
}
?>