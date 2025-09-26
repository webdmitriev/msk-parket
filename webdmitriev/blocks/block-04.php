<?php
/**
 * Conference - Block
 */

$block_path = 'block-04';
$gutenberg_title = 'Block - 04';

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

$elements_left  = get_field('elements_left'); // descr
$counter        = 0;

$elements_right = get_field('elements_right'); // descr
$image          = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-04">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <?php if($image): ?>
          <picture>
            <source srcset="<?= $image; ?>" type="image/jpeg" media="(max-width: 991px)" />
            <img class="block-image" src="<?= $image_base64; ?>" data-src="<?= $image_base64; ?>" alt="Image" />
          </picture>
        <?php endif; ?>
        <div class="block__items">
          <?php if( have_rows('elements_left') ) : while ( have_rows('elements_left') ) : the_row(); ?>
            <?php $counter++; ?>
            <div class="block__item descr" data-number="<?= $counter <= 9 ? '0'.$counter.'.' : $counter.'.'; ?>"><?php echo wp_kses(get_sub_field('descr'), $allowed_tags); ?></div>
          <?php endwhile; endif; ?>
        </div>
        <div class="block__items block__items-with_last">
          <?php if($image): ?><img class="block__items-image" src="<?= $image; ?>" alt="Image" /><?php endif; ?>
          <?php if( have_rows('elements_right') ) : while ( have_rows('elements_right') ) : the_row(); ?>
            <?php $counter++; ?>
            <div class="block__item descr" data-number="<?= $counter <= 9 ? '0'.$counter.'.' : $counter.'.'; ?>"><?php echo wp_kses(get_sub_field('descr'), $allowed_tags); ?></div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
