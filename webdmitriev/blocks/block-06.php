<?php
/**
 * Conference - Block
 */

$block_path = 'block-06';
$gutenberg_title = 'Block - 06';

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
<section class="block-06" style="<?php echo $bg_1920; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <h2 class="h2">Этапы шлифовки <br/>паркета: <span class="accent-color">шаг за&nbsp;шагом</span></h2>
      <div class="block__items">
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">01</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Такелаж мебели</p>
            <p class="descr">Мастер выезжает на&nbsp;объект, оценивает состояние пола, подбирает метод шлифовки, определяет стоимость и&nbsp;сроки.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">02</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Подготовка помещения</p>
            <p class="descr">Все предметы мебели выносятся, поверхность обеспыливается, выявляются и&nbsp;отмечаются проблемные участки.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">03</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Грубая шлифовка</p>
            <p class="descr">С&nbsp;помощью абразивных лент крупной зернистости удаляется старое покрытие, выравнивается поверхность и&nbsp;устраняются перепады.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">04</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Средняя шлифовка</p>
            <p class="descr">Используются абразивы средней зернистости, выравнивается структура дерева и&nbsp;подготавливается основа для финишной обработки.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">05</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Тонкая шлифовка</p>
            <p class="descr">Применяются мягкие абразивные диски, поверхность становится идеально гладкой, исчезают мелкие царапины.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num">06</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Покрытие лаком или маслом</p>
            <p class="descr">На&nbsp;чистый, подготовленный пол наносится защитный состав в&nbsp;несколько слоев с&nbsp;обязательной межслойной шлифовкой.</p>
          </div>
        </div>
        <div class="block__item">
          <div class="block__item-empty"></div>
          <div class="block__item-num accent-bg" style="color: #ffffff;">07</div>
          <div class="block__item-content">
            <p class="descr bold accent-color">Финальная уборка</p>
            <p class="descr">После завершения всех этапов мастер обеспыливает помещение, устраняет остатки материала и&nbsp;приводит комнату в&nbsp;порядок.</p>
          </div>
        </div>
      </div>
      <div class="block__bottom">
        <img class="block__bottom-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-06/group-01.png" alt="Image" />
        <div class="block__bottom-content">
          <p class="descr uppercase bold">Ваш деревянный пол может выглядеть как новый&nbsp;&mdash; дайте ему шанс блеснуть заново. Закажите выезд мастера на&nbsp;удобное время.</p>
          <button class="btn btn-transparent"><span>Консультация мастера</span></button>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
