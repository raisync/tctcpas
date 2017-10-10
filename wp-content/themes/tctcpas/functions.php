<?php 
	add_action('wp_enqueque_scripts', 'wp_enqueque_child_parent_styles', 10, 1);

	function wp_enqueque_child_parent_styles() {
		wp_enqueque_style( 'parent_style_sheet', get_template_directory_uri()."/style.css" );
		wp_enqueque_style( 'child_style_sheet', get_stylesheet_directory_uri()."/style.css", array( 'parent_style_sheet' ) );
	}

	add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

		if( !defined(THEME_IMG_PATH)){
    	define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
  	}
	// filter the Gravity Forms button type
	add_filter("gform_submit_button", "form_submit_button", 10, 2);
	
	function form_submit_button($button, $form){
	    return "<button style='background: #021D34; padding: 10px 20px 10px 20px; border: 0; border-radius: 5px;' class='button' id='gform_submit_button_{$form["id"]}'><span>SUBMIT</span></button>";
	}