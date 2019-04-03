<?php /* Template Name: news-page */
get_header();
?>
<?php require('sidebar.php') ?>
<div class="newshead"> <?php the_title();?> </div>
<div class="main-news">

<div class="post">
<?php
$args = array( 'post_type' => 'videos', 'tax_query' => array( array('taxonomy' => 'types', 'field' => 'slug', 'terms' => 'nyheter' ), ), 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<ul>';
echo '<li class="entry-content">';
the_content();
  the_title();
     the_meta();
        echo '</br>';
         echo '</br>';
  the_time('F j, Y');
echo '</li>';
echo '</ul>';
endwhile;
?>
</div>
</div>
<?php get_footer();?>
