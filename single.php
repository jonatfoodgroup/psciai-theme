<?php

get_header();
if (have_posts()):
  while (have_posts()):
    the_post();
    $title = get_the_title();
    $link = get_the_permalink();
    $content = get_the_content();
    $excerpt = get_the_excerpt();
    $date = get_the_date();
    $image = 'https://placehold.it/1200x600';
    $category = get_the_category();
    $category_link = get_category_link($category[0]->term_id);
    $category_name = $category[0]->name;
    $author = get_the_author();
    $author_link = get_author_posts_url(get_the_author_meta('ID'));

    ?>
    <section class="bg-slate-800 py-8 pb-16">
      <div class="mx-auto flex max-w-7xl items-start p-4 lg:px-8 flex-direction-row flex-wrap">
        <div class="text w-full lg:w-2/3 lg:pr-8">
          <h4 class="text-sm font-light text-gray-400 text-uppercase">
            <a class="text-gray-100" href="<?php echo site_url() . '/category/' . $category[0]->slug; ?>">
              <?php echo $category[0]->name; ?>
            </a> /
            <?php echo $title; ?>
          </h4>

          <h1 class="text-6xl font-bold text-white mt-16 mb-4">
            <?php echo $title; ?>
          </h1>
          <!-- Author -->
          <div class="flex items-center gap-x-4 mb-4 mt-8">
            <div class="w-1/4 max-w-16">
              <img src="https://placehold.it/128x128" alt="<?php echo $author; ?>"
                class="h-16 w-16 rounded-full object-cover" />
            </div>
            <div class="w-3/4">
              <h4 class="text-lg font-bold text-slate-200">
                <a href="<?php echo $author_link; ?>">
                  <?php echo $author; ?>
                </a>
              </h4>
              <p class="text-sm text-slate-400">
                <?php echo $date; ?>
              </p>
            </div>
          </div>
          <!-- End Author -->
          <!-- <p class="text-gray-300 mt-2">
            <?php echo $excerpt; ?>
          </p> -->
        </div>
        <div class="image w-full lg:w-1/3">
          <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>"
            class="rounded-lg shadow-lg h-96 w-full object-cover" />
        </div>
      </div>
    </section>


    <div class="flex max-w-7xl p-4 lg:px-8 flex-direction-row flex-wrap mx-auto mt-8">
      <div class="w-full lg:w-2/3 main-content">
        <article>
          <?php echo $content; ?>
        </article>
      </div>
      <div class="w-full lg:w-1/3 sidebar lg:px-8">
        <?php get_sidebar(); ?>
      </div>

    </div>
    <?php get_template_part(
      'modules/related-posts',
      'post',
      array(
        'count' => 3
      )
    ); ?>
  <?php endwhile; endif; ?>

<?php
get_template_part(
  'modules/centered-banner',
  null,
  array(
    'title' => 'Don\'t let your team get left behind.',
    'subtitle' => "It's time to unlock the power of AI for your business. Give your team the tools they need to win more contracts, respond to more opportunities, and empower your workforce securely and effectively.",
    'cta' => 'Get started',
    'cta_link' => '#'
  )
);
?>
<?php get_footer(); ?>