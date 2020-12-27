<?php
/**
 * front page template file
 *
 * This is the template file for our front page
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-front-page-templates/
 *
 * @package Nanu
 */

get_header(); ?>

<div id="hero" class="bg-beige py-20">
    <div class="container m-auto px-2">
        HERO
    </div>
</div>


<div id="articles" class="container m-auto px-2 py-20">
    <h2><span class="text-red">Aktuell</span> beliebte Artikel</h2>
</div>


<div id="cta-newsletter" class="bg-pink border-t-4 border-b-4 border-pink-light text-white py-20">
    <div class="container m-auto px-2">
        CTA NEWSLETTER
    </div>
</div>


<div id="books" class="container m-auto px-2 py-20">
    <h2>Unsere <span class="text-red">Buchempfehlungen</span></h2>
</div>


<div id="cta-participate" class="bg-grey py-20">
    <div class="container m-auto px-2">
        CTA PARTICIPATE
    </div>
</div>


<div id="pages" class="container m-auto px-2 py-20">
PAGES
</div>

<?php
get_footer();
