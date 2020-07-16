<?php

/**
 * Initialize the options before anything else.
 */
add_action('admin_init', 'custom_theme_options', 1);

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options()
{
    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option('option_tree_settings', array());

    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */
    $custom_settings = array(
        'contextual_help' => array(
            'content' => array(
                array(
                    'id' => 'general_help',
                    'title' => 'General1',
                    'content' => '<p>Help content goes here!</p>',
                ),
            ),
            'sidebar' => '<p>Sidebar content goes here!</p>',
        ),
        'sections' => array(
//    array(
            //        'id'          => 'general',
            //        'title'       => 'General Settings'
            //      ),
            // array(
            //     'id' => 'home',
            //     'title' => 'Home Settings'
            // ),
            array(
                'id' => 'header',
                'title' => 'Header Settings',
            ),
            array(
                'id' => 'social',
                'title' => 'Social Links',
            ),
            array(
                'id' => 'footersetting',
                'title' => 'Footer Settings',
            ),
            //  array(
            //     'id' => 'contact',
            //     'title' => 'Contact Setting'
            // ),
        ),
        'settings' => array(
            array(
                'id' => 'logo_image',
                'label' => 'Logo',
                'desc' => '',
                'std' => '',
                'section' => 'header',
                'type' => 'upload',
                'class' => '',
                'choices' => array(),
            ),

            array(
                'id' => 'credit',
                'label' => 'Credit',
                'desc' => 'Enter Text Here.',
                'std' => '',
                'section' => 'footersetting',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'contact',
                'label' => 'Contact',
                'desc' => 'Enter Text Here.',
                'std' => '',
                'section' => 'footersetting',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'copyright',
                'label' => 'Copyright',
                'desc' => 'Enter Text Here.',
                'std' => '',
                'section' => 'footersetting',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'copyright',
                'label' => 'Copyright',
                'desc' => 'Enter Text Here.',
                'std' => '',
                'section' => 'footersetting',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'social_facebook',
                'label' => 'Facebook URL',
                'desc' => 'Enter Facebook link here.',
                'std' => '',
                'section' => 'social',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'social_twitter',
                'label' => 'Twitter URL',
                'desc' => 'Enter Twitter link here.',
                'std' => '',
                'section' => 'social',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'social_instagram  ',
                'label' => 'Instagram URL',
                'desc' => 'Enter Instagram link here.',
                'std' => '',
                'section' => 'social',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'social_youtube  ',
                'label' => 'YouTube URL',
                'desc' => 'Enter YouTube link here.',
                'std' => '',
                'section' => 'social',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
            array(
                'id' => 'social_linkedin  ',
                'label' => 'LinkedIn URL',
                'desc' => 'Enter LinkedIn link here.',
                'std' => '',
                'section' => 'social',
                'type' => 'text',
                'class' => '',
                'choices' => array(),
            ),
        ),
    );

    /* settings are not the same update the DB */
    if ($saved_settings !== $custom_settings) {
        update_option('option_tree_settings', $custom_settings);
    }
}
