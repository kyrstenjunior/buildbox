<!-- Página de categoria -->
<?php get_header(); ?>

<section id="pagina-categoria">

  <?php if ( have_posts() ) : ?>

  <h1><?php the_archive_title("<h1 class='titulo'>", "</h1>"); ?></h1>
  <p><?php the_archive_description(); ?></p>

  <?php while ( have_posts() ) : ?>
    <?php the_post() ?>
    <div class="miniatura">
      <img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
      <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
      <?php the_title(sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    </div>
  <?php endwhile ?>

  <?php endif ?>

  <!-- <?php
    $args = [
      'post_type' => 'video'
    ];
    $query = new WP_Query($args);
    while($query -> have_posts()){
      $query -> the_post(); ?>
  <?php } ?> -->
</section>

<?php get_footer(); ?>