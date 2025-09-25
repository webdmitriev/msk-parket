<?php
/**
 * Conference - Block
 */

$block_path = 'block-01';
$gutenberg_title = 'Block - 01';

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
<section class="block-01">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <div class="block__content">
          <h2 class="h2">Шлифовка паркета <br/><span class="accent-color">в&nbsp;Москве</span></h2>
          <p class="descr">Профессиональная шлифовка паркета в&nbsp;Москве&nbsp;&mdash; это настоящее &laquo;омоложение&raquo; деревянного покрытия. Пол в&nbsp;квартире&nbsp;&mdash; это как лицо: по&nbsp;нему легко судить о&nbsp;вкусе, ухоженности и&nbsp;даже характере хозяев. Но&nbsp;со&nbsp;временем даже самый качественный деревянный пол теряет блеск, покрывается царапинами и&nbsp;тускнеет. Хорошая новость&nbsp;&mdash; всё это можно исправить. <br/><br/>Современные технологии позволяют всего за&nbsp;1&nbsp;день вернуть полу былую роскошь, сделать его ровным, гладким и&nbsp;безупречно блестящим&nbsp;&mdash; как будто вы&nbsp;только что постелили новый паркет. И&nbsp;всё это&nbsp;&mdash; без пыли, шума и&nbsp;хаоса. И&nbsp;вот как это всё делается в&nbsp;компании <span class="accent-color">&laquo;ЛенПаркет&raquo;</span>.</p>
        </div>
        <div class="block__image">
          <button class="btn btn-full btn-icon-timer"><span>Закажите выезд мастера на удобное время.</span></button>
          <img class="block__image-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-01/image-01.jpg" alt="Image" />
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
