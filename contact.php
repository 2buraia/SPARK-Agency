<?php
require_once __DIR__ . '/includes/functions.php';
$page = 'contact';
$title = 'Contact';
$sent = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name === '' || $email === '' || $message === '') {
        $error = currentLang()==='ar' ? 'من فضلك املأ الاسم والإيميل والرسالة.' : 'Please fill name, email and message.';
    } else {
        $sent = submitContact($_POST);
        if (!$sent) {
            $subject = rawurlencode('Spark Agency Website Lead');
            $body = rawurlencode("Name: $name\nEmail: $email\nPhone: " . ($_POST['phone'] ?? '') . "\n\n$message");
            header('Location: mailto:' . SITE_EMAIL . '?subject=' . $subject . '&body=' . $body);
            exit;
        }
    }
}
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero compact-hero contact-hero">
  <div class="hero-bg" style="background-image:url('<?= asset('images/hero-2.jpg') ?>')"></div><div class="hero-gradient"></div>
  <div class="container page-hero-content">
    <p class="eyebrow" data-reveal><span></span><?= t('contact_kicker') ?></p>
    <h1 data-reveal><?= t('contact_title') ?></h1>
    <p data-reveal><?= t('contact_text') ?></p>
  </div>
</section>
<section class="section-pad contact-section">
  <div class="container contact-grid">
    <div class="contact-info" data-reveal>
      <h2><?= currentLang()==='ar' ? 'خلينا نبدأ الشرارة.' : 'Let us start the spark.' ?></h2>
      <p><?= currentLang()==='ar' ? 'ابعت تفاصيل مشروعك، هدفك، واللي نفسك توصله. فريق Spark هيرد عليك بأسرع وقت.' : 'Send your project details, goal, and what you want to achieve. Spark will respond as soon as possible.' ?></p>
      <a href="mailto:<?= h(getSiteSetting('email', SITE_EMAIL)) ?>"><?= h(getSiteSetting('email', SITE_EMAIL)) ?></a>
      <a href="<?= h(getSiteSetting('facebook', SITE_FACEBOOK)) ?>" target="_blank" rel="noopener">Facebook</a>
    </div>
    <form class="contact-form" method="post" data-reveal>
      <?php if ($sent): ?><div class="alert success"><?= currentLang()==='ar' ? 'تم إرسال رسالتك بنجاح.' : 'Your message has been sent successfully.' ?></div><?php endif; ?>
      <?php if ($error): ?><div class="alert error"><?= h($error) ?></div><?php endif; ?>
      <label><?= t('name') ?><input name="name" required></label>
      <label><?= t('email') ?><input type="email" name="email" required></label>
      <label><?= t('phone') ?><input name="phone"></label>
      <label><?= t('message') ?><textarea name="message" rows="6" required></textarea></label>
      <button class="btn" type="submit"><?= t('send') ?></button>
    </form>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
