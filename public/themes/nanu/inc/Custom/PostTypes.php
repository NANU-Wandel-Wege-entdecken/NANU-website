<?php

namespace Nanu\Custom;

/**
 * Custom
 * use it to write your custom functions.
 */
class PostTypes
{
	/**
     * register default hooks and actions for WordPress
     * @return
     */
	public function register() {
		//add_action( 'init', array( $this, 'custom_post_type'), 10 , 4 );
		add_action( 'after_switch_theme', array( $this, 'rewrite_flush') );
	}

  /**
    * Create Custom Post Types
    * @return The registered post type object, or an error object
    */
    public function custom_post_type()
    {
	}

  /**
    * Flush Rewrite on CPT activation
    * @return empty
    */
    public function rewrite_flush()
    {
        // Flush the rewrite rules only on theme activation
        flush_rewrite_rules();
    }
}
