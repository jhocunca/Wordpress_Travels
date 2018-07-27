<?php
/**
 * @package Businessweb Plus
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
     
    <?php 
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb">';
            the_post_thumbnail();
			echo '</div>';
		}
        ?>
        
     <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    
     

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'businessweb-plus' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
            <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
            <div class="post-comment"> &nbsp;|&nbsp; <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div> 
             <div class="post-categories">&nbsp;|&nbsp; <?php _e('Category:','businessweb-plus'); ?> <?php the_category( __( 'Category: ', 'businessweb-plus' )); ?></div>
              <div class="post-tags"><?php the_tags(); ?></div>
            <div class="clear"></div>         
    </div><!-- postmeta -->
    </div><!-- .entry-content -->
   
    <footer class="entry-meta">
      <?php edit_post_link( __( 'Edit', 'businessweb-plus' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->

</article>