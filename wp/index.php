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
        <a href="/our-portfolio/" class="about__portfolio-link"><?php the_field('about_link-text');?></a>
      </div>
    </section>
    <section class="gallery">
      <h2 class="visually-hidden">Слайдер галерея</h2>
      <div class="wrapper wrapper--nopadding">
        <div class="gallery__main-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="gallery__item">
                <div class="gallery__item-text">
                  <h3>Interactive Virtual Tours</h3>
                  <p>The user can remotely view an environment in full 360-degrees around the room standing in one point, or they can switch to a different room. </p>
                  <a href="#">Learn more</a>
                </div>
                <div class="gallery__slider">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img></div>
                      <div class="swiper-slide"><img></div>
                      <div class="swiper-slide"><img></div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery__item">
                <div class="gallery__item-text">
                  <h3>Virtual Reality</h3>
                  <p>Using state-of-the-art gear, we create imagined scenes that look so real that viewers find themselves completely immersed in them.</p>
                  <a href="#">Learn more</a>
                </div>
                <div class="gallery__slider">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img></div>
                      <div class="swiper-slide"><img></div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery__item">
                <div class="gallery__item-text">
                  <h3>360 Videos</h3>
                  <p>Grab clients attention from the first frame with 360-degree videos. Users can engage and interact with the video by swiping or moving their tablet or phone around, putting them at the center of the action.</p>
                  <a href="#">Learn more</a>
                </div>
                <div class="gallery__img">
                  <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>gallery-3.png" width=720 height=480 alt="picture">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery__item">
                <div class="gallery__item-text">
                  <h3>Drone Services</h3>
                  <p>Breathtaking aerial videos take the mundane and make it extraordinary. Our team of expert drone videographers are here to meet your specific needs, as no two projects are exactly alike. We’ll get the video you need, edited and
                    designed to your specifications.</p>
                  <a href="#">Learn more</a>
                </div>
                <div class="gallery__img">
                  <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>gallery-4.png" width=720 height=480 alt="picture">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery__item">
                <div class="gallery__item-text">
                  <h3>3D Rendering</h3>
                  <p>Utilizing the latest equipment, we add value to your business by offering 3D photorealistic renderings to give potential customers and clients an impeccable image of what the space will truly look like.</p>
                  <a href="#">Learn more</a>
                </div>
                <div class="gallery__img">
                  <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>gallery-5.png" width=720 height=480 alt="picture">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gallery__more">
          <a  href="#">See all projects</a>
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