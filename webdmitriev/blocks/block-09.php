<?php
/**
 * Conference - Block
 */

$block_path = 'block-09';
$gutenberg_title = 'Block - 09';

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
<section class="block-09" style="<?php echo $bg_1920; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <h2 class="h2">Лаки для паркета: <br/><span class="accent-color">лучшие из лучших</span></h2>
      <div class="varnishes__arrows">
        <button class="varnishes__arrow varnishes__arrow-prev"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
        <button class="varnishes__arrow varnishes__arrow-next"><svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.70451 21.5L9.29541 11L0.70451 0.5" stroke="#28211F" stroke-width="1.5"/></svg></button>
      </div>
      <div class="varnishes__slider">
        <div class="varnishes__slide">
          <img class="varnishes__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-09/varnishes-01.png" alt="Image" />
          <div class="varnishes__slide-content">
            <p class="descr accent-color">Bona Traffic HD —</p>
            <p class="descr">профессиональный лак на&nbsp;водной основе, выдерживает интенсивную нагрузку, быстро сохнет, без запаха.</p>
            <div class="varnishes__slide-bottom">
              <div class="varnishes__slide-bottom-stack">
                <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                <div class="rating-stars" data-rating="3"></div>
              </div>
              <p class="descr accent-color">12 500 ₽</p>
            </div>
          </div>
        </div>
        <div class="varnishes__slide">
          <img class="varnishes__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-09/varnishes-03.png" alt="Image" />
          <div class="varnishes__slide-content">
            <p class="descr accent-color">Bona Mega One —</p>
            <p class="descr">универсальный и&nbsp;прочный лак, идеально подходит для жилых помещений, дает насыщенный цвет и&nbsp;шелковисто-матовую текстуру.</p>
            <div class="varnishes__slide-bottom">
              <div class="varnishes__slide-bottom-stack">
                <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                <div class="rating-stars" data-rating="1"></div>
              </div>
              <p class="descr accent-color">12 500 ₽</p>
            </div>
          </div>
        </div>
        <div class="varnishes__slide">
          <img class="varnishes__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-09/varnishes-03.png" alt="Image" />
          <div class="varnishes__slide-content">
            <p class="descr accent-color">Berger Aqua-Seal EcoGold —</p>
            <p class="descr">экологичный лак с&nbsp;повышенной устойчивостью к&nbsp;царапинам и&nbsp;истиранию, подходит для детских и&nbsp;спален.</p>
            <div class="varnishes__slide-bottom">
              <div class="varnishes__slide-bottom-stack">
                <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                <div class="rating-stars" data-rating="4"></div>
              </div>
              <p class="descr accent-color">12 500 ₽</p>
            </div>
          </div>
        </div>
        <div class="varnishes__slide">
          <img class="varnishes__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-09/varnishes-01.png" alt="Image" />
          <div class="varnishes__slide-content">
            <p class="descr accent-color">Berger Classic —</p>
            <p class="descr">полиуретановый лак с&nbsp;глубокой защитой и&nbsp;благородным блеском, долговечен и&nbsp;прост в&nbsp;уходе.</p>
            <div class="varnishes__slide-bottom">
              <div class="varnishes__slide-bottom-stack">
                <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                <div class="rating-stars" data-rating="3"></div>
              </div>
              <p class="descr accent-color">12 500 ₽</p>
            </div>
          </div>
        </div>
        <div class="varnishes__slide">
          <img class="varnishes__slide-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-09/varnishes-03.png" alt="Image" />
          <div class="varnishes__slide-content">
            <p class="descr accent-color">Bona Mega One —</p>
            <p class="descr">универсальный и&nbsp;прочный лак, идеально подходит для жилых помещений, дает насыщенный цвет и&nbsp;шелковисто-матовую текстуру.</p>
            <div class="varnishes__slide-bottom">
              <div class="varnishes__slide-bottom-stack">
                <span class="varnishes__slide-descr">Шкала износостойкости:</span>
                <div class="rating-stars" data-rating="2.5"></div>
              </div>
              <p class="descr accent-color">12 500 ₽</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
