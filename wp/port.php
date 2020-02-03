<?php
    /*
    Template Name: Port
    */

    get_header();

?>
  <main class="main">
    <section class="services">
      <div class="wrapper">
          <h2 class="services__header"><?php the_field('title');?></h2>
          <div class="services__menu__wrapper">
            <div class="services__menu-select">Menu</div>
            <nav class="services__menu services__menu--up ">
              <a href="#"><?=get_field('menu')['all'];?></a>
              <a href="?cat=VR"><?=get_field('menu')['virtual_reality'];?></a>
              <a href="?cat=IVT"><?=get_field('menu')['ivt'];?></a>
              <a href="?cat=360"><?=get_field('menu')['_360_videos_'];?></a>
              <a href="?cat=DS"><?=get_field('menu')['drone_services'];?></a>
              <a href="?cat=3D"><?=get_field('menu')['3d_rendering'];?></a>
            </nav>
          </div>
          <ul class="services__list">
          <?php
          $cat = $_GET['cat'];
            $arg_work['post_type'] = 'Portfolio';
            if ($cat) {
              $arg_work['meta_query'] = [
                'key'=> 'service',
                'value' => $cat
              ];
            }
            $catquery_work = new WP_Query($arg_work);
            $i = 1;
            while($catquery_work->have_posts()) : $catquery_work->the_post(); 
            if (isset($_REQUEST['cat'])) {
                  if (get_field('service') == $_REQUEST['cat']) { ?>
                      <li class="services__item">
                        <a href="<?php the_field('video_link');?>" data-fancybox = "portfolio">
                          <div class="services__item-arrow">
                            <img src="<?php echo  get_template_directory_uri() . "/assets/img/arrow-white.svg";?>" alt="">
                          </div>
                          <div class="services__item-img"><img src="<?php the_field('image');?>" alt="preview"></div>
                          <div class="services__item-header">
                            <span><?php pll_e(get_field('service'));?></span>
                            <h3><?php the_field('title');?></h3>
                          </div>
                        </a>
                      </li>
                      <?php if ($i%4 === 0) { ?>
                      </ul>
                        <ul class="services__list">
                      <?php  $i=0;
                      }
                      $i++;
                   }
            } else {?>
              <li class="services__item">
              <a href="<?php the_field('video_link');?>" data-fancybox = "portfolio">
                <div class="services__item-arrow">
                  <img src="<?php echo  get_template_directory_uri() . "/assets/img/arrow-white.svg";?>" alt="">
                </div>
                <div class="services__item-img"><img src="<?php the_field('image');?>" alt="preview"></div>
                <div class="services__item-header">
                  <span><?php pll_e(get_field('service'));?></span>
                  <h3><?php the_field('title');?></h3>
                </div>
              </a>
            </li>
            <?php if ($i%4 === 0) { ?>
            </ul>
              <ul class="services__list">
            <?php  $i=0;
            }
            $i++;
            }?>
            

            <?php endwhile;
            $catquery_work->reset_postdata(); 
            ?>

      </div>
    </section>
    <section class="feadback">
      <div class="wrapper">
        <h2 class="feadback__header"><?php pll_e('Let’s discuss your project'); ?></h2>
        <?php echo do_shortcode( '[cf7form cf7key="contact-form-1"]' ); ?>
      </div>
    </section>
  </main>
<?php
    get_footer();
?>
