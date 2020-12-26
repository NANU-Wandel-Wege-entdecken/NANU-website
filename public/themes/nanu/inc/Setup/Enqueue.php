<?php

namespace Nanu\Setup;

/**
 * Enqueue.
 */
class Enqueue
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Notice the mix() function in wp_enqueue_...
	 * It provides the path to a versioned asset by Laravel Mix using querystring-based
	 * cache-busting (This means, the file name won't change, but the md5. Look here for
	 * more information: https://github.com/JeffreyWay/laravel-mix/issues/920 )
	 */
	public function enqueue_scripts()
	{

		// CSS
		wp_enqueue_style( 'base',       mix('css/_base.css'),       [], '1.0.0', 'all' );
		wp_enqueue_style( 'components', mix('css/_components.css'), [ 'base' ], '1.0.0', 'all' );
		wp_enqueue_style( 'utilities',  mix('css/_utilities.css'),  [ 'components' ], '1.0.0', 'all' );
		wp_enqueue_style( 'main',       mix('css/style.css'),       [ 'utilities' ], '1.0.0', 'all' );

		// JS
        //wp_enqueue_script( 'main', mix('js/app.js'), [], '1.0.0', true );

		// Activate browser-sync on development environment
		if ( in_array( env( 'WP_ENV' ), [ 'local', 'development' ] ) ) :
			wp_enqueue_script( '__bs_script__', get_site_url() . ':3000/browser-sync/browser-sync-client.js', array(), null, true );
		endif;

		// Extra
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
