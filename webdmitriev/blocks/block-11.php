<?php
/**
 * Conference - Block
 */

$block_path = 'block-11';
$gutenberg_title = 'Block - 11';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'  => array()
);

$text     = wp_kses(get_field('text'), $allowed_tags);
$link     = esc_url(get_field('link'));
$bg_1920  = get_field('bg_1920') ? "background-image: url(" . esc_url(get_field('bg_1920')) . ")"  : false;

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-11" style="<?php echo $bg_1920; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <img class="block__image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-11/image-01.png" alt="Image" />
        <div class="block__content">
          <h4 class="block__content-title">Шлифовка паркета в&nbsp;Москве&nbsp;&mdash; это возможность вдохнуть жизнь в&nbsp;ваш пол без замены покрытия.</h4>
          <p class="descr">Специалисты &laquo;ЛенПаркет&raquo; сделают всё, чтобы результат радовал вас годами&nbsp;&mdash; от&nbsp;первой стружки до&nbsp;последнего слоя лака. Звоните, пишите, заказывайте&nbsp;&mdash; мы&nbsp;уже готовим шлифовальную машину к&nbsp;выезду.</p>
          <button class="btn btn-transparent"><span>Оформите заявку</span></button>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
