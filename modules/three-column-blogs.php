<!-- A PHP query to get all posts 3 total -->
<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 2
);
$query = new WP_Query($args);
?>

<div class="bg-white py-24 sm:py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <?php
      if ($query->have_posts()):
        while ($query->have_posts()):
          $query->the_post();

          $title = get_the_title();
          $date = get_the_date();
          $category = get_the_category();
          $image_url = get_the_post_thumbnail_url();
          ?>

          <article class="flex flex-col items-start justify-between">
            <div class="relative w-full">
              <img src="<?php echo $image_url; ?>" alt=""
                class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
              <div class="absolute inset-0 ring-1 ring-inset ring-gray-900/10"></div>
            </div>
            <div class="max-w-xl">
              <div class="mt-8 flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">
                  <?php echo $date; ?>
                </time>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    <?php echo $title; ?>
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                  eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat
                  consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
              </div>
            </div>
          </article>

        <?php
        endwhile;
      endif;
      ?>

    </div>
  </div>
</div>