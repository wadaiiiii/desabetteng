<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
  <div class="container topbar-inner">
    <span>Desa Betteng · Kecamatan Pamboang · Kabupaten Majene</span>
    <div class="topbar-links">
      <a href="<?php echo esc_url(home_url('/pengaduan')); ?>">Layanan Pengaduan</a>
      <a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak Desa</a>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
        <span class="brand-mark">DB</span>
      <?php } ?>
      <span class="brand-copy">
        <strong><?php bloginfo('name'); ?></strong>
        <small>Kecamatan Pamboang · Kabupaten Majene</small>
      </span>
    </a>

    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Buka menu">
      <span></span><span></span><span></span>
    </button>

    <nav class="main-nav" id="main-nav" aria-label="Navigasi utama">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'fallback_cb' => false,
        'items_wrap' => '%3$s',
      ]);
      ?>
    </nav>
  </div>
</header>
