<footer class="footer bg--dark clr--light py--5">
      <div class="footer__wrapper text--center">
        <a href="<?php echo site_url('/')?>" class="footer__logo">BLOG</a>
        <nav class="footer__nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'footer_menu',
            'menu_class' => 'footer__nav',
           ))?>
        </nav>

        <ul class="footer__socialmedia flex justify--between">
          <li class="mr--2">
            <a href="#"><i class="fab fa-facebook"></i></a>
          </li>
          <li class="mr--2">
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="mr--2">
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="mr--2">
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>

        <p>Copyright 2020, All Right Reserved</p>
      </div>
    </footer>
    <script src="./js/script.js"></script>
    <?php wp_footer() ?>
  </body>
</html>