<?php
/**
 * Conference - Block
 */

$block_path = 'block-08';
$gutenberg_title = 'Block - 08';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'  => array()
);

$text     = wp_kses(get_field('text'), $allowed_tags);
$link     = esc_url(get_field('link'));
$bg_1920  = get_field('bg_1920') ? "background-image: url(" . esc_url(get_field('bg_1920')) . ")"  : false;
$cf7      = '[contact-form-7 id="99870d1" title="block-08"]';

?>

<!-- <?= $block_path; ?> (start) -->
<section class="block-08">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <h2 class="h2">Наши шлифовальные машины</h2>
      <div class="grinding-arrows">
        <button class="grinding-arrow grinding-arrow-prev"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
        <button class="grinding-arrow grinding-arrow-next"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
      </div>
      <div class="grinding__slider">
        <div class="grinding__slide">
          <img class="grinding__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-08/grinding-01.png" alt="Image" />
          <div class="grinding__slide-content">
            <p class="descr bold accent-color">Lagler Trio</p>
            <p class="descr">Идеальна для тонкой и&nbsp;финишной шлифовки, придает поверхности абсолютную гладкость.</p>
          </div>
        </div>
        <div class="grinding__slide">
          <img class="grinding__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-08/grinding-02.png" alt="Image" />
          <div class="grinding__slide-content">
            <p class="descr bold accent-color">Lagler Hummel</p>
            <p class="descr">Основная машина для грубой шлифовки и&nbsp;циклевки; устраняет перепады и&nbsp;глубокие повреждения.</p>
          </div>
        </div>
        <div class="grinding__slide">
          <img class="grinding__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-08/grinding-03.png" alt="Image" />
          <div class="grinding__slide-content">
            <p class="descr bold accent-color">Lagler Flip</p>
            <p class="descr">Незаменима для работы в&nbsp;углах, возле плинтусов и&nbsp;в&nbsp;труднодоступных зонах.</p>
          </div>
        </div>
        <div class="grinding__slide">
          <img class="grinding__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-08/grinding-02.png" alt="Image" />
          <div class="grinding__slide-content">
            <p class="descr bold accent-color">Lagler Hummel</p>
            <p class="descr">Основная машина для грубой шлифовки и&nbsp;циклевки; устраняет перепады и&nbsp;глубокие повреждения.</p>
          </div>
        </div>
      </div>
      <div class="block__bottom">
        <h4 class="block__label">Технология не&nbsp;прощает ошибок&nbsp;&mdash; выбирайте тех, кто работает с&nbsp;лучшими инструментами. Оформите заявку онлайн!</h4>
        <?= $cf7 ?? do_shortcode($cf7); ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
