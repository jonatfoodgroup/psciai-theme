<?php
get_header();
$title = get_the_title();
$masthead = get_field('masthead', get_the_ID());
$masthead_title = $masthead['masthead_title'];
$masthead_content = $masthead['masthead_content'];
$features = get_field('features', get_the_ID()); // Repeater field
$feature_columns = array();

if (!empty($features)) {
foreach ($features as $feature) {
  $feature_columns[] = array(
    'title' => $feature['feature']['title'],
    'subtitle' => $feature['feature']['description']
  );
}
}

?>

<section class="bg-slate-800 py-8 pb-16">
  <div class="mx-auto flex max-w-7xl items-start p-4 lg:px-8 flex flex-col lg:flex-column justify-between">
    <h4 class="text-sm font-light text-gray-400 text-uppercase">
      <a class="text-gray-100" href="<?php echo site_url(); ?>/solutions">Solutions</a> /
      <?php echo $title; ?>
    </h4>
    <div class="max-w-3xl">
      <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">
        <?php echo $masthead_title; ?>
      </h1>
      <p class="text-gray-300 mt-2 text-lg">
        <?php echo $masthead_content; ?>
      </p>
    </div>

    <a href="#"
      class="mt-4 inline-flex items-center px-6 py-3 border border-transparent text-lg font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
      Schedule a demo
    </a>
</section>

<section class="bg-gray-900 py-8 pb-16">
  <div class="mx-auto flex max-w-7xl items-start p-4 lg:px-8 flex-direction-row flex-wrap">
    <div class="text w-full lg:w-1/3 lg:pr-8">
      <h2 class="text-3xl font-bold text-white mt-8 mb-4"><?php echo $title; ?> Overview</h2>
    </div>
    <div class="text w-full lg:w-2/3 lg:pr-8">
      <p class="text-slate-400 mt-2 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <p class="text-slate-400 mt-2 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <p class="text-slate-400 mt-2 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
    </div>
  </div>
</section>

<?php 
if (!empty($feature_columns)) {
get_template_part(
  'modules/three-column-with-icons',
  null,
  array(
    'title' => 'Features',
    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'columns' => $feature_columns
  )
);
}
?>

  <?php get_template_part(
    'modules/centered-banner',
    null,
    array(
      'title' => 'Ready to get started?',
      'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      'cta' => 'Schedule a demo',
      'cta_link' => '#'
    )
  );


  get_template_part('modules/related-posts');
  ?>



</div>

<?php
get_footer();
?>