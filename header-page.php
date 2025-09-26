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
					<?php if( have_rows('socials', 'options') ) : while ( have_rows('socials', 'options') ) : the_row(); ?>
						<a href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer" class="header__social"><img src="<?= get_sub_field('icon'); ?>" alt="Social" /></a>
					<?php endwhile; endif; ?>
        </div>

        <div class="header__contacts">
					<?php if(get_field('time_work', 'options')): ?><span class="descr"><?= get_field('time_work', 'options'); ?></span><?php endif; ?>
					<?php if(get_field('phone_text', 'options')): ?><a href="tel:<?= get_field('phone_code', 'options'); ?>" class="header__contacts-mobile"><?= get_field('phone_text', 'options'); ?></a><?php endif; ?>
					<?php if(get_field('btn_text', 'options')): ?><a href="tel:<?= get_field('btn_code', 'options'); ?>" class="descr"><?= get_field('btn_text', 'options'); ?></a><?php endif; ?>
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