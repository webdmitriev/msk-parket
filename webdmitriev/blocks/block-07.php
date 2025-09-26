<?php
/**
 * Conference - Block
 */

$block_path = 'block-07';
$gutenberg_title = 'Block - 07';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc      = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title  = wp_kses(get_field('title'), $allowed_tags);
$block_descr  = wp_kses(get_field('block_descr'), $allowed_tags);
$block_quote  = wp_kses(get_field('block_quote'), $allowed_tags);
$btn_text  = wp_kses(get_field('btn_text'), $allowed_tags);
$btn_class  = wp_kses(get_field('btn_class'), $allowed_tags);

$name  = wp_kses(get_field('name'), $allowed_tags);
$role  = wp_kses(get_field('role'), $allowed_tags);
$image  = esc_url(get_field('image'));
$sub_title  = wp_kses(get_field('sub_title'), $allowed_tags);
$phone_text  = wp_kses(get_field('phone_text'), $allowed_tags);
$phone_code  = wp_kses(get_field('phone_code'), $allowed_tags);

$elements  = get_field('social_list'); // icon, link

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-07" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <?php if($title): ?><h2 class="h2"><?= $title; ?></h2><?php endif; ?>
        <div class="block__quote">
          <?php if($block_descr): ?><p class="descr icons-quote"><?= $block_descr; ?></p><?php endif; ?>

          <?php if($block_quote): ?>
            <p class="descr descr-quote">
              <?php if($block_quote): ?><span><?= $block_quote; ?></span><?php endif; ?>
              <?php if($btn_text): ?><button class="<?= $btn_class; ?>"><?= $btn_text; ?></button><?php endif; ?>
            </p>
          <?php endif; ?>
        </div>
        <div class="block__owner">
          <img class="block__owner-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-07/owner-01.png" alt="Image" />
          <div class="block__owner-content">
            <div class="owner__about">
              <p class="owner__name">Александр <br/>Левшин</p>
              <p class="owner__role">Руководитель <br/>компании МскПаркет</p>
            </div>
            <div class="block__owner-contacts">
              <div class="contacts-label">Свяжитесь со&nbsp;мной и&nbsp;я&nbsp;лично Вас проконсультирую</div>
              <a class="contacts-phone" href="tel:+7963963666">+7 (963) 96-36-66</a>
              <a class="contacts-social" href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/icons/social-tg.svg" alt="Social" /></a>
              <a class="contacts-social" href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/icons/social-wa.svg" alt="Social" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
