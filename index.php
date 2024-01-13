<?php
get_header();
get_template_part(
  'modules/masthead',
  null,
  array(
    'title' => 'Cutting-Edge AI Solutions for Government Contracting',
    'subtitle' => 'PSci.AI specializes in using cutting-edge AI to help businesses excel in obtaining government contracts. Our technology offers practical solutions and key insights, making us a reliable ally across various sectors.',
    'image' => 'https://tailwindui.com/img/component-images/dark-project-app-screenshot.png',
    'ctas' => array(
      array(
        'title' => 'Schedule a demo',
        'url' => '#',
        'color' => 'indigo'
      ),
      array(
        'title' => 'Learn more',
        'url' => site_url() . '/solutions',
        'color' => 'transparent'
      )
    )
  )
);

get_template_part('modules/stats');

?>

<section class="bg-slate-900 py-16">
  <div class="mx-auto flex max-w-7xl items-center p-4 lg:px-8 flex flex-col lg:flex-column justify-between">
    <h4 class="text-md font-light text-slate-400">
      A New Era of Winning Contracts
    </h4>
    <div class="max-w-4xl text-center">
      <h1 class="text-4xl font-bold text-white mt-8 mb-4">
        The #1 AI-Powered Capture & Proposal Solution
      </h1>
      <p class="text-gray-300 mt-2">
        Our Bidding Intelligence System is the first of its kind: an AI-powered, end-to-end automation system for
        capture, proposal, and business development. Originally designed specifically for government contractors, we
        have since broadened our expertise to support commercial contractors, academic institutions, non-profits, and a
        diverse range of other businesses. Our goal is to harness the continuous breakthroughs in AI, enabling teams to
        work more intelligently. This not only prevents burnout but also reduces unnecessary stress, empowering teams to
        work smarter, not harder.
      </p>
    </div>

    <?php
    $list_items = array('Request for Proposals (RFPs)', 'Request for Information (RFIs)', 'Request for Quotation (RFQs)', 'Due Diligence Questionnaires (DDQs)', 'Task Order Responses', 'Source Sought Responses', 'Grant Proposals', 'Security Questionnaires');
    ?>

    <div class="grid grid-cols-3 gap-8 mt-16">
      <!-- grid items -->
      <?php foreach ($list_items as $item) { ?>
        <div class="flex items-center mt-8">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <h5 class="text-lg leading-6 font-medium text-white">
              <?php echo $item; ?>
            </h5>
          </div>
        </div>
      <?php } ?>
    </div>
</section>


<?php
get_template_part('modules/logo-wall');

$solutions = get_posts(
  array(
    'post_type' => 'solution',
    'posts_per_page' => -1
  )
);

$solution_columns = array();
foreach ($solutions as $solution) {
  $masthead = get_field('masthead', $solution->ID);
  $masthead_content = $masthead['masthead_content'];

  $solution_columns[] = array(
    'title' => $solution->post_title,
    'subtitle' => (strlen($masthead_content) > 200) ? substr($masthead_content, 0, 200) . '...' : $masthead_content,
    'url' => get_permalink($solution->ID)
  );
}

get_template_part(
  'modules/three-column-with-icons',
  null,
  array(
    'title' => 'AI-Enabled Solutions through our Awarded.AI Platform',
    'subtitle' => 'Our AI-enabled solutions help you win more contracts, respond to more opportunities, and empower your workforce securely and effectively.',
    'columns' => $solution_columns
  )
);

get_template_part(
  'modules/split-with-image',
  null,
  array(
    'title' => 'We Are Committed to Innovation',
    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'image' => 'https://placehold.it/1000x1000',
    'ctas' => array(
      array(
        'title' => 'Meet our team',
        'url' => '/company',
        'color' => 'indigo'
      ),
    )
  )
);

get_template_part('modules/latest-articles'); 


get_template_part(
  'modules/split-with-image',
  null,
  array(
    'title' => 'Partnering with leaders in the industry',
    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'image' => 'https://placehold.it/1000x1000',
    'ctas' => array(
      array(
        'title' => 'Learn more about our partners',
        'url' => site_url() . '/partners',
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
get_template_part(
  'modules/centered-banner',
  null,
  array(
    'title' => 'Get Started Today',
    'subtitle' => "It's time to unlock the power of AI for your business. Give your team the tools they need to win more contracts, respond to more opportunities, and empower your workforce securely and effectively.",
    'cta' => 'Get started',
    'cta_link' => '#'
  )
);
get_footer();