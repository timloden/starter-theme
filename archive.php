<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter-theme
 */

get_header();
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="bg-light border-bottom mb-3">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <header class="page-header">
                            <h1 class="page-title text-center"><?php single_term_title(); ?></h1>
                            <?php the_archive_description( '<div class="archive-description text-center">', '</div>' ); ?>
                        </header><!-- .page-header -->
                    </div>
                </div>
            </div>
        </div>
        <?php 
        if ( have_posts() ) : 
        
            echo '<div class="container"><div class="row row-cols-1 row-cols-md-3 pt-5 pb-3">';
    
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

            echo '</div>';

            bootstrap_pagination();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();