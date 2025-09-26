<?php
/**
 * Conference - Block
 */

$block_path = 'block-06';
$gutenberg_title = 'Block - 06';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id = wp_kses(get_field('block_id'), $allowed_tags);

$title  = wp_kses(get_field('title'), $allowed_tags);
$elements  = get_field('elements'); // title, descr

$block_image  = esc_url(get_field('block_image'));
$block_descr  = wp_kses(get_field('block_descr'), $allowed_tags);

$btn_text  = wp_kses(get_field('btn_text'), $allowed_tags);
$btn_class  = wp_kses(get_field('btn_class'), $allowed_tags);

$bg_1920  = get_field('bg_1920') ? "background-image: url(" . esc_url(get_field('bg_1920')) . ")"  : false;

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-06" id="<?= $block_id; ?>" style="<?php echo $bg_1920; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><span class="h2"><?= $title; ?></span><?php endif; ?>

      <div class="block__items">
        <?php if( have_rows('elements') ) : $counter = 0; while ( have_rows('elements') ) : the_row(); ?>
          <?php $counter++; ?>
          <div class="block__item">
            <div class="block__item-empty"></div>
            <div class="block__item-num"><?= $counter <= 9 ? '0'.$counter : $counter; ?></div>
            <div class="block__item-content">
              <?php if(get_sub_field('title')): ?><p class="descr bold accent-color"><?= get_sub_field('title'); ?></p><?php endif; ?>
              <?php if(get_sub_field('descr')): ?><p class="descr"><?= get_sub_field('descr'); ?></p><?php endif; ?>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>

      <div class="block__bottom">
        <?php if($block_image): ?><img class="block__bottom-image" src="<?= $block_image; ?>" alt="Image" /><?php endif; ?>
        <div class="block__bottom-content">
          <?php if($block_descr): ?><p class="descr uppercase bold"><?= $block_descr; ?></p><?php endif; ?>
          <?php if($btn_text): ?><button class="btn btn-transparent <?= $btn_class; ?>"><span><?= $btn_text; ?></span></button><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
