<footer class="footer">
    <div class="wrapper">
      <span>© Northman VR</span>
      <?php if ($pagename === 'our-portfolio' || $pagename === 'our-portfolio-2'||$pagename === 'our-portfolio-3' ||$pagename === 'our-portfolio-4' || $pagename === 'calendar' || $pagename === 'calendar-2' || $pagename === 'calendar-3' || $pagename === 'calendar-4') :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo.svg" alt="logo"></a>
      <?php else :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo-dark.svg" alt="logo"></a>
      <?php endif;?>
      
      <a href="/pricacy_policy"><?php pll_e('Privacy Policy'); ?></a>
    </div>
  </footer>
  <?php wp_footer() ?>

  <?php if ($pagename === 'calendar' || $pagename === 'calendar-2' || $pagename === 'calendar-3' || $pagename === 'calendar-4') :?>
    <script type="text/javascript" src="http://assets.calendly.com/assets/external/widget.js"></script> 
  <?php endif; ?>
</body>

</html>