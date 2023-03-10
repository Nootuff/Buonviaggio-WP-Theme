<?php
/**
 * This is The Individual post file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buonviaggio
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > <!--These are all wp functions fetching data form the post-->
            <div class="meta">
              <span><?php echo get_the_date('M d, Y'); ?></span>
            </div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="excerpt">
              <?php force_balance_tags( the_excerpt() ); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read el full post ->', 'buonviaggio'); ?></a>
          </article>