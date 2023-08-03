<!-- Página de categoria -->
<?php get_header(); ?>

<section>
  <div>
    <?php
      while(have_posts()){
        the_post(); ?>
        <h1><?php the_taxonomies() ?></h1>
        <h2><?php the_title() ?></h2>
      <?php } ?>
  </div>
</section>

<?php get_footer(); ?>