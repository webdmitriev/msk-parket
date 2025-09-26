  <footer class="footer">
    <div class="container">
      <a href="<?php echo home_url( '/' ); ?>" class="footer__logotype">Moscow <span class="accent-color">Parket</span></a>
      <div class="line-wrap">
        <div class="footer__block">
          <div class="block__title">Навигация по сайту</div>
          <?php
            wp_nav_menu( [
              'theme_location'  => 'mobile-menu',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'footer-menu',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ] );
          ?>
        </div>
        <div class="footer__block">
          <div class="block__title">Связаться с нами</div>
          <a class="footer-email" href="mailto:mosparket@mail.ru">mosparket@mail.ru</a>
          <p class="descr">8:00 - 20:00 без выходных</p>
          <a class="footer-phone" href="tel:+79639636666">+7 (963) 963-66-66</a>
          <button class="btn">Хочу консультацию</button>
          <div class="footer__socials">
            <a href="#" target="_blank" rel="noopener noreferrer" class="footer__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-tg.png" alt="Social" /></a>
            <a href="#" target="_blank" rel="noopener noreferrer" class="footer__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-wa.png" alt="Social" /></a>
            <a href="#" target="_blank" rel="noopener noreferrer" class="footer__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-email.png" alt="Social" /></a>
          </div>
        </div>
        <div class="footer__copyright">
          <p class="descr">Информация и&nbsp;цены на&nbsp;сайте не&nbsp;являются публичной офертой</p>
          <p class="descr">Политика конфиденциальности</p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>