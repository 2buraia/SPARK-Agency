<?php
$page = 'packages';
$title = 'Packages';
require __DIR__ . '/includes/header.php';
$packages = getPackages();
?>
<section class="page-hero compact-hero">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-cover.jpg') ?>')"></div><div class="hero-gradient"></div>
  <div class="container page-hero-content">
    <p class="eyebrow" data-reveal><span></span><?= t('packages_kicker') ?></p>
    <h1 data-reveal><?= t('packages_title') ?></h1>
    <p data-reveal><?= currentLang()==='ar' ? 'أسعار ومميزات قابلة للتعديل بالكامل من لوحة التحكم.' : 'Prices and features are fully editable from the admin panel.' ?></p>
  </div>
</section>
<section class="section-pad">
  <div class="container pricing-grid pricing-page-grid">
    <?php foreach ($packages as $i => $package): ?>
      <article class="price-card <?= $i === 1 ? 'featured' : '' ?>" data-reveal>
        <span class="price-badge"><?= $i === 1 ? 'Most Popular' : 'Spark Pack' ?></span>
        <h3><?= h(field($package, 'name')) ?></h3>
        <strong><?= h(field($package, 'price')) ?></strong>
        <ul>
          <?php foreach (preg_split('/\r\n|\r|\n/', field($package, 'features')) as $feature): if(trim($feature)==='') continue; ?>
            <li><?= h($feature) ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="btn <?= $i === 1 ? '' : 'ghost' ?>" href="<?= keepLang('contact.php') ?>"><?= t('start_project') ?></a>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
