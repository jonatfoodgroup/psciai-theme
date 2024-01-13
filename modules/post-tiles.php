<!-- Post tiles -->
<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
  ?>
  <div class="mt-0 grid gap-16 border-t-2 border-gray-100 pt-4 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-4">
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

          <p class="mt-2 text-xl font-semibold group-hover:text-white text-white">
            <?php echo $title; ?>
          </p>
          <p class="mb-8 text-base text-slate-300 group-hover:text-slate-400 d-block">
            <?php echo $excerpt; ?>
          </p>

          <div class="flex flex-row item-center gap-4">
            <!-- Category -->
            <div class="flex flex-row items-center gap-x-2">
              <h3 class="mt-4 text-sm text-slate-700 inline-block px-2 py-1 rounded-full bg-slate-400">
                <?php echo $category; ?>
              </h3>
            </div>
            <!-- End cetrgoy -->

            <!-- Author -->
            <!-- <div class="flex flex-row items-center gap-x-4">
              <div class="flex flex-row items-center gap-x-2">
                <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php echo $author; ?>"
                  class="h-8 w-8 rounded-full object-cover" />
                <p class="text-sm text-slate-300">
                  <?php echo $author; ?>
                </p>
              </div>
              <p class="text-sm text-slate-300">
                <?php echo $date; ?>
              </p>
            </div> -->
            <!-- End author -->
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
<?php } ?>

<!-- End Post tiles -->