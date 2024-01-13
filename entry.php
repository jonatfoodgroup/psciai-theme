<?php
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
  class="space-y-4 bg-slate-800 p-6 rounded-lg shadow-lg group-hover:text-slate-200 hover:shadow-2xl transition duration-300 ease-in-out hover:bg-slate-900 mb-8">
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