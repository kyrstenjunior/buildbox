<?php get_header(); ?>

<section>
  <div>
    <!--Loop para recuperar dados dos posts-->
    <?php while(have_posts()){
      the_post(); ?>

      <h1><?php the_title() ?></h1>

    <?php } ?>
  </div>
</section>

<?php get_footer(); ?>