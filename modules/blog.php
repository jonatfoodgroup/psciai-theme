<?php
$title = $args['title'];
$subtitle = $args['subtitle'];

$posts = get_posts(array(
  'posts_per_page' => 6,
  'post_type' => 'post',
  'post_status' => 'publish'
));?>

<section class="blog">
  <div class="blog__masthead text-center">
    <h1 class="blog__title"><?php echo $title; ?></h1>
    <p class="blog__subtitle"><?php echo $subtitle; ?></p>
  </div>
  <div class="blog__posts">
<div data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
  <?php
foreach ($posts as $post) {
  setup_postdata($post);
  $post_id = get_the_ID();
  $post_title = get_the_title();
  $post_date = get_the_date();
  $post_excerpt = get_the_excerpt();
  $post_permalink = get_the_permalink();
  $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
  ?>
  <div class="blog-post">
    <div class="blog-post__content">
      <h3 class="blog-post__title"><?php echo $post_title; ?></h3>
      <p class="blog-post__date"><?php echo $post_date; ?></p>
      <p class="blog-post__excerpt"><?php echo $post_excerpt; ?></p>
      <a href="<?php echo $post_permalink; ?>" class="blog-post__link">Read More</a>
    </div>
  </div>
  <?php
}

wp_reset_postdata();
?>

</div>
</div>
</section>