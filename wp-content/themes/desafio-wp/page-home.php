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

    <section class="carousel swiper container">
      <?php
        $args = [
          'post_type' => 'video',
          'tax_query' => [[
            'taxonomy' => 'video_type',
            'field' => 'slug',
            'terms' => 'Filmes'
          ]]
        ];
        $query = new WP_Query($args);
        $verificaTitulo = false;
        while($query -> have_posts()){
          $query -> the_post();
          $terms = get_the_terms(get_the_ID(), 'video_type');
          if($terms && !is_wp_error($terms)){
            foreach($terms as $term){
              if($term -> taxonomy === 'video_type'){
                $categoria = $term->name;
              };
            };
          }; ?>

          <?php if($verificaTitulo == false){ ?>
            <h2 id="<?php echo $categoria ?>">
              <a href="/<?php echo $args['tax_query'][0]['taxonomy'] ?>/<?php echo strtolower($args['tax_query'][0]['terms']) ?>">
                <?php echo $categoria ?>
              </a>
            </h2>
            <div class="slider swiper-wrapper slider1">
              <?php $verificaTitulo = true; } ?>
              
                <div class="miniatura swiper-slide">
                <a href="<?php echo get_permalink() ?>"><img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>"></a>
                  <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
                  <a href="<?php echo get_permalink() ?>"><h3> <?php the_title(); ?> </h3></a>
                </div>

        <?php } ?>
      </div>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="left-arrow">
        <path d="M8.29,11.29a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42-1.42L11.41,13H15a1,1,0,0,0,0-2H11.41l1.3-1.29a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0ZM2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm18,0a8,8,0,1,1-8-8A8,8,0,0,1,20,12Z"></path>
      </svg>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="right-arrow">
        <path d="M15.71,12.71a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L12.59,11H9a1,1,0,0,0,0,2h3.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM22,12A10,10,0,1,0,12,22,10,10,0,0,0,22,12ZM4,12a8,8,0,1,1,8,8A8,8,0,0,1,4,12Z"></path>
      </svg>
    </section>

    <section class="carousel swiper container">
      <?php
        $args = [
          'post_type' => 'video',
          'tax_query' => [[
            'taxonomy' => 'video_type',
            'field' => 'slug',
            'terms' => 'Documentários'
          ]]
        ];
        $query = new WP_Query($args);
        $verificaTitulo = false;
        while($query -> have_posts()){
          $query -> the_post();
          $terms = get_the_terms(get_the_ID(), 'video_type');
          if($terms && !is_wp_error($terms)){
            foreach($terms as $term){
              if($term -> taxonomy === 'video_type'){
                $categoria = $term->name;
              };
            };
          }; ?>

          <?php if($verificaTitulo == false){ ?>
            <h2 id="<?php echo $categoria ?>">
              <a href="/<?php echo $args['tax_query'][0]['taxonomy'] ?>/<?php echo strtolower($args['tax_query'][0]['terms']) ?>">
                <?php echo $categoria ?>
              </a>
            </h2>
            <div class="slider swiper-wrapper slider2">
          <?php $verificaTitulo = true; } ?>

          <div class="miniatura swiper-slide">
          <a href="<?php echo get_permalink() ?>"><img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>"></a>
            <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
            <a href="<?php echo get_permalink() ?>"><h3> <?php the_title(); ?> </h3></a>
          </div>

        <?php } ?>

      </div>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="left-arrow">
        <path d="M8.29,11.29a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42-1.42L11.41,13H15a1,1,0,0,0,0-2H11.41l1.3-1.29a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0ZM2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm18,0a8,8,0,1,1-8-8A8,8,0,0,1,20,12Z"></path>
      </svg>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="right-arrow">
        <path d="M15.71,12.71a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L12.59,11H9a1,1,0,0,0,0,2h3.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM22,12A10,10,0,1,0,12,22,10,10,0,0,0,22,12ZM4,12a8,8,0,1,1,8,8A8,8,0,0,1,4,12Z"></path>
      </svg>
    </section>

    <section class="carousel swiper container">
      <?php
        $args = [
          'post_type' => 'video',
          'tax_query' => [[
            'taxonomy' => 'video_type',
            'field' => 'slug',
            'terms' => 'Séries'
          ]]
        ];
        $query = new WP_Query($args);
        $verificaTitulo = false;
        while($query -> have_posts()){
          $query -> the_post();
          $terms = get_the_terms(get_the_ID(), 'video_type');
          if($terms && !is_wp_error($terms)){
            foreach($terms as $term){
              if($term -> taxonomy === 'video_type'){
                $categoria = $term->name;
              };
            };
          }; ?>

          <?php if($verificaTitulo == false){ ?>
            <h2 id="<?php echo $categoria ?>">
              <a href="/<?php echo $args['tax_query'][0]['taxonomy'] ?>/<?php echo strtolower($args['tax_query'][0]['terms']) ?>">
                <?php echo $categoria ?>
              </a>
            </h2>
            <div class="slider swiper-wrapper slider3">
          <?php $verificaTitulo = true; } ?>

          <div class="miniatura swiper-slide">
          <a href="<?php echo get_permalink() ?>"><img src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>"></a>
            <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
            <a href="<?php echo get_permalink() ?>"><h3> <?php the_title(); ?> </h3></a>
          </div>

        <?php } ?>

      </div>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="left-arrow">
        <path d="M8.29,11.29a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42-1.42L11.41,13H15a1,1,0,0,0,0-2H11.41l1.3-1.29a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0ZM2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm18,0a8,8,0,1,1-8-8A8,8,0,0,1,20,12Z"></path>
      </svg>
      <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="right-arrow">
        <path d="M15.71,12.71a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L12.59,11H9a1,1,0,0,0,0,2h3.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM22,12A10,10,0,1,0,12,22,10,10,0,0,0,22,12ZM4,12a8,8,0,1,1,8,8A8,8,0,0,1,4,12Z"></path>
      </svg>
    </section>

  </div>
</main>

<?php get_footer(); ?>