<?php 
$types = array(
  'Blog',
  'Training Paths'
);
?>

<div class="flex flex-row items-start gap-x-16">
  <div>
    <div>
      <h4 class="text-xl font-bold mt-0 text-white mb-4 border-b border-slate-800">
        By Type
      </h4>
      <ul>
        <?php foreach ($types as $type) { ?>
          <li class="mb-2">
            <a href="<?php echo site_url() . '/' . strtolower(str_replace(' ', '-', $type)); ?>" class="text-slate-400">
              <?php echo $type; ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div>
      <h4 class="text-xl font-bold mt-8 text-white mb-4 border-b border-slate-800">
        By Category
      </h4>

      <?php

      // Get 5 categories
      $categories = get_categories(
        array(
          'orderby' => 'name',
          'order' => 'ASC',

        )
      );

      ?>
      <ul>
        <?php foreach ($categories as $category) { ?>
          <li class="mb-2">
            <a href="<?php echo get_category_link($category->term_id); ?>" class="text-slate-400">
              <?php echo $category->name; ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="ml-16">
    <h4 class="text-xl font-bold mt-0 text-white mb-4 border-b border-slate-800">
      Latest Articles
    </h4>
    <?php

    $featured_resources = get_posts(
      array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      )
    );

    foreach ($featured_resources as $resource) {
      $title = $resource->post_title;
      $excerpt = $resource->post_excerpt;
      $image = get_the_post_thumbnail_url($resource->ID, 'full');
      $category = get_the_category($resource->ID);
      $category_name = $category[0]->name;
      $category_slug = $category[0]->slug;
      $date = get_the_date('F j, Y', $resource->ID);
      $link = get_permalink($resource->ID);

      if (!$image) {
        $image = 'https://placehold.it/1200x600';
      }

      ?>

      <div class="flex flex-row items-center gap-x-4 mb-4">
        <div class="w-1/4 max-w-32">
          <?php if ($image) { ?>
            <a href="<?php echo $link; ?>">
              <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="h-32 w-32 object-cover" />
            </a>
          <?php } ?>
        </div>
        <div class="w-3/4">
          <h4 class="text-lg font-bold text-white">
            <a href="<?php echo $link; ?>">
              <?php echo $title; ?>
            </a>
          </h4>
          <p class="text-sm text-slate-400">
            <?php echo $date; ?>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>