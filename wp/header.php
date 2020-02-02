<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>favicon.png" type="image/x-icon">
  <title>Northman</title>


  <?php wp_head() ?>
</head>

<body class="page-body">
  <span class="decor decor--big">Nortman VR</span>
  <h1>Northman</h1>
  <header class="header">
    <nav class="header__menu">
      <a href="/wp/portfolio/" class="header__portfolio-link"><?php pll_e('Our Portfolio'); ?></a>
      <div class="header__logo-block">
        <img class="header__logo" src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo.svg">
      </div>
      <ul><?php pll_the_languages([
          'display_names_as' => 'slug'
      ]); ?></ul>
      <!-- <ul class="header__lang-list">
        <li class="header__lang"><a href="?lang=en">EN</a></li>
        <li class="header__lang"><a href="?lang=sv">SV</a></li>
        <li class="header__lang"><a href="?lang=fi">FI</a></li>
        <li class="header__lang"><a href="?lang=no">NO</a></li>
      </ul> -->
      <button class="header__burder" type="button"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>burger.svg" alt=""></button>
    </nav>
  </header>