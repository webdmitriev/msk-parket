<?php
/**
 * Conference - Block
 */

$block_path = 'block-03';
$gutenberg_title = 'Block - 03';

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

$icon   = esc_url(get_field('icon'));
$title  = wp_kses(get_field('title'), $allowed_tags);
$image  = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-03" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="bricks-wrapper">
        <?php if($image): ?><img class="bricks__image" src="<?= $image; ?>" alt="Image" /><?php endif; ?>
        <div class="bricks__content">
          <?php if($icon): ?><img class="bricks__content-icon" src="<?= $icon; ?>" alt="Image" /><?php endif; ?>
          <?php if($title): ?><p class="descr uppercase bold accent-color"><?= $title; ?></p><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
