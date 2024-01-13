<?php

$count = (isset($args['count'])) ? $args['count'] : 4;

?>
<div class="bg-slate-900 py-16 sm:py-16">
  <div class="max-w-7xl mx-auto">
  <h2 class="text-3xl font-bold text-white mt-8 mb-4 text-center">Related Resources</h2>
  <div data-slick='{"slidesToShow": <?php echo $count; ?>, "slidesToScroll": 1, "dots": true, "infinite": true, "autoplay": true}' class="slick">
    <?php

    $posts = get_posts(array(
      'post_type' => 'post',
      'posts_per_page' => 6,
    ));

    ?>

    <?php foreach ($posts as $post) {
      setup_postdata($post);
      $title = get_the_title();
      $excerpt = get_the_excerpt();
      $category = get_the_category($post->ID)[0]->name;
      $category_link = get_category_link(get_the_category($post->ID)[0]->term_id);
      $image = get_the_post_thumbnail_url($post->ID);
      ?>
      <div class="p-4">
        <div class="bg-slate-800 shadow-lg rounded-lg overflow-hidden">
          <div class="bg-cover bg-center h-56 p-4" style="background-image: url('<?php echo $image; ?>')">
          </div>
          <div class="p-4">
            <a href="<?php echo $category_link; ?>">
            <p class="uppercase tracking-wide text-sm font-bold text-slate-400">
              <?php echo $category; ?>
            </p>
            </a>
            
            <a href="<?php echo get_permalink($post->ID); ?>"
              class="block mt-1 text-2xl leading-tight font-medium text-white hover:underline">
              <?php echo $title; ?>
            </a>
            <p class="mt-2 text-slate-400 text-sm">
              <?php echo $excerpt; ?>
            </p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>