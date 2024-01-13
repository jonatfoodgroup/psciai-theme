<section id="latestArticles" class="bg-slate-900 py-24">
  <?php
  $args = array(
    'post_type' => 'post',
    'status' => 'draft',
    'posts_per_page' => 9,
  );
  $query = new WP_Query($args);
  if ($query->have_posts()) {
    ?>
    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:px-8 lg:py-0">
      <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl mt-0 mb-4">
          Stay up to date with the latest insights
        </h2>
        <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in,
          accusamus quisquam.
        </p>
      </div>
      <div class="mt-0 grid gap-16 border-t-2 border-gray-100 pt-4 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-4">
        <?php
        while ($query->have_posts()) {
          $query->the_post();
          $permalink = get_the_permalink();
          $title = get_the_title();
          $excerpt = get_the_excerpt();
          $date = get_the_date();
          $author = get_the_author();
          $author_url = get_author_posts_url(get_the_author_meta('ID'));
          $categories = get_the_category();
          $category = $categories[0]->name;
          $category_url = get_category_link($categories[0]->term_id);
          $image = get_the_post_thumbnail_url();
          ?>
          <div
            class="space-y-4 bg-slate-800 p-6 rounded-lg shadow-lg group-hover:text-slate-200 hover:shadow-2xl transition duration-300 ease-in-out hover:bg-slate-900">
            <a href="<?php echo $permalink; ?>" class="group group-hover:text-slate-200">
              <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                <img src="<?php echo $image; ?>" alt="" class="object-cover">
              </div>

              <p class="mt-2 text-xl font-semibold text-gray-900 group-hover:text-white text-slate-200">
                <?php echo $title; ?>
              </p>
              <p class="mt-3 text-base text-gray-500">
                <?php echo $excerpt; ?>
              </p>
              <a href="<?php echo $category_url; ?>" <h3
                class="mt-4 text-sm text-slate-700 inline-block px-2 py-1 rounded-full bg-slate-400">
                <?php echo $category; ?>
                </h3>
              </a>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>
  <div class="text-center py-16">
    <a href="<?php echo site_url(); ?>/blog"
      class="inline-block px-8 py-4 text-base font-semibold text-white bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700">
      View all articles
    </a>
  </div>
</section>
