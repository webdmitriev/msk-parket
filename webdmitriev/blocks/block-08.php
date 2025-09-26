<?php
/**
 * Conference - Block
 */

$block_path = 'block-08';
$gutenberg_title = 'Block - 08';

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
$elements   = get_field('elements'); // title, image, descr
$title_form = wp_kses(get_field('title_form'), $allowed_tags);
$cf7        = get_field('cf7');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-08" id="<?= $block_id; ?>" style="<?= $block_bgc; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><span class="h2"><?= $title; ?></span><?php endif; ?>

      <?php if( have_rows('elements') ) : ?>
        <div class="grinding-arrows">
          <button class="grinding-arrow grinding-arrow-prev"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
          <button class="grinding-arrow grinding-arrow-next"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
        </div>

        <div class="grinding__slider">
          <?php while ( have_rows('elements') ) : the_row(); ?>
            <div class="grinding__slide">
              <img class="grinding__slide-image" src="<?= get_sub_field('image'); ?>" alt="Image" />
              <div class="grinding__slide-content">
                <p class="descr bold accent-color"><?= get_sub_field('title'); ?></p>
                <p class="descr"><?= get_sub_field('descr'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <div class="block__bottom">
        <?php if($title_form): ?><h4 class="block__label"><?= $title_form; ?></h4><?php endif; ?>
        <?= $cf7 ?? do_shortcode($cf7); ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
