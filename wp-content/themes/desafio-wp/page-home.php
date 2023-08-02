<?php get_header(); ?>

<section class="content-area">
  <div class="conteudo-inicial">
    <?php
      $args = ['post_type' => 'video'];
      $query = new WP_Query($args);
      while($query -> have_posts()){
        $query -> the_post(); ?>
        <ul>
          <li>
            <a href="<?php echo get_permalink(); ?>">
              <?php echo the_title(); ?>
              <!-- <?php echo the_content(); ?> -->
            </a>
          </li>
        </ul>
      <?php } ?>
  </div>
</section>

<?php get_footer(); ?>