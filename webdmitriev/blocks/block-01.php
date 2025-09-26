<?php
/**
 * Conference - Block
 */

$block_path = 'block-01';
$gutenberg_title = 'Block - 01';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id   = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc  = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title      = wp_kses(get_field('title'), $allowed_tags);
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$btn_text   = wp_kses(get_field('btn_text'), $allowed_tags);
$btn_class  = wp_kses(get_field('btn_class'), $allowed_tags);
$image      = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-01" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <div class="block__content">
          <?php if($title): ?><h2 class="h2"><?= $title; ?></h2><?php endif; ?>
          <?php if($descr): ?><p class="descr"><?= $descr; ?></p><?php endif; ?>
        </div>
        <div class="block__image">
          <?php if($btn_text): ?><button class="btn btn-full btn-icon-timer <?= $btn_class; ?>"><span><?= $btn_text; ?></span></button><?php endif; ?>
          <?php if($image): ?><img class="block__image-img" src="<?= $image; ?>" alt="Image" /><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
