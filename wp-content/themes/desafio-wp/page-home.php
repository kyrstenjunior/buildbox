<?php get_header(); ?>

<main class="content-area">
  <div class="conteudo-inicial">
    <!--Loop para recuperar dados dos posts-->
    <?php
      $args = ['post_type' => 'video'];
      $query = new WP_Query($args);
      while($query -> have_posts()){
        $query -> the_post(); ?>
        <ul>
          <li>
            <a href="<?php echo get_permalink(); ?>">
              <?php the_title(); ?>
              <span>
                <?php the_taxonomies() ?>
              </span>
            </a>
          </li>
        </ul>
      <?php } ?>

      <!--Criar a seção para último post inserido-->
      <section class="bg-inicial">
        <div class="featured-content">
          <span class="video-type"></span>

          <?php if(get_field('bx_play_video_duration')){ ?>
            <span class="duration"> <?php the_field('bx_play_video_duration') ?> </span>
          <?php } ?>          
          
          <h1><?php the_title(); ?></h1>
          <a href="<?php echo get_permalink(); ?>">Mais informações</a>
        </div>
      </section>

      <!--Criar carrossel de filmes-->
      <section class="carousel">
        <h2>Filmes</h2>
        <div class="miniatura">
          <img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
          <span class="duration"> <?php the_field('bx_play_video_duration') ?> </span>
          <h3> <?php the_title(); ?> </h3>
        </div>
      </section>
      <!--Criar carrossel de documentários-->
      <!--Criar carrossel de séries-->

  </div>
</main>

<?php get_footer(); ?>