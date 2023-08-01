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
</head>
<body <?php body_class() ?> >
  
  <header class="flex-row-center">
    <div class="container">
      <div class="logo">
        <a href="/buildbox/"><?php the_custom_logo() ?></a>
      </div>
      <nav class="menu">
        <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
      </nav>
    </div>
  </header>