<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>favicon.png" type="image/x-icon">
  <title>Northman VR</title>


  <?php wp_head() ?>
</head>

<body class="page-body <?php if ($pagename === 'our-portfolio' || $pagename === 'our-portfolio-2'||$pagename === 'our-portfolio-3' ||$pagename === 'our-portfolio-4' || $pagename === 'calendar' || $pagename === 'calendar-2' || $pagename === 'calendar-3' || $pagename === 'calendar-4') echo 'page-body--portfolio';?>">
  <span class="decor decor--big">Nortman VR</span>
  <h1>Northman</h1>
  <header class="header">
    <nav class="header__menu">
    <?php if ($pagename === 'our-portfolio' || $pagename === 'our-portfolio-2'||$pagename === 'our-portfolio-3' ||$pagename === 'our-portfolio-4') :?>
      <a href="/" class="header__portfolio-link"><?php pll_e('Main Page'); ?></a>
      <?php else :?>
        <a href="<?php echo get_permalink(pll_get_post(386));?>" class="header__portfolio-link"><?php pll_e('Our Portfolio'); ?></a>
      <?php endif;?>
      <div class="header__logo-block">
        <a href="/"><img class="header__logo" src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo.svg" alt="logo"></a>
      </div>
      <ul><?php pll_the_languages([
          'display_names_as' => 'slug',
          'hide_if_no_translation' => 1
      ]); ?></ul>
      <button class="header__burder" type="button"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>burger.svg" alt=""></button>
    </nav>
  </header>
  <?php if ($_COOKIE['agree'] !== 'yes') :?>
            <section class="cookie">
              <p>To make this site work properly we <a href="#">use cookies</a>.<a class="cookie__agree" href="#">Accept</a></p>
            </section>
  <?php endif;?>