<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
      <div class="col l6 s12">
        <h5 class="white-text">Company Bio</h5>
        <p class="grey-text text-lighten-4">We are a team o appreciated.</p>
      </div>
      <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
      <div class="col l3 s12">
        <h5 class="white-text">Settings</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
      <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
      <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      Powered by <a class="brown-text text-lighten-3"
        href="http://aindanao.com.cz">Tekoa</a>
    <?php wp_footer(); ?>
    </div>
  </div>
</footer>
<!--  Scripts -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/navigation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/materialize.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/init.js"></script>
</body>
</html>