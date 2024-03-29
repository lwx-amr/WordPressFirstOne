<?php
    get_header();

    echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-9'>";
          $currentPage = ( get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page'=>2,
            'paged' => $currentPage,
          );
          query_posts($args);
          if (have_posts()) {
            echo "<div class='row'>";
            while ( have_posts() ) {
              the_post();
              echo "<div class='col-6'>";
              get_template_part( 'mypostformat', get_post_format());
              echo "</div>";
            }
            echo "</div>";
          }
          wp_reset_query();
        echo "</div>";
        echo "<div class='col-3'>";
          get_sidebar();
        echo "</div>";
      echo "</div>";
      echo "<div class='row'>";
        echo "<div class='col-9'>";
          echo "<div class='row'>";
            echo "<div class='col-6 text-left'>";
              previous_posts_link('< Newer');
            echo "</div>";
            echo "<div class='col-6 text-right'>";
              next_posts_link('Older >');
            echo "</div>";
          echo "</div>";
         echo "</div>";
      echo "</div>";
    echo "</div>";
    get_footer();
?>
