  <footer class="footer">
    <div class="container">
      <a href="<?php echo home_url( '/' ); ?>" class="footer__logotype">Moscow <span class="accent-color">Parket</span></a>
      <div class="line-wrap">
        <div class="footer__block">
          <div class="block__title">Навигация по сайту</div>
          <?php
            wp_nav_menu( [
              'theme_location'  => 'footer-menu',
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
          <?php if(get_field('footer_email', 'options')): ?><a class="footer-email" href="mailto:<?= get_field('footer_email', 'options'); ?>"><?= get_field('footer_email', 'options'); ?></a><?php endif; ?>
          <?php if(get_field('footer_work_time', 'options')): ?><p class="descr"><?= get_field('footer_work_time', 'options'); ?></p><?php endif; ?>
          <?php if(get_field('footer_phone_text', 'options')): ?><a class="footer-phone" href="tel:<?= get_field('footer_phone_code', 'options'); ?>"><?= get_field('footer_phone_text', 'options'); ?></a><?php endif; ?>
          <?php if(get_field('footer_btn_text', 'options')): ?><button class="btn <?= get_field('footer_btn_class', 'options'); ?>"><?= get_field('footer_btn_text', 'options'); ?></button><?php endif; ?>
          <div class="footer__socials">
            <?php if( have_rows('footer_socials', 'options') ) : while ( have_rows('footer_socials', 'options') ) : the_row(); ?>
              <a href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer" class="footer__social"><img src="<?= get_sub_field('icon'); ?>" alt="Social" /></a>
            <?php endwhile; endif; ?>
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