<?php
/* Template Name: start-page
 * @package WordPress
 */
?>
<?php require('sidebar.php') ?>
<?php get_header(); ?>

<div class="main-content">
<div class="headcontent">
  <div class="embed-container">
	<?php the_field('headoembed'); ?> </div>
  <div class="image">	<?php the_field('headimage'); ?>
</div>
</div>

<div class="post">
<?php
$args = array( 'post_type' => 'videos', 'tax_query' => array( array('taxonomy' => 'types', 'field' => 'slug', 'terms' => 'rekommenderat' ), ), 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    echo '<ul>';
    echo '<li class="entry-content">';
    echo '<a href="';
    the_permalink($post->ID);
    echo '">';
    the_content();
        echo '<h1>';
      the_title();
         the_meta();
             echo '<h1>';
             echo '</br>';
      the_time('F j, Y');
    echo '</a>';
        echo '</li>';
    echo '</ul>';

endwhile;
?>
</div>

<div class="post">
<?php
$args = array( 'post_type' => 'videos', 'tax_query' => array( array('taxonomy' => 'types', 'field' => 'slug', 'terms' => 'populart' ), ), 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<ul>';
echo '<li class="entry-content">';
the_content();
    echo '<h1>';
  the_title();
     the_meta();
         echo '<h1>';
         echo '</br>';
  the_time('F j, Y');
echo '</li>';
echo '</ul>';
endwhile;
?>
</div>
<div class="post">
<?php
$args = array( 'post_type' => 'videos', 'tax_query' => array( array('taxonomy' => 'types', 'field' => 'slug', 'terms' => 'rekommenderat' ), ), 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<ul>';
echo '<li class="entry-content">';
the_content();
    echo '<h1>';
  the_title();
     the_meta();
         echo '<h1>';
         echo '</br>';
  the_time('F j, Y');
echo '</li>';
echo '</ul>';
endwhile;
?>
</div>
<div class="post">
<?php
$args = array( 'post_type' => 'videos', 'tax_query' => array( array('taxonomy' => 'types', 'field' => 'slug', 'terms' => 'populart' ), ), 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<ul>';
echo '<li class="entry-content">';
the_content();
    echo '<h1>';
  the_title();
     the_meta();
         echo '<h1>';
         echo '</br>';
  the_time('F j, Y');
echo '</li>';
echo '</ul>';
endwhile;
?>
</div>
</div>

<?php get_footer(); ?>
