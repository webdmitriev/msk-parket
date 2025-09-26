<?php
/**
 * Conference - Block
 */

$block_path = 'block-10';
$gutenberg_title = 'Block - 10';

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
$elements   = get_field('faq'); // title, descr

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-10" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><span class="h2"><?= $title; ?></span><?php endif; ?>

      <div class="accordion__items">
        <?php if( have_rows('faq') ) : while ( have_rows('faq') ) : the_row(); ?>
          <div class="accordion__item">
            <div class="accordion__item-header">
              <p class="descr"><?= get_sub_field('title'); ?></p>
              <div class="icon-accordion"></div>
            </div>
            <div class="accordion__item-content">
              <p class="descr"><?= get_sub_field('descr'); ?></p>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
