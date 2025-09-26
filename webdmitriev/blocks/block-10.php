<?php
/**
 * Conference - Block
 */

$block_path = 'block-10';
$gutenberg_title = 'Block - 10';

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
<section class="block-10">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <h2 class="h2"><span class="accent-color">FAQ</span> - часто задаваемые вопросы</h2>
      <div class="accordion__items">
        <div class="accordion__item">
          <div class="accordion__item-header">
            <p class="descr">Что такое еврошлифовка?</p>
            <div class="icon-accordion"></div>
          </div>
          <div class="accordion__item-content">
            <p class="descr">Это безпылевая шлифовка с&nbsp;использованием современных дисковых машин и&nbsp;пылеотводов, обеспечивающая высокую точность обработки. Еврошлифовка выполняется в&nbsp;случаях когда паркету менее 10&nbsp;лет, либо когда нужно сделать тонировку или покрыть его маслом.</p>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-header">
            <p class="descr">Что такое циклевка паркета?</p>
            <div class="icon-accordion"></div>
          </div>
          <div class="accordion__item-content">
            <p class="descr">Это безпылевая шлифовка с&nbsp;использованием современных дисковых машин и&nbsp;пылеотводов, обеспечивающая высокую точность обработки. Еврошлифовка выполняется в&nbsp;случаях когда паркету менее 10&nbsp;лет, либо когда нужно сделать тонировку или покрыть его маслом.</p>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-header">
            <p class="descr">Поможет&nbsp;ли шлифовка при глубоких царапинах на&nbsp;паркете?</p>
            <div class="icon-accordion"></div>
          </div>
          <div class="accordion__item-content">
            <p class="descr">Это безпылевая шлифовка с&nbsp;использованием современных дисковых машин и&nbsp;пылеотводов, обеспечивающая высокую точность обработки. Еврошлифовка выполняется в&nbsp;случаях когда паркету менее 10&nbsp;лет, либо когда нужно сделать тонировку или покрыть его маслом.</p>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-header">
            <p class="descr">Что нужно сделать в&nbsp;комнате перед шлифовкой паркета?</p>
            <div class="icon-accordion"></div>
          </div>
          <div class="accordion__item-content">
            <p class="descr">Это безпылевая шлифовка с&nbsp;использованием современных дисковых машин и&nbsp;пылеотводов, обеспечивающая высокую точность обработки. Еврошлифовка выполняется в&nbsp;случаях когда паркету менее 10&nbsp;лет, либо когда нужно сделать тонировку или покрыть его маслом.</p>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
