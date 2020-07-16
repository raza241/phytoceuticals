<?php 



/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>',
    ),
    'sections'        => array(
    	array(
            'id'          => 'general',
            'title'       => 'General Settings'
          ) 
        ),

    'settings'        => array(
	
	   array(
            'id'      => 'logo_image',
            'label'   => 'Site Logo',
            'desc'    => '',
			'section'  =>'general',
            'type'    => 'upload',
        ),
		array(
            'id'      => 'skype_id',
            'label'   => 'Skype ID',
            'desc'    => 'Enter Skpye ID',
			'section'  =>'general',
            'type'    => 'text',
        ),
		array(
            'id'      => 'whatsapp_id',
            'label'   => 'Whatsapp Id',
            'desc'    => 'Enter Whatsapp ID',
			'section'  =>'general',
            'type'    => 'text',
        ),
		array(
            'id'      => 'email_careers',
            'label'   => 'Email For Careers',
            'desc'    => 'Enter Email For Careers',
			'section'  =>'general',
            'type'    => 'text',
        ),
		array(
            'id'      => 'address_uk',
            'label'   => 'Address UK',
            'desc'    => 'Add UK Address ',
			'section'  =>'general',
            'type'    => 'textarea',
        ) ,
		array(
            'id'      => 'contact_no_uk',
            'label'   => 'Contact No UK',
            'desc'    => 'Add UK Contact No ',
			'section'  =>'general',
            'type'    => 'text',
        ),
		array(
            'id'      => 'address_UAE',
            'label'   => 'Address UAE',
            'desc'    => 'Add UAE Address ',
			'section'  =>'general',
            'type'    => 'textarea',
        ) ,
		array(
            'id'      => 'contact_no_uae',
            'label'   => 'Contact No UAE',
            'desc'    => 'Add UAE Contact No ',
			'section'  =>'general',
            'type'    => 'text',
        ),
		array(
            'id'      => 'copyright',
            'label'   => 'Copyright Text',
            'desc'    => '',
			'section'  =>'general',
            'type'    => 'textarea',
        ),
		
	)
  );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}
?>