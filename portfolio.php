<?php
$page = 'portfolio';
$title = 'Portfolio';
require __DIR__ . '/includes/header.php';
$portfolio = getPortfolio();
?>
<section class="page-hero compact-hero">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-1.jpg') ?>')"></div><div class="hero-gradient"></div>
  <div class="container page-hero-content">
    <p class="eyebrow" data-reveal><span></span><?= t('portfolio_kicker') ?></p>
    <h1 data-reveal><?= t('portfolio_title') ?></h1>
    <p data-reveal><?= currentLang()==='ar' ? 'هنبدل النماذج دي بأعمالكم الحقيقية من لوحة التحكم.' : 'These premium placeholders can be replaced from the admin panel.' ?></p>
  </div>
</section>
<section class="section-pad">
  <div class="container portfolio-grid portfolio-page-grid">
    <?php foreach ($portfolio as $item): ?>
      <article class="work-card large" data-reveal>
        <img src="<?= h(baseUrl($item['image'] ?? 'assets/images/hero-1.jpg')) ?>" alt="<?= h(field($item, 'title')) ?>">
        <div class="work-overlay">
          <span><?= h(field($item, 'category')) ?></span>
          <h3><?= h(field($item, 'title')) ?></h3>
          <p><?= h(field($item, 'result')) ?></p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
