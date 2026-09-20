<footer class="footer" id="kontak">
  <div class="container footer-grid">
    <div class="footer-brand">
      <div class="brand">
        <span class="brand-mark">DB</span>
        <span class="brand-copy">
          <strong>DESA BETTENG</strong>
          <small>Kecamatan Pamboang · Kabupaten Majene</small>
        </span>
      </div>
      <p>Portal resmi informasi, pelayanan publik, transparansi, dan potensi Desa Betteng.</p>
    </div>
    <div>
      <h4>Tautan Cepat</h4>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'fallback_cb' => false,
        'items_wrap' => '%3$s',
      ]);
      ?>
    </div>
    <div>
      <h4>Kontak</h4>
      <p>Desa Betteng, Kecamatan Pamboang<br>Kabupaten Majene, Sulawesi Barat</p>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>© <?php echo esc_html(date('Y')); ?> Pemerintah Desa Betteng</span>
    <span>Website resmi desa</span>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
