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

<section id="hero" class="bg-beige -mt-4">
    <div class="container m-auto px-2 lg:px-0 grid grid-cols-12 grid-rows-hero">
        <div class="row-start-2 col-start-2 col-span-5 z-20">
            <div class="border-2 border-beige p-3 mr-20">
                <div class="bg-beige bg-opacity-80 p-8">
                    <h2 class="pb-0 font-nunitobold text-4xl">Genossenschaftliche, verpackungsfreie Bio-Hafermilch & mehr</h2>
                </div>
            </div>
        </div>
        <div class="row-start-3 col-start-2 col-span-3 z-20 pl-12 pt-4 pr-2">
            <p>Ein intakter Wald soll gerodet werden - um eine Autobahn zu bauen, die die Menschen dort nicht wollen. Interview mit einer Aktivistin gegen diesen Irrsinn.</p>
        </div>
        <div class="row-start-1 row-span-4 col-start-5 col-span-8 z-10">
            <img class="shadow-hero" src="/themes/nanu/assets/dist/images/danni-haus.jpg">
        </div>
    </div>
</section>


<section id="articles" class="bg-white -mt-20 ">
    <div class="container m-auto px-2 sm:px-5 lg:px-0 pt-48 pb-20">
        <h2><span class="text-red">Aktuell</span> beliebte Artikel</h2>
        <div id="primary" class="content-area">
            <main id="main" class="site-main grid grid-cols-1 md:grid-cols-2 gap-10" role="main">

            <?php // WP_Query arguments
            $args = array(
                'posts_per_page'         => 4,
                'order' => 'DESC',
                'orderby' => 'date',
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    get_template_part( 'views/content-teaser' );
                }
            } else {
                // no posts found
            }
            ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</section>


<section id="cta-newsletter" class="bg-pink border-t-4 border-b-4 border-pink-light text-white py-20">
    <div class="container m-auto px-2">
        CTA NEWSLETTER
    </div>
</section>


<section id="books" class="container m-auto px-2 py-20">
    <h2>Unsere <span class="text-red">Buchempfehlungen</span></h2>
</section>


<section id="cta-participate" class="bg-grey py-20">
    <div class="container m-auto px-2">
        CTA PARTICIPATE
    </div>
</section>


<section id="pages" class="container m-auto px-2 py-20">
PAGES
</section>

<?php
get_footer();
