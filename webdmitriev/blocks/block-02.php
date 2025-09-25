<?php
/**
 * Conference - Block
 */

$block_path = 'block-02';
$gutenberg_title = 'Block - 02';

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
<section class="block-02">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <h2 class="h2">Что входит в<span class="accent-color">&nbsp;наши услуги</span> <br/>по&nbsp;шлифовке паркета?</h2>
        <p class="descr">Мы&nbsp;предлагаем полный комплекс профессиональных паркетных работ. Наши мастера не&nbsp;только шлифуют и&nbsp;циклюют полы, но&nbsp;и&nbsp;проводят дополнительные работы по&nbsp;уходу, защите и&nbsp;декору деревянных покрытий.</p>
        <p class="descr uppercase bold accent-color">&nbsp;Перечень следующий:</p>

        <div class="blockquote">
          <div class="blockquote__label">Такелаж мебели</div>
          <div class="blockquote__descr">Аккуратно передвинем или вынесем мебель с&nbsp;помощью профессиональных инструментов</div>
          <picture>
            <source srcset="<?= $image_base64; ?>" type="image/jpeg" media="(max-width: 768px)">
            <img class="blockquote__img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/instruments-01.png" alt="Image" />
          </picture>
        </div>

        <div class="block__items">
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-01.jpg" alt="Image" />
            <h4 class="block__item-label">Шлифовка паркета <br/>без пыли</h4>
            <p class="descr">Высококачественная шлифовка полов, в&nbsp;том числе еврошлифовка с&nbsp;применением немецкого оборудования Lagler</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-02.jpg" alt="Image" />
            <h4 class="block__item-label">Заделка щелей <br/>и&nbsp;микротрещин</h4>
            <p class="descr">В&nbsp;совершенстве владеем всеми видами шпалкевочных составом. Сделаем пол прочным, ровным и&nbsp;экологичным.</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-03.jpg" alt="Image" />
            <h4 class="block__item-label">Замена поврежденных элементов</h4>
            <p class="descr">Подберем по&nbsp;цвету, оттенку паркетную плашку и&nbsp;поставим ее&nbsp;на&nbsp;место поврежденной (недостающей).</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-04.jpg" alt="Image" />
            <h4 class="block__item-label">Тонировка паркета</h4>
            <p class="descr">Обработка тонирующими составами для смены оттенка паркета и&nbsp;обновления интерьера</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-05.jpg" alt="Image" />
            <h4 class="block__item-label">Полировка лака после нанесения</h4>
            <p class="descr">Сделаем Ваш пол идеально гладким с&nbsp;эффектом зеркального блеска</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-06.jpg" alt="Image" />
            <h4 class="block__item-label">Грубая циклевка</h4>
            <p class="descr">Восстановим сильно поврежденный, старый паркет, даже с&nbsp;большими перепадами с&nbsp;помощью барабанных и&nbsp;ленточных машин</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-07.jpg" alt="Image" />
            <h4 class="block__item-label">Нанесение защитных составов</h4>
            <p class="descr">Для повышенной износостойкости покрываем лаком. Для ценителей натуральности и&nbsp;приятных тактильных ощущений под ногами рекомендуем выбрать масло</p>
          </div>
          <div class="block__item">
            <img class="block__item-img" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-02/post-08.jpg" alt="Image" />
            <h4 class="block__item-label">Локальный ремонт</h4>
            <p class="descr">Восстановим практически любые повреждения, удаляем царапины, пятна, ожоги и&nbsp;прочие дефекты</p>
          </div>
        </div>

      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
