<?php
/*
  Template Name: Page With Only Title
*/
  get_header();
  echo "<div class='container'>";

       if ( have_posts()) {
         while ( have_posts() ) {
           the_post();
   ?>
     <h1> <?php  the_title(); ?> </h1>
   <?php
         }
       }

  echo "</div>";
  get_footer();
 ?>
