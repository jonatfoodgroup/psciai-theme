<?php
/*
Template name: Blog
*/
$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC'
);

$query = new WP_Query($args);

get_header();

get_template_part('modules/masthead', null, array(
  'title' => 'The latest from the GovCon AI blog',
  'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  'ctas' => array(
    array(
      'title' => 'Discover our platform',
      'url' => '#',
      'color' => 'indigo'
    ),
    array(
      'title' => 'Learn more',
      'url' => '#',
      'color' => 'transparent'
    )
  )
)
);
?>

<section class="py-24">
  <div class="mx-auto flex max-w-7xl flex-direction-row flex-wrap gap-4 p-4 lg:px-8">
    <?php get_template_part('modules/post-tiles'); ?>
  </div>
</section>

<?php 
get_template_part(
  'modules/centered-subscribe',
  null,
  array(
    'title' => 'Stay ahead of the curve',
    'subtitle' => 'Subscribe to our newsletter to get the latest insights and updates delivered to your inbox.',
  )
);


get_footer(); ?>