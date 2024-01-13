<?php get_header(); ?>
<section class="py-8">
  <div class="mx-auto max-w-7xl">
    <a href="<?php echo site_url(); ?>/blog" class="text-sm font-semibold leading-6 text-gray-100  px-6 py-2">
    <svg class="h-6 w-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M11 19l-7-7 7-7m8 14l-7-7 7-7">
      </path>
    </svg>
    Back to
      Blog</a>
  </div>
</section>
<section class="bg-gray-900 py-8 pb-8 text-center">
  <h1 class="text-4xl font-bold text-white mt-8 mb-4">
    <?php single_term_title(); ?>
  </h1>
  <div class="archive-meta" itemprop="description">
    <?php if ('' != get_the_archive_description()) {
      echo esc_html(get_the_archive_description());
    } ?>
  </div>
</section>

<section id="featured">
</section>
<section class="py-8">
  <div class="mx-auto max-w-7xl">
    <div class="grid gap-16 border-t-2 border-gray-100 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-4">
      <?php if (have_posts()):
        while (have_posts()):
          the_post();
          $permalink = get_the_permalink();
          $title = get_the_title();
          $excerpt = get_the_excerpt();
          $date = get_the_date();
          $author = get_the_author();
          $author_url = get_author_posts_url(get_the_author_meta('ID'));
          $image = get_the_post_thumbnail_url();
          $categories = get_the_category();
          $category = $categories[0]->name;
          $category_url = get_category_link($categories[0]->term_id);
          ?>
          <div
            class="space-y-4 bg-slate-800 p-6 rounded-lg shadow-lg group-hover:text-slate-200 hover:shadow-2xl transition duration-300 ease-in-out hover:bg-slate-900">
            <a href="<?php echo $permalink; ?>" class="group
        ">
              <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                <img src="<?php echo $image; ?>" alt="" class="object-cover">
              </div>
              <a href="<?php echo $permalink; ?>">
                <h3 class="font-bold text-2xl mb-2 mt-2 text-white">
                  <?php echo $title; ?>
                </h3>
              </a>
              <p class="text-base text-slate-400">
                <?php echo $excerpt; ?>
              </p>
              <a href="<?php echo $category_link; ?>"
                class="inline-block py-1 px-2 uppercase rounded-full bg-slate-700 text-white text-xs font-bold">
                <?php echo $category; ?>
              </a>
            </a>
          </div>
        <?php endwhile; endif; ?>
      <?php get_template_part('nav', 'below'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>