<?php get_header(); ?>
<main class="section">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; else : ?>
      <p>Belum ada konten.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
