<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Циклевка паркета под ключ в Москве по цене от 140 руб/м2</title>
  <meta name="description" content="Профессиональная циклевка паркета в Москве и Московской области под ключ с покрытием лаком, без пыли и грязи. Выезд мастера бесплатно, цена за квардартный метр от 140 руб">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="header">
    <div class="container">
      <div class="line-wrap">
        <a href="<?php echo home_url( '/' ); ?>" class="header__logotype">Moscow <span class="accent-color">Parket</span></a>

				<?php
					wp_nav_menu( [
						'theme_location'  => 'header-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'header-menu',
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

        <div class="header__socials">
          <a href="#" target="_blank" rel="noopener noreferrer" class="header__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-tg.png" alt="Social" /></a>
          <a href="#" target="_blank" rel="noopener noreferrer" class="header__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-wa.png" alt="Social" /></a>
          <a href="#" target="_blank" rel="noopener noreferrer" class="header__social"><img src="<?= get_template_directory_uri(); ?>/webdmitriev/assets/img/icons/icon-header-email.png" alt="Social" /></a>
        </div>

        <div class="header__contacts">
          <span class="descr">8:00 - 20:00 без выходных</span>
          <a href="tel:+7" class="header__contacts-mobile">+7 (963) 963-66-66</a>
          <a href="tel:+7" class="descr">Обратный звонок</a>
        </div>

        <div class="burger-menu"><span></span></div>
      </div>
    </div>
  </div>

  <div class="header-mobile">
    <div class="header-mobile__content">
      <div class="content__top">
        <a href="<?php echo home_url( '/' ); ?>" class="header__logotype">Moscow <span class="accent-color">Parket</span></a>
        <div class="burger-close"></div>
      </div>

				<?php
					wp_nav_menu( [
						'theme_location'  => 'mobile-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'mobile-menu',
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
  </div>