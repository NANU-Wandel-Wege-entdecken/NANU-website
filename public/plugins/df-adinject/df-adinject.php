<?php
/*
Plugin Name: digital fellow - AdInject
Plugin URI:  https://digitalfellow.eu
Description: Dieses Plugin ermöglicht das angepasste Injezieren von AdCode am Ende eines Artikels
Version:     1.0
Author:      Michael Hartl
Author URI:  https://digitalfellow.eu
*/
 
function df_after_post_content($content){
    if (is_single()) {  
        
        if ( in_category( array( '89', '57', '9', '493', '7', '492', '36' ) )) {
            $content .='
                <div class="adsingle">
                    <ins data-revive-zoneid="7" data-revive-id="a476a6839abba5db5c2dc4f89714f5bc"></ins>
                    <script async src="//img.digitalfellow.eu/www/delivery/asyncjs.php"></script>
                </div>';
        } elseif ( in_category( 'Tropical Birds' )) {
            // We are fine
        } else {
            // Fine again!
        } 
        
    }
    return $content;
}
add_filter( "the_content", "df_after_post_content" );

?>