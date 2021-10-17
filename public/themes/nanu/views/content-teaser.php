<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nanu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="flex">
            <div>
                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail($size = 'featured', $attr = ''); ?>
                </a>
            </div>
            <?php the_date( 'd.m.Y', '<div><p class="absolute label text-sm pt-1 px-2 pb-0 text-white bg-pink hidden sm:inline-block ">', '</p></div>') ?>
        </div>

        <p class="text-sm pt-2 pb-2">
            <span class="font-nunitoxbold"><?php the_category(' '); ?></span> <?php _e( 'von', 'nanu' ); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="Erfahre mehr über <?php the_author_meta('user_firstname'); ?>"><?php the_author(); ?></a>
        </p>

        <a class="text-grey-dark hover:text-grey-dark" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
            <?php the_title( '<h3 class="entry-title pt-1 pb-2">', '</h3>' ); ?>
        </a>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <a class="text-grey-dark hover:text-grey-dark" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
            <?php the_excerpt(); ?>
        </a>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
