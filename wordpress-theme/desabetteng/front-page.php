<?php get_header(); ?>

<main id="main">
  <section class="hero">
    <div class="hero-grid container">
      <div class="hero-copy">
        <p class="eyebrow">PORTAL RESMI · DESA BETTENG</p>
        <h1>Desa yang tumbuh,<br><span>melayani, dan berdaya.</span></h1>
        <p class="hero-text">Portal informasi publik Desa Betteng untuk pelayanan warga, keterbukaan informasi, potensi desa, dan kabar pembangunan.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="<?php echo esc_url(home_url('/layanan')); ?>">Jelajahi Layanan</a>
          <a class="btn btn-ghost" href="<?php echo esc_url(home_url('/profil-desa')); ?>">Profil Desa</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="visual-badge">DESA WISATA</div>
        <div class="visual-card">
          <span class="visual-kicker">BETTENG · PAMBOANG</span>
          <h2>Alam, budaya, dan pelayanan publik dalam satu portal.</h2>
          <p>Foto utama desa dapat diatur dari media WordPress pada tahap berikutnya.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="tentang">
    <div class="container split">
      <div>
        <p class="eyebrow dark">TENTANG DESA BETTENG</p>
        <h2 class="section-title">Membangun desa dengan layanan yang dekat dan informasi yang terbuka.</h2>
      </div>
      <div class="lead-copy">
        <p>Desa Betteng berada di Kecamatan Pamboang, Kabupaten Majene, Sulawesi Barat.</p>
      </div>
    </div>
  </section>

  <section class="section soft" id="berita">
    <div class="container section-head">
      <div>
        <p class="eyebrow dark">KABAR DESA</p>
        <h2 class="section-title">Berita terbaru.</h2>
      </div>
    </div>

    <div class="container news-grid">
      <?php
      $news = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
      ]);
      if ($news->have_posts()) :
        while ($news->have_posts()) : $news->the_post(); ?>
          <article class="news-card">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'news-thumb']); ?></a>
            <?php else : ?>
              <div class="news-thumb placeholder"><span>Foto kegiatan</span></div>
            <?php endif; ?>
            <div class="news-body">
              <p class="news-meta"><?php echo esc_html(get_the_date()); ?></p>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
              <a href="<?php the_permalink(); ?>">Baca selengkapnya →</a>
            </div>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <article class="news-card">
          <div class="news-thumb placeholder"><span>Berita desa</span></div>
          <div class="news-body">
            <p class="news-meta">BELUM ADA BERITA</p>
            <h3>Berita yang diterbitkan melalui WordPress akan muncul otomatis di sini.</h3>
          </div>
        </article>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
