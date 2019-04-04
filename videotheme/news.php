<?php /* Template Name: news-page */
get_header();
?>
<?php require('sidebar.php') ?>
<div class="topnewshead"></div>
<div class="newshead">
  <i class="fa fa-paste">
  </i> <?php the_title();?>
   <button type="Button" class="SubBtn">Prenumerera</button>
</div>
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

        <div class="newstext">
                          <h2>Topnyheter</<h2>
          <p>Lorem ipsum dolor amet synth organic shabby chic adaptogen. </br>
            Vice poutine before they sold out la croix small batch narwhal. Marfa woke scenester selfies lo-fi organic gentrify.</br>
           Kombucha locavore distillery af taiyaki.Post-ironic ramps VHS sustainable, cold-pressed letterpress ugh 3 wolf moon</br>
              keytar yr pickled single-origin coffee PBR&B. DIY palo santo slow-carb try-hard jean shorts neutra mixtape actually lo-fi</p>
        </div>
    </div>

    <div class="newsnav">
    									<ul>
    		  		<li><a href="#"><i class="fa fa-music fa-4x"></i><p>Musik</p></a></li>
    		 		  <li><a href="#"><i class="fa fa-life-ring fa-4x"></i><p>Sport</p></a></li>
    		 		  <li><a href="#"><i class="fa fa-gamepad fa-4x"></i><p>Gaming</p></a></li>
    					<li><a href="#"><i class="fa fa-film fa-4x"></i><p>Filmer</p></a></li>
    					<li><a href="http://localhost/wordpress/nyheter/"><i class="fa fa-paste fa-4x"></i><p>Nyheter</p></a></li>
    					<li><a href="#"><i class="fa fa-heart fa-4x"></i><p>Live</p></a></li>
    					<li><a href="#"><i class="fa fa-camera fa-4x"></i><p>360-video</p></a></li>
    									</ul>
    </div>

</div>


<?php get_footer();?>
