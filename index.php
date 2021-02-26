<?php
/**
 * The main template file 
 *	
 *	Resources page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter-theme
 */

get_header();
?>
<div class="bg-light border-bottom">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <header class="page-header">
                    <h1 class="page-title text-center">Blog</h1>
                    <div class="archive-description text-center"></div>
                </header><!-- .page-header -->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
				if ( have_posts() ) :
				
				echo '<div class="row row-cols-1 row-cols-md-3 pt-5 pb-3">';
				
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
</div>


<?php
get_footer();