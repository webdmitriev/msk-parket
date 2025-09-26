<?php
/**
 * Conference - Block
 */

$block_path = 'block-02';
$gutenberg_title = 'Block - 02';

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

$title              = wp_kses(get_field('title'), $allowed_tags);
$sub_title          = wp_kses(get_field('sub_title'), $allowed_tags);
$sub_title_2        = wp_kses(get_field('sub_title_2'), $allowed_tags);
$blockquote_title   = wp_kses(get_field('blockquote_title'), $allowed_tags);
$blockquote_descr   = wp_kses(get_field('blockquote_descr'), $allowed_tags);
$blockquote_image   = esc_url(get_field('blockquote_image'));
$elements           = get_field('elements'); // title, image, descr

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-02" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <?php if($title): ?><span class="h2"><?= $title; ?></span><?php endif; ?>
        <?php if($sub_title): ?><p class="descr"><?= $sub_title; ?></p><?php endif; ?>
        <?php if($sub_title_2): ?><p class="descr uppercase bold accent-color"><?= $sub_title_2; ?></p><?php endif; ?>

        <div class="blockquote">
          <?php if($blockquote_title): ?><div class="blockquote__label"><?= $blockquote_title; ?></div><?php endif; ?>
          <?php if($blockquote_descr): ?><div class="blockquote__descr"><?= $blockquote_descr; ?></div><?php endif; ?>
          <?php if($blockquote_image): ?>
            <picture>
              <source srcset="<?= $image_base64; ?>" type="image/jpeg" media="(max-width: 768px)">
              <img class="blockquote__img" src="<?= $blockquote_image; ?>" alt="Image" />
            </picture>
          <?php endif; ?>
        </div>

        <div class="block__items">
          <?php if( have_rows('elements') ) : while ( have_rows('elements') ) : the_row(); ?>
            <div class="block__item">
              <img class="block__item-img" src="<?= get_sub_field('image') ? get_sub_field('image') : $image_base64; ?>" alt="Image" />
              <?php if(get_sub_field('title')): ?><h4 class="block__item-label"><?= get_sub_field('title'); ?></h4><?php endif; ?>
              <?php if(get_sub_field('descr')): ?><p class="descr"><?= get_sub_field('descr'); ?></p><?php endif; ?>
            </div>
          <?php endwhile; endif; ?>
        </div>

      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
