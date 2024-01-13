<?php

$title = $args['title'];
$subtitle = $args['subtitle'];

$testimonials = array(
  array(
    'name' => 'Sheryl Berge',
    'title' => 'CEO at Lynch LLC',
    'quote' => 'TaxPal is so easy to use I can’t help but wonder if it’s really doing the things the government expects me to do.',
    'image' => 'https://placehold.it/1000x1000'
  ),
  array(
    'name' => 'Amy Hahn',
    'title' => 'Director at Velocity Industries',
    'quote' => 'I’m trying to get a hold of someone in support, I’m in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.',
    'image' => 'https://placehold.it/1000x1000'
  ),
  array(
    'name' => 'Leland Kiehn',
    'title' => 'Founder of Kiehn and Sons',
    'quote' => 'The best part about TaxPal is every time I pay my employees, my bank balance doesn’t go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.',
    'image' => 'https://placehold.it/1000x1000'
  ),
  array(
    'name' => 'Erin Powlowski',
    'title' => 'COO at Armstrong Inc',
    'quote' => 'There are so many things I had to do with my old software that I just don’t do at all with TaxPal. Suspicious but I can’t say I don’t love it.',
    'image' => 'https://placehold.it/1000x1000'
  ),
  array(
    'name' => 'Sheryl Berge',
    'title' => 'CEO at Lynch LLC',
    'quote' => 'TaxPal is so easy to use I can’t help but wonder if it’s really doing the things the government expects me to do.',
    'image' => 'https://placehold.it/1000x1000'
  ),
  array(
    'name' => 'Amy Hahn',
    'title' => 'Director at Velocity Industries',
    'quote' => 'I’m trying to get a hold of someone in support, I’m in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.',
    'image' => 'https://placehold.it/1000x1000'
  ),
);

?>



<section id="testimonials" aria-label="What our customers are saying" class="bg-slate-900 py-20 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl md:text-center">
      <h2 class="font-display text-3xl tracking-tight text-slate-100 sm:text-4xl">
        <?php echo $title; ?>
      </h2>
      <p class="mt-4 text-lg tracking-tight text-slate-100">
        <?php echo $subtitle; ?>
      </p>
    </div>
    <ul role="list"
      class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-2">
      <?php
      foreach ($testimonials as $testimonial) {
        $name = $testimonial['name'];
        $title = $testimonial['title'];
        $quote = $testimonial['quote'];
        $image = $testimonial['image'];
        ?>
        <li class="col-span-1 flex flex-col text-center bg-slate-800 rounded-lg shadow-lg overflow-hidden">
          <div class="flex-1 p-6 flex flex-col justify-between">
          <p class="ml-3 text-xl text-slate-400">
                "<?php echo $quote; ?>"
              </p>
            <div class="flex-1">
              <img class="w-12 h-12 flex-shrink-0 mx-auto bg-black rounded-full"
                src="<?php echo $image; ?>" alt="">
              <h3 class="mt-6 text-slate-100 text-2xl font-medium">
                <?php echo $name; ?>
              </h3>
              <dl class="mt-1 flex-grow flex flex-col justify-between">
                <dt class="sr-only">
                  <?php echo $title; ?>
                </dt>
                <dd class="text-slate-200 text-sm">
                  <?php echo $title; ?>
                </dd>
              </dl>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</section>