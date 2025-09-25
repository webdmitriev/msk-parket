<?php
/**
 * Conference - Block
 */

$block_path = 'block-04';
$gutenberg_title = 'Block - 04';

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
<section class="block-04">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <picture>
          <source srcset="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-04/image-01.jpg" type="image/jpeg" media="(max-width: 991px)" />
          <img class="block-image" src="<?= $image_base64; ?>" data-src="<?= $bg_1920; ?>" alt="Image" />
        </picture>
        <div class="block__items">
          <div class="block__item descr" data-number="01.">Прибыв на&nbsp;объект, специалисты сначала осматривают напольное покрытие, выявляют проблемные зоны&nbsp;&mdash; щели, сколы, вздутия&nbsp;&mdash; и&nbsp;при необходимости проводят предварительный ремонт.</div>
          <div class="block__item descr" data-number="02.">Далее начинается грубая шлифовка барабанной машиной, снимается старый лак и&nbsp;нивелируются неровности.</div>
          <div class="block__item descr" data-number="03.">Затем происходит обработка каждого участка, включая углы и&nbsp;труднодоступные места, с&nbsp;помощью угловой и&nbsp;ленточной шлифмашин. Пыль в&nbsp;процессе минимизируется с&nbsp;помощью профессиональных пылесосов, подключаемых к&nbsp;оборудованию.</div>
          <div class="block__item descr" data-number="04.">После выравнивания поверхности и&nbsp;устранения всех дефектов переходим к&nbsp;более тонкой шлифовке с&nbsp;постепенным уменьшением зернистости абразива&nbsp;&mdash; так достигается идеально гладкая основа. При необходимости проводится циклевка вручную в&nbsp;зонах стыков.</div>
        </div>
        <div class="block__items">
          <img class="block__items-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-04/image-01.jpg" alt="Image" />
          <div class="block__item descr" data-number="05.">Затем наносится грунтовка (если это требуется) и&nbsp;несколько слоёв лака или масла, в&nbsp;зависимости от&nbsp;предпочтений заказчика. Каждый слой тщательно просушивается и&nbsp;полируется.</div>
          <div class="block__item descr accent-bg" data-number="06.">В&nbsp;итоге заказчик получает полностью обновлённый паркет с&nbsp;ровной, гладкой и&nbsp;прочной поверхностью, пригодной для эксплуатации на&nbsp;долгие годы. </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
