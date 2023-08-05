<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Play</title>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/carousel.js"></script>
</head>
<body <?php body_class() ?> >
  
  <header class="flex-row-center">
    <div class="container">
      <div class="logo">
        <a href="/buildbox/"><?php the_custom_logo() ?></a>
      </div>
      <nav class="menu desktop-only">
        <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
      </nav>
      <nav class="menu mobile-only">
        <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
      </nav>
    </div>
  </header>