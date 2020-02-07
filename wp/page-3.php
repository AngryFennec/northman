<?php
    /*
    Template Name: Page with six videos
    */

    get_header();
   
    $map = [
        'VR'=> [130, 131, 132, 133],
        '3D'=> [146, 147, 148, 149],
        'IVT'=> [138, 139, 140, 141],
        'DS'=> [142, 143, 144, 145],
        '360'=> [134, 135, 136, 137],
    ];
    $service = $map[get_field('page_service')];
?>
  <main class="main">
    <section class="skin" style="background: url('<?php the_field('skin');?>') no-repeat center 0; background-size: cover">
      <h2 class="skin__title"><? the_title();?></h2>
    </section>
    <section class="description">
      <div class="wrapper">
        <h2 class="description__header"><?php the_field('description_title');?></h2>
        <span class="description__decor"><?php the_field('description__decor');?></span>
        <div class="description__content">
            <?php the_field('description_content');?>
        </div>
        <div class="description__img-block"><img class="description__img" src="<?php the_field('description_image');?>" width ="540" height="360" alt="image"></div>
      </div>
    </section>
    <section class="process ">
      <div class="wrapper">
        <h2 class="process__header"><?php the_field('process_title');?></h2>
        <div class="process__text-wrapper">
          <ul class="process__text-list">
            <li class="process__item">
                
              <h3><?=get_field('process__text-block')['process_text-title'];?></h3>
              <?=get_field('process__text-block')['process_text-content'];?>
            </li>
            <li class="process__item">
            <h3><?=get_field('process__text-block-2')['process_text-title'];?></h3>
              <?=get_field('process__text-block-2')['process_text-content'];?>
            </li>
            <li class="process__item">
            <h3><?=get_field('process__text-block-3')['process_text-title'];?></h3>
              <?=get_field('process__text-block-3')['process_text-content'];?>
            </li>
          </ul>
        </div>
        <div class="process__image-wrapper">
          <ul class="process__video-list">
            <li class="process__item">
              <a href="<?=get_field('process_video_area')['link-1'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-1'];?>" alt="video preview"></a>
              <a href="<?=get_field('process_video_area')['link-2'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-2'];?>" alt="video preview"></a>
            </li>
            <li class="process__item">
              <a href="<?=get_field('process_video_area')['link-3'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-3'];?>" alt="video preview"></a>
              <a href="<?=get_field('process_video_area')['link-4'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-4'];?>" alt="video preview"></a>
            </li>
            <li class="process__item">
                <a href="<?=get_field('process_video_area')['link-5'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-5'];?>" alt="video preview"></a>
                <a href="<?=get_field('process_video_area')['link-6'];?>" target="_blanc"><img src="<?=get_field('process_video_area')['preview-6'];?>" alt="video preview"></a>
            </li>
          </ul>
        </div>
        
        <a class="process__portfolio-link" href="<?php echo get_permalink(pll_get_post(386));?>"><?php the_field('process_portfolio-link');?></a>
      </div>
    </section>
    <section class="services">
      <div class="wrapper">
          <h2 class="services__header"><?php the_field('services_title');?></h2>
          <ul class="services__list">
          <?php
            $arg_work = array('post_type' => 'functions');
            $catquery_work = new WP_Query($arg_work);
            while($catquery_work->have_posts()) : $catquery_work->the_post(); 
                if(!in_array(get_the_ID(), $service)) :?>
                    <li class="services__item">
                    <a href="<?php the_field('services_link-url');?>">
                      <div class="services__item-arrow">
                        <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>arrow.svg" alt="">
                      </div>
                      <div class="services__item-img"><img src="<?php the_field('services_image');?>" alt="<?php the_title();?>"></div>
                      <div class="services__item-header">
                        <h3><?php the_field('services_link-text');?></h3>
                      </div>
                    </a>
                  </li>
                <?php endif; ?>
            <?php endwhile;
            $catquery_work->reset_postdata(); 
            ?>
          </ul>
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