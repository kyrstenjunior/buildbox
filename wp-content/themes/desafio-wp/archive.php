<!-- Página de categoria -->
<?php get_header(); ?>

<section id="pagina-categoria" class="container padding-top-page">

  <?php if ( have_posts() ) : ?>
    <div class="content">
      <?php the_archive_title("<h1 class='titulo'>", "</h1>"); ?>
      <?php the_archive_description(); ?>
    </div>

    <div class="grid-template">
      <?php while ( have_posts() ) : ?>
        <?php the_post() ?>
        <div class="miniatura">
          <a href="<?php echo get_permalink() ?>"><img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>"></a>
          <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
          <?php the_title(sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        </div>
      <?php endwhile ?>
    </div>
  <?php endif ?>

  <script>
    let titulo = document.querySelector("#pagina-categoria .titulo");
    let removeText = titulo.textContent.substring(15);
    titulo.textContent = removeText;
  </script>

</section>

<?php get_footer(); ?>