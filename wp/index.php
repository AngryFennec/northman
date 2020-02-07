<?php get_header();?>
  <main class="main">
    <section class="skin skin--main">
      <div class="wrapper">
        <div class="skin__text-block">
          <h2 class="skin__title"><?php the_field('main_title');?></h2>
          <p class="skin__info"><?php the_field('main_info');?></p>

        </div>
        <ul class="skin__social-list social-list">
        <li><a href="//www.facebook.com/virtualnorthman/">FB</a></li>
        <li><a href="//www.instagram.com/virtualnorthman/">IG</a></li>
        <li><a href="//www.youtube.com/channel/UCfr9ZTQRygqz8fFzoxxeICg">YT</a></li>
        <li><a href="//www.linkedin.com/company/digital-northman-ab/">LN</a></li>
        </ul>
</div>  
        <img class="wheel-skin" src="<?php echo  get_template_directory_uri() . '/assets/img/round-white.png';?>" alt="wheel">
    </section>
    <section class="about">
      <img class="wheel-about" src="<?php echo  get_template_directory_uri() . '/assets/img/round-blue.png';?>" alt="wheel">
      <span class="about__decor decor"><?php the_field('description__decor');?></span>
      <div class="wrapper">
        <h2 class="about__title">
          <span class="about__main-title"><?php the_field('description_title');?></span>
          <span class="about__subtitle"><?php the_field('about_subtitle');?></span>
        </h2>
        <div class="about__content"><?php the_field('description_content');?></div>
        <a href="<?php echo get_permalink(pll_get_post(386));?>" class="about__portfolio-link"><?php the_field('about_link-text');?></a>
      </div>
    </section>
    <section class="gallery">
      <h2 class="visually-hidden">Slider</h2>
      <div class="wrapper wrapper--nopadding">
        <div class="gallery__main-slider">
          <div class="swiper-container gallery__main-slider-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide gallery__item">
                <h3><?=get_field('ivt_group')['title'];?></h3>
                <div class="gallery__item-text">
                  <p><?=get_field('ivt_group')['content'];?></p>
                  <a href="<?=get_field('ivt_group')['link'];?>"><?=get_field('ivt_group')['link_text'];?></a>
                </div>
                <div class="gallery__slider gallery__img--slider js-gallery-first">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('ivt_group')['image'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('ivt_group')['image-2'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('ivt_group')['image-3'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                    </div>
                    <span class="js-current">01</span>
                    <span class="js-all">03</span>
                    <div class="swiper-pagination swiper-pagination-first">
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide gallery__item">
                <h3><?=get_field('vr_group')['title'];?></h3>
                <div class="gallery__item-text">
                  <p><?=get_field('vr_group')['content'];?></p>
                  <a href="<?=get_field('vr_group')['link'];?>"><?=get_field('vp_group')['link_text'];?></a>
                </div>
                <div class="gallery__slide gallery__img--slider  js-gallery-second">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('vr_group')['image'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('vr_group')['image-2'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                    </div>
                    <span class="js-current">01</span>

                    <span class="js-all">02</span>
                    <div class="swiper-pagination swiper-pagination-second"></div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide gallery__item">
                <h3><?=get_field('_360-group')['title'];?></h3>
                <div class="gallery__item-text">
                  <p><?=get_field('_360-group')['content'];?></p>
                  <a href="<?=get_field('_360-group')['link'];?>"><?=get_field('_360-group')['link_text'];?></a>
                </div>
                <div class="gallery__img">
                  <img src="<?=get_field('_360-group')['image'];?>" width=854 height=570 alt="picture">
                </div>
              </div>

              <div class="swiper-slide gallery__item">
                <h3><?=get_field('drone-group')['title'];?></h3>
                <div class="gallery__item-text">

                  <p><?=get_field('drone-group')['content'];?></p>
                  <a href="<?=get_field('drone-group')['link'];?>"><?=get_field('drone-group')['link_text'];?></a>
                </div>
                <div class="gallery__slide gallery__img--slider  js-gallery-third">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('drone-group')['image'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery__slider-container">
                          <img src="<?=get_field('drone-group')['image-2'];?>" width=854 height=570 alt="picture">
                        </div>
                      </div>
                    </div>
                    <span class="js-current">01</span>

                    <span class="js-all">02</span>
                    <div class="swiper-pagination swiper-pagination-third"></div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide gallery__item">
                <h3><?=get_field('render-group')['title'];?></h3>
                <div class="gallery__item-text">

                  <p><?=get_field('render-group')['content'];?></p>
                  <a href="<?=get_field('render-group')['link'];?>"><?=get_field('render-group')['link_text'];?></a>
                </div>
                <div class="gallery__img">
                  <img src="<?=get_field('render-group')['image'];?>" width=854 height=570 alt="picture">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gallery__more">
          <a href="#"><?php pll_e('See All Projects'); ?></a>
        </div>
      </div>

    </section>
    <section class="friends">
      <div class="wrapper">
        <h2 class="friends__title"><?php the_field('friends_title');?></h2>
        <ul class="friends__list">
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Colliers logo (1).png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Helsinki logo (1).png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>bergendal 2.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Cityvarasto-logo.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Veho logo 1.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Bagel Street Cafe.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Varma logo.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Hankkija logo.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Thon property logo.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Helsingin Yliopisto.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>REALIA Group.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>tampere.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>24 storage logo.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Suomen Ev..png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>samk.png" alt="logo"></li>
          <li class="friends__item"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>Metsahallitus.png" alt="logo"></li>
        </ul>
      </div>
    </section>
    <section class="feadback">
      <div class="wrapper">
        <h2 class="feadback__header"><?php pll_e('Let’s discuss your project'); ?></h2>
		<?php echo do_shortcode( '[cf7form cf7key="contact-form-1"]' ); ?>
		
      </div>
    </section>
    <style>
        .skin--main {
          background: url('<?php the_field('skin');?>') no-repeat center 0; 
          background-size: cover; 
        }
        @media(max-width: 500px){
          .skin--main {
            background-image: url('<?php the_field('skin_mob');?>')}
          }
        }
          </style>

  </main>

  <?php get_footer();?>