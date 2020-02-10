<?php
    /*
    Template Name: Article
    */

    get_header();
?>
  <main class="main">
    <section class="skin" style="background: url('<?php the_field('skin');?>') no-repeat center 0; background-size: cover">
        <h2 class="skin__title"><?php the_field('title');?></h2>
    </section>
    <section class="content content--light">
        <span class="content__decor decor"><?php the_field('decor');?></span>
        <div class="wrapper">
            <?php if(get_field('first_title') !== '') :?><h2 class="content__title"><?php the_field('first_title');?></h2><?php endif;?>
          <div class="content__content">
            <?php the_field('first_content');?>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="wrapper">
          <h2 class="content__title"><?php the_field('second_title');?></h2>
          <div class="content__content">
          <?php the_field('second_content');?>
          </div>
        </div>

      </section>
      <section class="content content--light">

        <div class="wrapper">
        <?php if(get_field('third_title') !== '') :?><h2 class="content__title"><?php the_field('third_title');?></h2><?php endif;?>
          <!-- <h2 class="content__title"><?php the_field('third_title');?></h2> -->
          <div class="content__content">
          <?php the_field('third_content');?>
          </div>
          <?php if (get_field('fourth_content') == '') :?>
        <a href="/" class="content__back-link"><?php the_field('link_text_copy');?></a>
        <?php endif;?>
        </div>

      </section>
      <?php if (get_field('fourth_content') !== ''):?>
      <section class="content">
        <div class="wrapper">
        <?php if(get_field('fourth_title') !== '') :?><h2 class="content__title"><?php the_field('fourth_title');?></h2><?php endif;?>
          <!-- <h2 class="content__title"><?php the_field('fourth_title');?></h2> -->
          <div class="content__content">
              <?php the_field('fourth_content');?>
          </div>
          <a href="/" class="content__back-link"><?php the_field('link_text');?></a>
        </div>
      </section>
      <?php endif;?>
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
    </section>
  </main>
<?php
    get_footer();
?>