<?php

// Assign the posts to a variable
$posts = get_posts(
  array(
    'post_type' => 'solution',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  )
);

?>

<section class="py-4">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($posts as $post): ?>
        <?php $title = get_the_title($post->ID); ?>
        <?php $excerpt = get_the_excerpt($post->ID); ?>
        <?php $image = get_the_post_thumbnail_url($post->ID, 'full');

        if (!$image) {
          $image = 'https://via.placeholder.com/600x400';
        }
        ?>
        <?php $link = get_permalink($post->ID); ?>
        <div class="bg-slate-800 rounded-lg shadow-lg overflow-hidden text-center">
          <div class="flex-shrink-0">
            <img class="h-64 w-full object-cover" src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
          </div>
          <div class="flex-1 bg-slate-800 p-6 flex flex-col justify-between">
            <div class="flex-1">
              <p class="text-2xl text-white font-bold">
                <a href="<?php echo $link; ?>" class="hover:underline">
                  <?php echo $title; ?>
                </a>
              </p>
              <a href="<?php echo $link; ?>" class="block mt-2">
                <p class="text-xl text-slate-400">
                  <?php echo $excerpt; ?>
                </p>
                <p class="mt-3 text-base text-gray-300">
                  Learn more
                </p>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>