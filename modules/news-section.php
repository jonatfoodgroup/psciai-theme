<?php

$title = (isset($args['title'])) ? $args['title'] : null;

$posts = get_posts(
  array(
    'posts_per_page' => 10,
    'post_type' => 'post',
    'post_status' => 'publish'
  )
); ?>

<div class="bg-white-100 bg-opacity-100 px-5 py-16">
  <?php if ($title): ?>
    <div class="text-center">
      <h2 class="text-3xl font-semibold text-center mb-8">
        <?php echo $title; ?>
      </h2>
    </div>
  <?php endif; ?>
  <div class="container grid grid-cols-12 md:gap-10 font-serif mx-auto">

    <!-- Left columns -->
    <div class="md:col-span-3 col-span-12 space-y-12 py-6 flex flex-col">
      <?php
      // Display 3 posts from the array
      $left_posts = array_slice($posts, 0, 3);
      foreach ($left_posts as $post) {
        setup_postdata($post);
        $post_id = get_the_ID();
        $post_title = get_the_title();
        $post_date = get_the_date();
        $category = get_the_category();
        $post_excerpt = get_the_excerpt();
        $post_permalink = get_the_permalink();
        $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
        if (!$post_thumbnail) {
          $post_thumbnail = 'https://placehold.it/300x300';
        }
        ?>
        <div class="flex">
          <img src="<?php echo $post_thumbnail; ?>" alt="img" class="w-20 h-20 flex-shrink-0 mr-4 object-cover" />
          <div class="flex-grow flex flex-col">
            <a href="<?php echo $post_permalink; ?>" class="mb-0.5 hover:underline">
              <?php echo $post_title; ?>
            </a>
            <p class="text-gray-600 text-opacity-40 text-xs mt-auto font-sans">
              <?php echo $post_date; ?> <a href="#" class="text-blue-400 lg:ml-2 lg:inline block hover:underline">
                <?php echo $category[0]->name; ?>
              </a>
            </p>
          </div>
        </div>
        <?php
      } ?>

      <div class="flex flex-col w-full">
        <div class="w-full flex h-0.5 bg-yellow-700 bg-opacity-10">
          <div class="w-1/2 bg-red-500 h-full">
          </div>
        </div>
        <a href="<?php echo site_url(); ?>/blog" class="font-sans text-xs font-bold pt-5 flex w-full">SEE MORE HOT
          TOPICS

          <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round"
            stroke-linejoin="round" class="w-3.5 ml-auto text-red-500">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg></a>
      </div>
    </div>

    <!-- Featured posts -->
    <?php
    $featured_post = $posts[4];
    setup_postdata($featured_post);
    $post_id = get_the_ID();
    $post_title = get_the_title();
    $post_date = get_the_date();
    $category = get_the_category();
    $post_excerpt = get_the_excerpt();
    $post_permalink = get_the_permalink();
    $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');

    if (!$post_thumbnail) {
      $post_thumbnail = 'https://placehold.it/1200x600';
    }
    ?>
    <div class="xl:col-span-6 lg:col-span-5 md:col-span-9 col-span-12 relative bg-cover bg-no-repeat bg-center flex text-center flex-col"
      style="background-image:url('<?php echo $post_thumbnail; ?>')">

      <span
        class="text-xs font-sans font-bold text-white absolute left-6 top-6 pb-2.5 border-b-2 border-red-500">FEATURED</span>
      <div
        class="flex flex-col items-center justify-end text-center flex-grow-1 px-12 pb-10 bg-gradient-to-t from-black h-full">
        <h3 class="flex items-center font-sans font-bold text-xs text-red-500 mb-4">
          <span class="w-2 h-2 rounded-full bg-red-500 flex-shrink-0 mr-2.5"></span>
          <?php echo $category[0]->name; ?>
        </h3>
        <a href="<?php echo $post_permalink; ?>" class="text-white text-3xl hover:underline leading-10">
          <?php echo $post_title; ?>
        </a>
        <p class="text-white text-opacity-50 text-xs mt-4 font-sans">
          <?php echo $post_date; ?>
        </p>
      </div>
    </div>

    <!-- Right columns -->
    <div class="xl:col-span-3 lg:col-span-4 md:hidden lg:block hidden py-6">
      <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-8">
        <button class="text-xs font-bold pb-5 font-sans border-b-2 border-red-500">LATEST</button>
        <button
          class="text-xs font-bold pb-5 font-sans border-b-2 border-transparent text-gray-600 text-opacity-40">POPULAR</button>
        <button
          class="text-xs font-bold pb-5 font-sans border-b-2 border-transparent text-gray-600 text-opacity-40">RESOURCES</button>
      </div>
      <div class="flex flex-col space-y-8">
        <?php
        // Display 3 posts from the array
        $right_posts = array_slice($posts, 5, 3);
        foreach ($right_posts as $post) {
          setup_postdata($post);
          $post_id = get_the_ID();
          $post_title = get_the_title();
          $post_date = get_the_date();
          $category = get_the_category();
          $post_excerpt = get_the_excerpt();
          $post_permalink = get_the_permalink();
          $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
          if (!$post_thumbnail) {
            $post_thumbnail = 'https://placehold.it/300x300';
          }
          ?>
          <div class="flex">
            <img src="<?php echo $post_thumbnail; ?>" alt="img" class="w-20 h-20 flex-shrink-0 mr-4 object-cover" />
            <div class="flex-grow flex flex-col">
              <a href="<?php echo $post_permalink; ?>" class="mb-0.5 hover:underline">
                <?php echo $post_title; ?>
              </a>
              <p class="text-gray-600 text-opacity-40 text-xs mt-auto font-sans">
                <?php echo $post_date; ?> <a href="#" class="text-blue-400 lg:ml-2 lg:inline block hover:underline">
                  <?php echo $category[0]->name; ?>
                </a>
              </p>
            </div>
          </div>
          <?php
        } ?>

      </div>
    </div>

  </div>
</div>