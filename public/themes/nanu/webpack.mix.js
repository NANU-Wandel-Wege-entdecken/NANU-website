/*
 * AWPS uses Laravel Mix
 *
 * Check the documentation at
 * https://laravel.com/docs/5.6/mix
 */

let mix = require( 'laravel-mix' );

mix.setPublicPath( './assets/dist' );

mix.options({ processCssUrls: false });

const path = require('path');
require('dotenv').config( { path: path.resolve(process.cwd(), '../../../.env') });
const wp_url = process.env.WP_URL;

// BrowserSync and LiveReload on `npm run watch` command
// Update the `proxy` and the location of your SSL Certificates if you're developing over HTTPS
mix.browserSync({
	proxy: wp_url,
	// https: {
	// 	key: '/your/certificates/location/your-local-domain.key',
	// 	cert: '/your/certificates/location/your-local-domain.crt'
	// },
	files: [
		'**/*.php',
		'assets/dist/css/**/*.css',
		'assets/dist/js/**/*.js'
	],
	injectChanges: true,
	open: false
});

// Autloading jQuery to make it accessible to all the packages, because, you know, reasons
// You can comment this line if you don't need jQuery
// mix.autoload({
// 	jquery: ['$', 'window.jQuery', 'jQuery'],
// });


// Compile assets
// mix.sass( 'assets/src/sass/style.scss', 'assets/dist/css' )
//   // .js( 'assets/src/scripts/app.js', 'assets/dist/js' )
// 	// .js( 'assets/src/scripts/admin.js', 'assets/dist/js' )
// 	// .react( 'assets/src/scripts/gutenberg.js', 'assets/dist/js' )
// 	// .sass( 'assets/src/sass/admin.scss', 'assets/dist/css' )
//   // .sass( 'assets/src/sass/gutenberg.scss', 'assets/dist/css' );

mix
.postCss('assets/src/css/_base.css', 'assets/dist/css')
.postCss('assets/src/css/_components.css', 'assets/dist/css')
.postCss('assets/src/css/_utilities.css', 'assets/dist/css')
.postCss('assets/src/css/style.css', 'assets/dist/css');

// Add versioning to assets in production environment
if ( mix.inProduction() ) {
	mix.version();
}

// if (!mix.inProduction()) {
//   mix.webpackConfig({
//       //devtool: 'cheap-source-map'
//       //devtool: 'eval-cheap-source-map'
//       devtool: false
//   })
//  // .sourceMaps()
// }
