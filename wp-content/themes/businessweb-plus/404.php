<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Businessweb Plus
 */

get_header(); ?>

<div class="container">
    <div class="pagecontent-wrap">
        <section class="content-layout" id="sitelayout">
            <header class="page-header">
                <h1 class="entry-title"><?php _e( ' Oops! page Not Found', 'businessweb-plus' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php _e( 'It looks like nothing was found at this location.', 'businessweb-plus' ); ?></p>               
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>