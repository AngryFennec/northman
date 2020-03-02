<footer class="footer">
    <div class="wrapper">
    <a href="<?php echo get_permalink(pll_get_post(974));?>"><?php pll_e('Terms of Service'); ?></a>
      <?php if ($pagename === 'our-portfolio' || $pagename === 'our-portfolio-2'||$pagename === 'our-portfolio-3' ||$pagename === 'our-portfolio-4' || $pagename === 'calendar' || $pagename === 'calendar-2' || $pagename === 'calendar-3' || $pagename === 'calendar-4') :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo.svg" alt="logo"></a>
      <?php else :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo-dark.svg" alt="logo"></a>
      <?php endif;?>
      
      <a href="<?php echo get_permalink(pll_get_post(953));?>"><?php pll_e('Privacy Policy'); ?></a>

    </div>
  </footer>
  <?php wp_footer() ?>

  <?php if ($pagename === 'calendar' || $pagename === 'calendar-2' || $pagename === 'calendar-3' || $pagename === 'calendar-4') :?>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script> 
  <?php endif; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159096155-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159096155-1');
</script>
</body>

</html>