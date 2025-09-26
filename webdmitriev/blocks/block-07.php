<?php
/**
 * Conference - Block
 */

$block_path = 'block-07';
$gutenberg_title = 'Block - 07';

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
<section class="block-07">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="line-wrap">
        <h2 class="h2">Слово от первого лица</h2>
        <div class="block__quote">
          <p class="descr icons-quote">Когда мы&nbsp;начинали заниматься шлифовкой паркета, многие думали, что это просто&nbsp;&mdash; включил машину, прошёлся и&nbsp;готово. Но&nbsp;за&nbsp;каждым идеально отреставрированным полом&nbsp;&mdash; десятки часов точной, почти ювелирной работы. Наш подход&nbsp;&mdash; это сочетание немецкого оборудования, проверенных материалов и&nbsp;опыта мастеров, которые знают, как раскрыть красоту дерева. <br/><br/>Мы&nbsp;ценим доверие клиентов, поэтому всегда даём гарантию на&nbsp;работы. Ведь наша цель&nbsp;&mdash; не&nbsp;просто восстановить пол, а&nbsp;подарить вам удовольствие от&nbsp;каждого шага по&nbsp;нему. И&nbsp;да, мы&nbsp;действительно приезжаем уже через два часа после звонка. Проверено временем и&nbsp;трафиком Москвы&laquo;,&nbsp;&mdash; отметил директор компании &laquo;ЛенПаркет&raquo;.</p>
          <p class="descr descr-quote">
            <span>Убедитесь в&nbsp;профессионализме на&nbsp;практике&nbsp;&mdash; оставьте заявку и&nbsp;получите консультацию бесплатно</span>
            <a href="#">Заказать консультацию</a>
          </p>
        </div>
        <div class="block__owner">
          <img class="block__owner-image" src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/block-07/owner-01.png" alt="Image" />
          <div class="block__owner-content">
            <div class="owner__about">
              <p class="owner__name">Александр <br/>Левшин</p>
              <p class="owner__role">Руководитель <br/>компании МскПаркет</p>
            </div>
            <div class="block__owner-contacts">
              <div class="contacts-label">Свяжитесь со&nbsp;мной и&nbsp;я&nbsp;лично Вас проконсультирую</div>
              <a class="contacts-phone" href="tel:+7963963666">+7 (963) 96-36-66</a>
              <a class="contacts-social" href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/icons/social-tg.svg" alt="Social" /></a>
              <a class="contacts-social" href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url($url); ?>/webdmitriev/assets/img/icons/social-wa.svg" alt="Social" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
