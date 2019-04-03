
<?php /* Template Name: single-videos
*/ ?>


<?php get_header(); ?>
   <?php require('sidebar.php') ?>

      <div class="main-container">
          <?php
                  while ( have_posts() ) : the_post(); ?>
               <?php the_content(); ?>
               <h1><?php the_title(); ?></h1>
               <p><?php the_time('F j, Y'); ?></p>
               <?php endwhile; ?>
      </div>

<?php get_footer();?>
