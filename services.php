<?php
$page = 'services';
$title = 'Services';
require __DIR__ . '/includes/header.php';
$services = getServices();
?>
<section class="page-hero compact-hero">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-3.jpg') ?>')"></div><div class="hero-gradient"></div>
  <div class="container page-hero-content">
    <p class="eyebrow" data-reveal><span></span><?= t('section_services_kicker') ?></p>
    <h1 data-reveal><?= t('section_services_title') ?></h1>
    <p data-reveal><?= currentLang()==='ar' ? 'خدمات مركزة تبني حضور قوي وتحوّل الانتباه إلى عملاء.' : 'Focused services that build presence and turn attention into customers.' ?></p>
  </div>
</section>
<section class="section-pad">
  <div class="container cards-grid services-grid big-services">
    <?php foreach ($services as $item): ?>
      <article class="service-card tilt-card" data-reveal>
        <div class="service-icon"><?= iconSvg($item['icon'] ?? 'sparkles') ?></div>
        <h3><?= h(field($item, 'title')) ?></h3>
        <p><?= h(field($item, 'description')) ?></p>
        <a class="text-link" href="<?= keepLang('contact.php') ?>"><?= t('start_project') ?> →</a>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<section class="section-pad cta-section compact">
  <div class="container cta-box" data-reveal>
    <h2><?= currentLang()==='ar' ? 'محتاج باكدج مخصوصة؟' : 'Need a custom growth package?' ?></h2>
    <p><?= currentLang()==='ar' ? 'احكيلنا هدفك وهنركبلك نظام خدمات مناسب.' : 'Tell us your goal and we will assemble the right service system.' ?></p>
    <a class="btn" href="<?= keepLang('contact.php') ?>"><?= t('contact') ?></a>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
