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

<section id="hero" class="bg-beige py-20">
    <div class="container m-auto px-2">
        HERO
    </div>
</section>


<section id="articles" class="container m-auto px-2 sm:px-5 py-20">
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
