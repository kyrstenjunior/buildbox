<?php get_header(); ?>

<section id="single-page" class="container padding-top-page">
  <?php if ( have_posts() ) : ?>
    <?php the_post(); ?>
      <div class="infos">
        <?php
          $terms = get_the_terms(get_the_ID(), 'video_type');
          if($terms && !is_wp_error($terms)){
            foreach($terms as $term){
              if($term -> taxonomy === 'video_type'){
                $categoria = $term->name;
              };
            };
          };
        ?>
        <span class="video-type"><?php echo $categoria ?></span>
        <span class="duration"> <?php the_field('bx_play_video_duration') ?>m </span>
        <?php the_title('<h3>', '</h3>'); ?>
      </div>

      <div class="video">
        <svg onclick="play()" id="play" xmlns="http://www.w3.org/2000/svg" width="89.563" height="89.563" viewBox="0 0 89.563 89.563">
          <path fill="#fff" d="M45.781,1A44.781,44.781,0,1,0,90.563,45.781,44.834,44.834,0,0,0,45.781,1ZM64.325,49.168,39.9,65.452a4.07,4.07,0,0,1-6.33-3.387V29.5a4.068,4.068,0,0,1,6.326-3.387L64.321,42.394a4.07,4.07,0,0,1,0,6.774Z" transform="translate(-1 -1)"/>
        </svg>
        <img id="capa" src="<?php the_field('imagem_de_capa') ?>" alt="<?php the_title(); ?>">
        <?php the_field('bx_play_video_ID') ?>
      </div>

      <div class="sinopse">
        <p><?php the_field('sinopse') ?></p>
      </div>

  <?php endif ?>

  <script>
    let btnPlay = document.querySelector("#play");
    let imgCover = document.querySelector("#capa");
    let video = document.querySelector('header .logo');

    function play(){
      video.src += '?autoplay=1';
      btnPlay.classList.add("hidden");
      imgCover.classList.add("hidden");
    };

  </script>

</section>

<?php get_footer(); ?>