<?php
$page = 'home';
$title = 'Home';
require __DIR__ . '/includes/header.php';
$services = array_slice(getServices(), 0, 4);
$portfolio = array_slice(getPortfolio(), 0, 3);
$packages = array_slice(getPackages(), 0, 3);
?>
<section class="hero cinematic-hero" id="top">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-cover.jpg') ?>')"></div>
  <div class="hero-gradient"></div>
  <div class="reactor-layer" aria-hidden="true">
    <div class="reactor-hotspot"></div>
    <div class="reactor-beam"></div>
    <div class="reactor-sparks"></div>
  </div>
  <div class="orb orb-1"></div><div class="orb orb-2"></div>
  <div class="container hero-grid">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal><span></span><?= t('hero_badge') ?></div>
      <h1 class="hero-title" data-reveal>
        <?= t('hero_title_1') ?> <span><?= t('hero_title_2') ?></span> <?= t('hero_title_3') ?>
      </h1>
      <p class="hero-text" data-reveal><?= t('hero_text') ?></p>
      <div class="hero-actions" data-reveal>
        <a class="btn magnetic" href="<?= keepLang('contact.php') ?>"><?= t('hero_cta') ?><i>→</i></a>
        <a class="btn ghost magnetic" href="<?= keepLang('portfolio.php') ?>"><?= t('hero_secondary') ?></a>
      </div>
      <div class="hero-metrics" data-reveal>
        <div><strong>360°</strong><span>Digital Growth</span></div>
        <div><strong>3D</strong><span>Cinematic Presence</span></div>
        <div><strong>4X</strong><span>Creative Impact</span></div>
      </div>
    </div>
    <div class="hero-visual logo-visual" data-depth>
      <div class="hero-ring"></div>
      <div class="hero-logo-stage" aria-hidden="true">
        <div class="logo-aura logo-aura-1"></div>
        <div class="logo-aura logo-aura-2"></div>
        <div class="spark-traces">
          <span class="spark spark-a"></span>
          <span class="spark spark-b"></span>
          <span class="spark spark-c"></span>
        </div>
        <img class="logo-mark ghost" src="<?= asset('images/logo-mark-spark.svg') ?>" alt="Spark Agency logo mark">
        <img class="logo-mark live" src="<?= asset('images/logo-mark-spark-animated.svg') ?>" alt="Spark Agency glowing logo mark">
      </div>
    </div>
  </div>
  <a href="#about-preview" class="scroll-cue"><span><?= t('scroll') ?></span><b></b></a>
</section>

<section class="section-pad stats-strip">
  <div class="container stats-grid">
    <div data-reveal><strong>01</strong><span>Strategy First</span></div>
    <div data-reveal><strong>02</strong><span>Cinematic Visuals</span></div>
    <div data-reveal><strong>03</strong><span>Media Buying</span></div>
    <div data-reveal><strong>04</strong><span>Growth Reporting</span></div>
  </div>
</section>

<section class="section-pad about-preview" id="about-preview">
  <div class="container split-grid">
    <div class="stacked-scenes">
      <img class="scene scene-a" src="<?= asset('images/hero-1.jpg') ?>" alt="Spark cinematic character" data-reveal>
      <img class="scene scene-b" src="<?= asset('images/hero-2.jpg') ?>" alt="Spark mascot in studio" data-reveal>
    </div>
    <div>
      <p class="kicker" data-reveal><?= t('section_about_kicker') ?></p>
      <h2 class="section-title" data-reveal><?= t('section_about_title') ?></h2>
      <p class="lead" data-reveal><?= t('section_about_text') ?></p>
      <a class="text-link" href="<?= keepLang('about.php') ?>" data-reveal><?= t('about') ?> →</a>
    </div>
  </div>
</section>

<section class="section-pad services-preview">
  <div class="container">
    <div class="section-head">
      <div>
        <p class="kicker" data-reveal><?= t('section_services_kicker') ?></p>
        <h2 class="section-title" data-reveal><?= t('section_services_title') ?></h2>
      </div>
      <a class="text-link" href="<?= keepLang('services.php') ?>" data-reveal><?= t('services') ?> →</a>
    </div>
    <div class="cards-grid services-grid">
      <?php foreach ($services as $item): ?>
        <article class="service-card tilt-card" data-reveal>
          <div class="service-icon"><?= iconSvg($item['icon'] ?? 'sparkles') ?></div>
          <h3><?= h(field($item, 'title')) ?></h3>
          <p><?= h(field($item, 'description')) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="marquee-section" aria-hidden="true">
  <div class="marquee-track"><span>SPARK AGENCY • WE SPARK GROWTH • CINEMATIC MARKETING • 3D BRAND EXPERIENCE • </span><span>SPARK AGENCY • WE SPARK GROWTH • CINEMATIC MARKETING • 3D BRAND EXPERIENCE • </span></div>
</section>

<section class="section-pad portfolio-preview">
  <div class="container">
    <div class="section-head">
      <div>
        <p class="kicker" data-reveal><?= t('portfolio_kicker') ?></p>
        <h2 class="section-title" data-reveal><?= t('portfolio_title') ?></h2>
      </div>
      <a class="text-link" href="<?= keepLang('portfolio.php') ?>" data-reveal><?= t('portfolio') ?> →</a>
    </div>
    <div class="portfolio-grid">
      <?php foreach ($portfolio as $item): ?>
        <article class="work-card" data-reveal>
          <img src="<?= h(baseUrl($item['image'] ?? 'assets/images/hero-1.jpg')) ?>" alt="<?= h(field($item, 'title')) ?>">
          <div class="work-overlay">
            <span><?= h(field($item, 'category')) ?></span>
            <h3><?= h(field($item, 'title')) ?></h3>
            <p><?= h(field($item, 'result')) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad packages-preview">
  <div class="container">
    <p class="kicker center" data-reveal><?= t('packages_kicker') ?></p>
    <h2 class="section-title center narrow" data-reveal><?= t('packages_title') ?></h2>
    <div class="pricing-grid">
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
          <a class="btn ghost" href="<?= keepLang('contact.php') ?>"><?= t('start_project') ?></a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad cta-section">
  <div class="container cta-box" data-reveal>
    <img src="<?= asset('images/logo-mark-spark.svg') ?>" alt="Spark logo mark">
    <p class="kicker"><?= t('contact_kicker') ?></p>
    <h2><?= t('contact_title') ?></h2>
    <p><?= t('contact_text') ?></p>
    <a class="btn magnetic" href="<?= keepLang('contact.php') ?>"><?= t('start_project') ?><i>→</i></a>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
