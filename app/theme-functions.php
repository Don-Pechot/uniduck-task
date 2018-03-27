<?php

namespace App;

/**
 * support custom logo
 */
add_theme_support( 'custom-logo' );

/**
 * use tgm-plugin activation class
 * https://github.com/TGMPA/TGM-Plugin-Activation)
 */
require_once('helpers/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', __NAMESPACE__ . '\uniduck_register_required_plugins' );
function uniduck_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),
        array(
            'name'   => 'Contact Form 7',
            'slug'   => 'contact-form-7',
            required => true,
        ),
        array(
            'name'   => 'Thumbnail Upscale',
            'slug'   => 'thumbnail-upscale',
            required => true,
        ),
        array(
            'name'   => 'Force Regenerate Thumbnails',
            'slug'   => 'force-regenerate-thumbnails',
            required => true,
        ),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'uniduck',               // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

/**
 * custom image sizes
 */
add_action( 'after_setup_theme', __NAMESPACE__ . '\custom_image_sizes' );
function custom_image_sizes() {
    add_image_size( 'featured-single-post', 1440, 500, array('center', 'top') );
    add_image_size( 'featured-grid', 720, 576, array('center', 'center') );
}

/**
 * shortcodes
 */
add_shortcode('undck-qoute', __NAMESPACE__ . '\undck_qoute');
function undck_qoute( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'align' => 'left',
        'margin-top' => '20px',
    ), $atts );

    ob_start();
    ?>
    <span class="undck-qoute undck-qoute--<?php echo $a['align'] ?>">
        <span class="h2 undck-qoute__content" style="margin-top: <?php echo $a['margin-top'] ?>;"><?php echo $content; ?></span>
    </span>
    <?php
    return ob_get_clean();
}

?>
