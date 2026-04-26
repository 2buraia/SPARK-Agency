<?php
$page = 'about';
$title = 'About';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero compact-hero">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-cover.jpg') ?>')"></div><div class="hero-gradient"></div>
  <div class="container page-hero-content">
    <p class="eyebrow" data-reveal><span></span><?= t('section_about_kicker') ?></p>
    <h1 data-reveal><?= t('section_about_title') ?></h1>
    <p data-reveal><?= t('section_about_text') ?></p>
  </div>
</section>
<section class="section-pad about-deep">
  <div class="container split-grid reverse">
    <div>
      <p class="kicker" data-reveal><?= t('spark_method') ?></p>
      <h2 class="section-title" data-reveal><?= currentLang()==='ar' ? 'نصمم حضور رقمي يحسسه العميل إن البراند أكبر من مجرد صفحة.' : 'We design a digital presence that feels bigger than a page.' ?></h2>
      <p class="lead" data-reveal><?= currentLang()==='ar' ? 'كل تفصيلة في Spark مبنية على إحساس: صورة فخمة، رسالة واضحة، حركة محسوبة، ونتيجة قابلة للقياس. إحنا مش بننشر محتوى وبس؛ إحنا بنبني عالم للبراند.' : 'Every Spark detail is built around a feeling: premium visuals, clear messaging, calculated motion, and measurable performance. We do not just publish content; we build a world around the brand.' ?></p>
      <div class="mini-grid">
        <div data-reveal><strong>Strategy</strong><span>Market, audience, offer</span></div>
        <div data-reveal><strong>Creative</strong><span>Identity, content, video</span></div>
        <div data-reveal><strong>Performance</strong><span>Paid media, reports, growth</span></div>
      </div>
    </div>
    <div class="cinema-frame" data-reveal><img src="<?= asset('images/hero-2.jpg') ?>" alt="Spark agency hero"></div>
  </div>
</section>
<section class="section-pad process-section">
  <div class="container">
    <div class="process-grid">
      <?php
      $steps = currentLang()==='ar'
        ? [['01','نفهم','نحلل السوق والجمهور والمنافسين.'],['02','نبني','نصمم الرسالة والهوية والمحتوى.'],['03','نطلق','نشغل الحملات ونقيس ونطور.']]
        : [['01','Decode','We read the market, audience, competitors and goals.'],['02','Design','We craft the message, identity, content and creative world.'],['03','Deploy','We launch campaigns, measure results and optimize.']];
      foreach($steps as $step): ?>
        <article class="process-card" data-reveal><span><?= h($step[0]) ?></span><h3><?= h($step[1]) ?></h3><p><?= h($step[2]) ?></p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
