<?php get_header(); ?>

<section class="content-area">
  <div class="conteudo-inicial">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();
        }
      } else {
        echo "<p>Não possuem posts no momento!</p>";
      }
    ?>
  </div>
</section>

<?php get_footer(); ?>