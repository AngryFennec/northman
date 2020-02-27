<?php
    /*
    Template Name: Privacy Policy
    */

    get_header();
?>
  <main class="main">
    <section class="skin skin--dop" style="background: url('<?php the_field('skin');?>') no-repeat center 0; background-size: cover">
          <h2 class="skin__title"><?php the_field('title');?></h2>
    </section>
    <section class="privacy">
        <div class="wrapper">
        <?php if (get_field('subtitle') !== '') {
          echo '<h2 class="privacy__title">'.get_field('subtitle').'</h2>';
		};?>
		<?php if (get_field('width') === 'Yes' && get_field('description') !== '') {
          echo '<p class="privacy__description privacy__description--margin">'.get_field('description').'</p>';
        } else {
			if (get_field('description') !== '') {
				echo '<p class="privacy__description">'.get_field('description').'</p>';
			}
		};?>
            <!-- <p class="privacy__description <?php //if (get_field('width') === 'Yes') echo 'privacy__description--margin';?>" ><?php //the_field('description');?></p> -->
            <?php the_field('content');?>
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
  