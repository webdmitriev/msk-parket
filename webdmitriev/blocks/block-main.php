<?php
/**
 * Conference - Block
 */

$block_path = 'block-main';
$gutenberg_title = 'Block - main';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title        = wp_kses(get_field('title'), $allowed_tags);
$descr        = wp_kses(get_field('descr'), $allowed_tags);
$form_title   = wp_kses(get_field('form_title'), $allowed_tags);
$form_label   = wp_kses(get_field('form_label'), $allowed_tags);
$cf7          = get_field('cf7');
$elements     = get_field('elements'); // title, icon, descr
$image        = esc_url(get_field('image'));
$image_576    = esc_url(get_field('image_576'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-main"> 
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <div class="block__left">
          <?php if($title): ?><div class="h1"><?= $title; ?></div><?php endif; ?>
          <?php if($descr): ?><p class="descr"><?= $descr; ?></p><?php endif; ?>
          <div class="block__container">
            <?php if($form_title): ?><div class="block__container-title"><?= $form_title; ?></div><?php endif; ?>
            <?php if($form_label): ?><div class="block__container-descr"><?= $form_label; ?></div><?php endif; ?>
            <?= $cf7 ?? do_shortcode($cf7); ?>
          </div>
        </div>
        <div class="block__right">
          <?php if($image): ?>
            <picture>
              <source srcset="<?= $image_576 ? $image_576 : $image; ?>" type="image/jpeg" media="(max-width: 991px)">
              <img class="block__image" src="<?= $image; ?>" alt="Image" />
            </picture>
          <?php endif; ?>
          <div class="block__items">
            <?php if( have_rows('elements') ) : while ( have_rows('elements') ) : the_row(); ?>
              <div class="block__item">
                <?php if(get_sub_field('icon')): ?><img class="block__item-image" src="<?= get_sub_field('icon'); ?>" alt="Image" /><?php endif; ?>
                <?php if(get_sub_field('title')): ?><p class="descr bold"><?= get_sub_field('title'); ?></p><?php endif; ?>
                <?php if(get_sub_field('descr')): ?><p class="descr"><?= get_sub_field('descr'); ?></p><?php endif; ?>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->