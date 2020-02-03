<footer class="footer">
    <div class="wrapper">
      <ul class="footer__social-list social-list">
        <li><a href="//www.facebook.com/virtualnorthman/">FB</a></li>
        <li><a href="//www.instagram.com/virtualnorthman/">IG</a></li>
        <li><a href="//www.youtube.com/channel/UCfr9ZTQRygqz8fFzoxxeICg">YT</a></li>
        <li><a href="//www.linkedin.com/company/digital-northman-ab/">LN</a></li>
      </ul>
      <?php if ($pagename === 'our-portfolio' || $pagename === 'our-portfolio-2'||$pagename === 'our-portfolio-3' ||$pagename === 'our-portfolio-4') :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo.svg" alt="logo"></a>
      <?php else :?>
        <a class="footer__logo" href="/"><img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>logo-dark.svg" alt="logo"></a>
      <?php endif;?>
      
      <a href="/pricacy_policy"><?php pll_e('Privacy Policy'); ?></a>
    </div>
  </footer>
  <?php wp_footer() ?>

  <!-- <div class="calendly-inline-widget" data-url="http://calendly.com/northman-vr" style="min-width:320px;height:630px;"></div>
    <script type="text/javascript" src="http://assets.calendly.com/assets/external/widget.js"></script> -->
</body>

</html>