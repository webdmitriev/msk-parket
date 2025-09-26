<?php
/**
 * Conference - Block
 */

$block_path = 'block-09';
$gutenberg_title = 'Block - 09';

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

$title      = wp_kses(get_field('title'), $allowed_tags);
$elements   = get_field('elements'); // title, image, descr, price, rating

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-09" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><h2 class="h2"><?= $title; ?></h2><?php endif; ?>

      <?php if( have_rows('elements') ) : ?>
        <div class="varnishes__arrows">
          <button class="varnishes__arrow varnishes__arrow-prev"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
          <button class="varnishes__arrow varnishes__arrow-next"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
        </div>
        <div class="varnishes__slider">
          <?php while ( have_rows('elements') ) : the_row(); ?>
            <div class="varnishes__slide">
              <img class="varnishes__slide-image" src="<?= get_sub_field('image'); ?>" alt="Image" />
              <div class="varnishes__slide-content">
                <p class="descr accent-color"><?= get_sub_field('title'); ?></p>
                <p class="descr"><?= get_sub_field('descr'); ?></p>
                <div class="varnishes__slide-bottom">
                  <div class="varnishes__slide-bottom-stack">
                    <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                    <div class="rating-stars" data-rating="<?= get_sub_field('rating'); ?>"></div>
                  </div>
                  <p class="descr accent-color"><?= get_sub_field('price'); ?> ₽</p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
