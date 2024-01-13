<?php
/*
Template Name: Partners
*/
get_header();
if (have_posts()):
  while (have_posts()):
    the_post();

    get_template_part(
      'modules/masthead',
      null,
      array(
        'title' => 'Partnering with leaders in the industry',
        'subtitle' => 'Join forces with the industry’s most disruptive startup, spearheading the new realm of AI. Unlock endless business opportunities as Resellers, Referral Partners, Training Partners, and providers of White-labeled Custom Solutions.',
        'image' => 'https://via.placeholder.com/1200x600',
        'ctas' => array(
          array(
            'title' => 'Schedule a demo',
            'url' => '#',
            'color' => 'indigo'
          ),
          array(
            'title' => 'Become a partner',
            'url' => '#',
            'color' => 'transparent'
          ),

        )
      )
    );
  endwhile;
endif;
?>

<section class="py-4">
  <?php
  $benefits = array(
    'Exclusive Access to Cutting-edge AI Technology',
    'Revenue Sharing Opportunities',
    'Training and Certification Programs',
    'Customizable Solutions',
    'Flexible Partnership Models',
    'Unique Showcase of Your Services To Targeted Audience'
  ); ?>
  <div class="relative max-w-7xl mx-auto flex flex-row">
    <div class="w-1/3">
      <div class="px-6 py-8 text-lg leading-7 text-gray-500">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
          Benefits of Partnering with PSci.ai
        </h2>
        <p class="mt-6 text-xl leading-7 text-gray-500">
          Our training partners are leaders in the industry, providing the best training for the GovCon community.
        </p>
        <a href="" class="mt-8 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Become a partner</a>
      </div>
    </div>
    <div class="w-2/3 bg-slate-800 p-4">
      <?php foreach ($benefits as $benefit): ?>
        <div class="flex flex-row items-center gap-4 py-2 px-4 bg-slate-800">
          <!-- Checkmark -->
          <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 13l4 4L19 7" />
          </svg>
          <p class="text-white">
            <?php echo $benefit; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<?php

$partners = array(
  'lofeld' => array(
    'name' => 'Lohfeld Consulting',
    'logo' => 'https://via.placeholder.com/100x100',
    'url' => '#',
    'description' => 'Lohfeld Consulting provides end-to-end capture and proposal services that increase companies’ win rates.
    Procurement Sciences teamed with Lohfeld Consulting to facilitate and expedite our customers’ integration of AI
    into their captures and proposals. Lohfeld Consulting helps our customers by providing:',
    'benefits' => array(
      'generative-ai-training' => array(
        'title' => 'Generative AI Training',
        'description' => 'Students learn to use AI models and engineer prompts, maintain private data libraries, support captures, and
        respond to government RFPs.'
      ),
      '2' => array(
        'title' => 'GenAI Proposal Development Center (PDC) Access',
        'description' => 'Companies acquire a secure environment to develop proposals using Generative AI with support from capture and proposal professionals.'
      ),
      '3' => array(
        'title' => 'Customized Knowledge Assistants',
        'description' => 'Users query Bidding Intelligence to learn more about Lohfeld Consulting’s best practices, including its Strength-Based Winning® methods.'
      ),
    )
  ),
  'ost' => array(
    'name' => 'OST Global Solutions',
    'logo' => 'https://via.placeholder.com/100x100',
    'url' => '#',
    'description' => 'OST Global Solutions, excels in business development, capture, and proposal consulting, particularly for Federal Government Contractors. They blend deep industry expertise with a strong focus on effective content engagement, detailed analysis, and ongoing professional development. Their key offerings for our partnership include:',
    'benefits' => array(
      '1' => array(
        'title' => 'Training and Certification',
        'description' => 'Comprehensive programs in government contracting processes, with a focus on delivering practical and up-to-date skills.'
      ),
      '2' => array(
        'title' => 'Custom AI Solutions and Assistants',
        'description' => 'Tailored AI tools and support designed to enhance proposal development and project management, ensuring high-quality, efficient outcomes.'
      ),
    )
  )
);

?>

<section class="mx-auto flex max-w-7xl flex-direction-row flex-wrap gap-4 p-4 py-12 rounded-lg">
  <?php
  foreach ($partners as $partner): ?>
    <div class="mb-20">
      <div class="w-full text-center mb-8 mt-4 mx-auto max-w-4xl">
        <h2 class="text-white text-6xl">
          <?php echo $partner['name']; ?>
        </h2>
        <p class="text-slate-400 text-md">
          <?php echo $partner['description']; ?>
        </p>
      </div>
      <div class="flex flex-row gap-4">
        <div class="w-1/2 pr-4">
          <img src="https://placehold.it/1000x1000" alt="Placeholder" />
        </div>
        <div class="w-1/2 pl-4">
          <?php foreach ($partner['benefits'] as $benefit): ?>
            <div class="py-4 border-t border-gray-200">
              <h3 class="text-2xl font-extrabold mt-0 text-white">
                <?php echo $benefit['title']; ?>
              </h3>
              <p class="text-slate-400 text-base">
                <?php echo $benefit['description']; ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  <?php endforeach; ?>˝
</section>


<?php

get_template_part(
  'modules/centered-banner',
  null,
  array(
    'title' => 'Become a partner',
    'subtitle' => 'Join forces with the industry’s most disruptive startup, spearheading the new realm of AI. Unlock endless business opportunities as Resellers, Referral Partners, Training Partners, and providers of White-labeled Custom Solutions.',
    'image' => 'https://via.placeholder.com/1200x600',
    'cta' => 'Become a partner',
    'cta_link' => '#',
  )
);

get_footer();