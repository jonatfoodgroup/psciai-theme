<?php
/*
Template Name: Company
*/
get_header();
if (have_posts()):
  while (have_posts()):
    the_post();

    get_template_part(
      'modules/masthead',
      null,
      array(
        'title' => '100+ years in the GovCon industry paired with the strongest minds in AI',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
      )
    );

    get_template_part('modules/callout-tiles');

    ?>

    <section class="py-16 pt-24 text-center">
      <!-- Mission statement block -->
      <div class="relative bg-slate-900">
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
          <div class="px-6 text-lg leading-7 text-gray-500 sm:px-6 lg:py-0 lg:px-8 lg:col-span-5 xl:pr-12">
            <h4 class="text-slate-400 text-xl font-semibold">
              Our Mission
            </h4>
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl max-w-2xl mx-auto">
            Enable GovCon companies to win more contracts and scale their business with AI.
            </h2>
            <p class="mt-6 text-xl leading-7 text-slate-200">
              PSci.AI is at the forefront of AI-driven solutions, reshaping the landscape for government contractors in
              defense, aerospace, and education sectors. Our advanced AI technologies streamline interactions with
              government entities, offering a strategic edge in efficiency and effectiveness. By harnessing our powerful
              data analytics and decision-making tools, businesses are not only positioned to secure valuable government
              contracts but also to scale and thrive. We offer a partnership that goes beyond technology; it's about
              leveraging AI to drive unparalleled growth and success. Join us in leading the charge in AI innovation, where
              your goals become our mission.
            </p>
            <div class="mt-6">
              <!-- An image that shows the company -->
              <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                Explore our platform
              </a>
            </div>
          </div>
        </div>
    </section>

    <section id="visionDiagram">
      <img src="https://placehold.it/1200x600" alt="Vision diagram" class="mx-auto">
    </section>

    <?php

    get_template_part('modules/our-team');

    get_template_part('modules/latest-articles'); 


    get_template_part(
      'modules/centered-banner',
      null,
      array(
        'title' => 'Want to learn more about how AI can transform your business?',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'cta' => 'Schedule a demo',
        'cta_link' => '#'
      )
    );
  endwhile;
endif;
get_footer();
?>