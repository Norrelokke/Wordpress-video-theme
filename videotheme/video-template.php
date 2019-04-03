<?php
/**
 * Template Name: Videos
 **/
?>
<?php get_header(); ?>
<?php require('sidebar.php') ?>


<div class="embed-container">
  <h1><?php the_title() ?></h1>
<?php  the_content();?>
<?php       the_meta();?>
<?php the_field('video'); ?> </div>


<?php get_footer();?>
