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
              <a href="?"><?=get_field('menu')['all'];?></a>
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
                        <a href="<?php the_field('video_link');?>" target="_blanc">
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
              <a href="<?php the_field('video_link');?>" target="_blanc">
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
    <section id= "contacts" class="feadback">
      	<div class="wrapper">
        	<h2 class="feadback__header"><?php pll_e('Let’s discuss your project'); ?></h2>
        	<div class="feadback__wrapper">
            	<?php echo do_shortcode( '[cf7form cf7key="contact-form-1"]' ); ?>
            
             	<div class="feadback__text-block">
                	<div class="feadback__schedule">
                  		<span><?php pll_e('schedule a call for'); ?>:</span>
						  <a href="<?php echo get_permalink(pll_get_post(664));?>">15 <?php pll_e('minutes'); ?></a>
						  <a href="<?php echo get_permalink(pll_get_post(664));?>">30 <?php pll_e('minutes'); ?></a>
                	</div>
            		<div class="feadback__contacts">
             			<span><?php pll_e('or contact us'); ?>:</span>
                  		<div class="feadback__contacts-block">
							<ul class="feadback__social-list social-list">
              <li><a href="//www.facebook.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-fb.svg';?>" alt="facebook"></a></li>
								<li><a href="//www.instagram.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-insta.svg';?>" alt="instagram"></a></li>
								<li><a href="//www.youtube.com/channel/UCfr9ZTQRygqz8fFzoxxeICg"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-youtube.svg';?>" alt="youtube"></a></li>
								<li><a href="//www.linkedin.com/company/digital-northman-ab/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-ln.svg';?>" alt="linkedin"></a></li>
							</ul>
                    		<a href="tel:+46708478122">+46&nbsp;70&nbsp;847&nbsp;8122</a>
                    		<a href="mailto:info@northmanvr.com" class="feadback__email">info@northmanvr.com</a>
                  		</div>
                  		<div class="feadback__adress-block">
							<p>
							Northman VR <br>c/o Impact Hub Stockholm <br> Jakobsbergsgatan 22 <br> 111 44 Stockholm Sweden <br>VAT:SE559149424901
							</p>
                 		 </div>
            		</div>
	       		 </div>
        	</div>

	  </div>
    </section>
  </main>
<?php
    get_footer();
?>
