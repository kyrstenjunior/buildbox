<?php get_header(); ?>

<main class="content-area">
  <div class="conteudo-inicial">
    <!--Loop para recuperar dados dos posts-->
    <?php
      $args = [
        'post_type' => 'video',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
      ];
      $query = new WP_Query($args);
      while($query -> have_posts()){
        $query -> the_post();
        $terms = get_the_terms(get_the_ID(), 'video_type');
        $categoria = '';
        if($terms && !is_wp_error($terms)){
          foreach($terms as $term){
            if($term -> taxonomy === 'video_type'){
              $categoria = $term->name;
            };
          };
        }; ?>

        <!--Criar a seção para último post inserido-->
        <section class="bg-inicial" style="background-image: url(<?php the_field('imagem_de_capa') ?>)" >
        <div class="bg-filter"></div>
          <div class="featured-content">
            <span class="video-type"> <?php echo $categoria ?> </span>

            <?php if(get_field('bx_play_video_duration')){ ?>
              <span class="duration"> <?php the_field('bx_play_video_duration') ?>m</span>
            <?php } ?>          
            
            <h1><?php the_title(); ?></h1>

            <a href="<?php echo get_permalink(); ?>">Mais informações</a>
          </div>
        </section>
    <?php } ?>

      <!--Loop para recuperar dados dos posts-->
      <?php
        $args = [
          'post_type' => 'video',
          'orderby' => 'term_id',
          'order' => 'ASC',
        ];
        $query = new WP_Query($args);

        while($query -> have_posts()){
          $query -> the_post();
          $terms = get_the_terms(get_the_ID(), 'video_type');
          $categoria = '';
          if($terms && !is_wp_error($terms)){
            foreach($terms as $term){
              if($term -> taxonomy === 'video_type'){
                $categoria = $term->name;
              };
            };
          }; ?>

        <?php if($categoria == "Filmes"){ ?>

          <section class="carousel">
            <h2 id="<?php echo $categoria ?>"><a href=""> <?php echo $categoria ?> </a></h2>
            <div class="slider">
              <div class="miniatura">
                <img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
                <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
                <h3> <?php the_title(); ?> </h3>
              </div>
            </div>
          </section>

        <?php } elseif($categoria == "Documentários"){ ?>

          <section class="carousel">
            <h2 id="<?php echo $categoria ?>"><a href=""> <?php echo $categoria ?> </a></h2>
            <div class="slider">
              <div class="miniatura">
                <img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
                <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
                <h3> <?php the_title(); ?> </h3>
              </div>
            </div>
          </section>

        <?php } elseif($categoria == "Séries"){ ?>

          <section class="carousel">
            <h2 id="<?php echo $categoria ?>"><a href=""> <?php echo $categoria ?> </a></h2>
            <div class="slider">
              <div class="miniatura">
                <img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
                <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
                <h3> <?php the_title(); ?> </h3>
              </div>
            </div>
          </section>

        <?php } ?>

      <?php } ?>
  </div>
</main>

<?php get_footer(); ?>