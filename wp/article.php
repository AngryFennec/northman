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