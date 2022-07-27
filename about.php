<?php
/**
 * Template Name: About Page
 *
 */

 get_header("color");?>

<header class='masthead'>
  <p class='masthead-intro'><?php the_title( ); ?></p>
</header>

<section class="introduction-section">
  <?php echo get_the_post_thumbnail_url(); ?>
  <?php the_content( '<p>', '</p>' ); ?>
</section>

<br><br>
      <?php
      get_footer();
      ?>
    