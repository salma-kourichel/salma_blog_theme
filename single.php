<?php get_header(); ?>

<div class="flip-container">
  <div class="flip-page">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
    endif;
    ?>
  </div>
  <button id="flip-next">Next</button>

</div>


<?php get_footer(); ?>
