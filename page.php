<?php
/**
 * The template for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package buonviaggio
 * @since 1.0
 */

get_header();
get_template_part( 'template-parts/banner', 'title' );
?>

<main >
 

      <?php
        // are there any posts in the DB?
        if ( have_posts() ) {
          while( have_posts() ) {
            the_post();

            if( has_post_thumbnail() ) {
              the_post_thumbnail(
                'large',
                array(
                  'class' => 'img-fluid'
                )
              );
            }
      ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php
            the_content();
          ?>

        </article>
      <?php
          }
        } else {
          get_template_part( 'template-parts/content', 'none' );
        }
      ?>

  
      </main>

<?php
get_footer();