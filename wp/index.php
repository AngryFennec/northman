<?php get_header();?>
  <main class="main">
    <section class="skin skin--main">
      <iframe src="https://player.vimeo.com/video/389792443?autoplay=1&color=ffffff&loop=1&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      <div class="wrapper">
        <div class="skin__text-block">
          <h2 class="skin__title"><?php the_field('main_title');?></h2>
          <p class="skin__info"><?php the_field('main_info');?></p>

        </div>
        <ul class="skin__social-list social-list">
        <li><a href="//www.facebook.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-fb.svg';?>" alt="facebook"></a></li>
        <li><a href="//www.instagram.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-insta.svg';?>" alt="instagram"></a></li>
        <li><a href="//www.youtube.com/channel/UCfr9ZTQRygqz8fFzoxxeICg"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-youtube.svg';?>" alt="youtube"></a></li>
        <li><a href="//www.linkedin.com/company/digital-northman-ab/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/header-ln.svg';?>" alt="linkedin"></a></li>
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
    <section id="slider" class="slider gallery">
		<div class="slide">
			<div class="slide-inner" style="z-index:25">
				<div class="gallery__item-text">
					<h3><?=get_field('ivt_group')['title'];?></h3>
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
							<span class="js-current" >01</span>
							<span class="js-all">03</span>
							<div class="swiper-pagination swiper-pagination-first">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner" style="z-index:20">
				<div class="gallery__item-text">
					<h3><?=get_field('vr_group')['title'];?></h3>
					<p><?=get_field('vr_group')['content'];?></p>
          <a href="<?=get_field('vr_group')['link'];?>"><?=get_field('vr_group')['link_text'];?></a>
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
		</div>
		<div class="slide">
			<div class="slide-inner" style="z-index:15">

				<div class="gallery__item-text">
					<h3><?=get_field('_360-group')['title'];?></h3>
					<p><?=get_field('_360-group')['content'];?></p>
          <a href="<?=get_field('_360-group')['link'];?>"><?=get_field('_360-group')['link_text'];?></a>
				</div>
				<div class="gallery__img">
					<img src="<?=get_field('_360-group')['image'];?>" width=854 height=570 alt="picture">
				</div>

			</div>
		</div>
		<div class="slide">
			<div class="slide-inner " style="z-index:10">

				<div class="gallery__item-text">
					<h3><?=get_field('drone-group')['title'];?></h3>
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
		</div>
		<div class="slide">
			<div class="slide-inner" style="z-index:5">
				<div class="gallery__item-text">
					<h3><?=get_field('render-group')['title'];?></h3>
          <p><?=get_field('render-group')['content'];?></p>
          <a href="<?=get_field('render-group')['link'];?>"><?=get_field('render-group')['link_text'];?></a>
				</div>
				<div class="gallery__img">
					<img src="<?=get_field('render-group')['image'];?>" width=854 height=570 alt="picture">
				</div>

			</div>
		</div>

	</section>
    <section id = "friends" class="friends">
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
	<section id="blog" class="blog">
    <div class="wrapper">
      <h2 class="blog__title">Digital Blog</h2>
      <ul class="blog__list">
        <li class="blog__item">
          <div class="blog__image-block">
            <img src="<?=get_field('first_preview')['image'];?>" alt="image">
          </div>
          <a href="<?=get_field('first_preview')['link'];?>"><?=get_field('first_preview')['title'];?></a>
        </li>
        <li class="blog__item">
          <div class="blog__image-block">
            <img src="<?=get_field('second_preview')['image'];?>" alt="image">
          </div>
          <a href="<?=get_field('second_preview')['link'];?>"><?=get_field('second_preview')['title'];?></a>
        </li>
        <li class="blog__item">
          <div class="blog__image-block">
            <img src="<?=get_field('third_preview')['image'];?>" alt="image">
          </div>
          <a href="<?=get_field('third_preview')['link'];?>"><?=get_field('third_preview')['title'];?></a>
        </li>
        <li class="blog__item">
          <div class="blog__image-block">
            <img src="<?=get_field('fourth_preview')['image'];?>" alt="image">
          </div>
          <a href="<?=get_field('fourth_preview')['link'];?>"><?=get_field('fourth_preview')['title'];?></a>
        </li>
        <li class="blog__item">
          <div class="blog__image-block">
            <img src="<?=get_field('fifth_preview')['image'];?>" alt="image">
          </div>
          <a href="<?=get_field('fifth_preview')['link'];?>"><?=get_field('fifth_preview')['title'];?></a>
        </li>
      </ul>
    </div>
  </section>
  <section id= "contacts" class="feadback">
      	<div class="wrapper">
        	<h2 class="feadback__header"><?php pll_e('Let’s discuss your project'); ?></h2>
        	<div class="feadback__wrapper">
            	<?php echo do_shortcode( '[cf7form cf7key="contact-form-1"]' ); ?>
            
             	<div class="feadback__text-block">
                	<div class="feadback__schedule">
                  		<!-- <span><?php //pll_e('schedule a call for'); ?>:</span> -->
						  <a href="<?php echo get_permalink(pll_get_post(664));?>"><?php pll_e('minutes'); ?></a>
						  <!-- <a href="<?php //echo get_permalink(pll_get_post(664));?>">30 <?php //pll_e('minutes'); ?></a> -->
                	</div>
            		<div class="feadback__contacts">
             			<span><?php pll_e('or contact us'); ?>:</span>
                  		<div class="feadback__contacts-block">
							<ul class="feadback__social-list social-list">
              <li><a href="//www.facebook.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/footer-fb.svg';?>" alt="facebook"></a></li>
								<li><a href="//www.instagram.com/virtualnorthman/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/footer-insta.svg';?>" alt="instagram"></a></li>
								<li><a href="//www.youtube.com/channel/UCfr9ZTQRygqz8fFzoxxeICg"><img src="<?php echo  get_template_directory_uri() . '/assets/img/footer-youtube.svg';?>" alt="youtube"></a></li>
								<li><a href="//www.linkedin.com/company/digital-northman-ab/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/footer-linkedin.svg';?>" alt="linkedin"></a></li>
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