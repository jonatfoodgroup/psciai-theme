<?php get_header();
// Assign the posts to a variable
$posts = get_posts(
  array(
    'post_type' => 'solution',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  )
);

$title = 'AI-Driven Success in Government Contracting';

get_template_part(
  'modules/masthead',
  null,
  array(
    'title' => $title,
    'subtitle' => 'Win More Government Contracts with Less Effort.',
    'ctas' => array(
      array(
        'title' => 'Schedule a Demo',
        'url' => '#',
        'color' => 'indigo'
      ),
      array(
        'title' => 'How does it work?',
        'url' => '#',
        'color' => 'white'
      )
    )
  )
);
?>

<section class="py-4 text-center fade-in">
  <!-- Mission statement block -->
  <div class="relative bg-slate-900">
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
      <div class="px-6 py-8 text-lg leading-7 text-gray-500 sm:px-6 lg:py-24 lg:px-8 lg:col-span-5 xl:pr-12">
        <p class="mt-6 text-2xl text-white">
          Awarded.AI stands at the forefront of innovation in government contracting, meticulously designed to cater to
          the unique challenges and opportunities in this sector. Our platform is a testament to creative solutions and
          rigorous feature development, always evolving with direct input from our users. We're committed to
          understanding the nuances of your needs, ensuring that every update and every new tool within Awarded.AI not
          only meets but anticipates your requirements. This continuous pursuit of excellence, powered by your
          invaluable feedback, makes Awarded.AI an indispensable ally in navigating the complex landscape of government
          contracts. </p>
      </div>
    </div>
  </div>
</section>


<?php if (have_posts()):
  while (have_posts()):
    the_post();
    $title = get_the_title();
    $masthead = get_field('masthead', get_the_ID());
    $masthead_title = $masthead['masthead_title'];
    $masthead_content = $masthead['masthead_content'];

    get_template_part(
      'modules/split-with-image',
      null,
      array(
        'heading' => $title,
        'title' => $masthead_title,
        'subtitle' => $masthead_content,
        'image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
        'ctas' => array(
          array(
            'title' => 'Learn about ' . $title,
            'url' => get_permalink(get_the_ID()),
            'color' => 'indigo'
          ),
        )
      )
    );
  endwhile;
endif; ?>

<?php
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
?>
<?php get_footer(); ?>