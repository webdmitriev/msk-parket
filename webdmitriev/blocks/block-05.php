<?php
/**
 * Conference - Block
 */

$block_path = 'block-05';
$gutenberg_title = 'Block - 05';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id       = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc      = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title          = wp_kses(get_field('title'), $allowed_tags);
$sub_title      = wp_kses(get_field('sub_title'), $allowed_tags);
$cf7            = get_field('cf7');

$master_name    = wp_kses(get_field('master_name'), $allowed_tags);
$master_role    = wp_kses(get_field('master_role'), $allowed_tags);
$master_image   = esc_url(get_field('master_image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-05" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <div class="block__content">
          <?php if($title): ?><span class="h2"><?= $title; ?></span><?php endif; ?>
          <?php if($sub_title): ?><p class="descr bold"><?= $sub_title; ?></p><?php endif; ?>
          <?= $cf7 ?? do_shortcode($cf7); ?>
        </div>
        <div class="block__master">
          <?php if($master_image): ?><img class="block__master-image" src="<?= $master_image; ?>" alt="Image" /><?php endif; ?>
          <div class="block__master-about">
            <?php if($master_name): ?><p class="descr bold accent-color"><?= $master_name; ?></p><?php endif; ?>
            <?php if($master_role): ?><p class="descr"><?= $master_role; ?></p><?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
