<?php get_header(); ?>
<section class="bg-gray-900 py-8 pb-16 text-center">
  <h1 class="text-4xl font-bold text-white mt-16 mb-4">
    Posts from <?php the_author_link(); ?>
  </h1>
  <div class="archive-meta" itemprop="description">
  <?php if ('' != get_the_author_meta('user_description')) {
    echo esc_html(get_the_author_meta('user_description'));
  } ?>
  </div>
</section>
<?php rewind_posts(); ?>

<div class="mx-auto flex max-w-7xl items-start p-4 lg:px-8 flex-direction-row flex-wrap">
        <div class="text w-full lg:w-2/3 lg:pr-8">

<?php while (have_posts()):
  the_post(); ?>
  <?php get_template_part('entry'); ?>
<?php endwhile; ?>
<?php get_template_part('nav', 'below'); ?>

</div>
<div class="w-full lg:w-1/3 sidebar lg:px-8">
  <?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>