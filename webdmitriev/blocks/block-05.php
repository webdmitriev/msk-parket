<?php
/**
 * Conference - Block
 */

$block_path = 'block-05';
$gutenberg_title = 'Block - 05';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'  => array()
);

$text     = wp_kses(get_field('text'), $allowed_tags);
$link     = esc_url(get_field('link'));
$bg_1920  = get_field('bg_1920') ? "background-image: url(" . esc_url(get_field('bg_1920')) . ")"  : false;
$cf7      = '[contact-form-7 id="f4c613a" title="block-05"]';

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-05">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <div class="block__content">
          <h2 class="h2">Не откладывайте: ваш пол достоин <br/><span class="accent-color">второго шанса.</span></h2>
          <p class="descr bold">Запишитесь на&nbsp;бесплатную консультацию уже сегодня.</p>
          <?= $cf7 ?? do_shortcode($cf7); ?>
        </div>
        <div class="block__master">
          <img class="block__master-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-05/master-01.png" alt="Image" />
          <div class="block__master-about">
            <p class="descr bold accent-color">Андрей</p>
            <p class="descr">Старший мастер</p>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
