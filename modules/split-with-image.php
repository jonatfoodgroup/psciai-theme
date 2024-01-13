<?php 

$title = $args['title'];
$heading = $args['heading'] ?? null;
$subtitle = $args['subtitle'];
$ctas = (isset($args['ctas'])) ? $args['ctas'] : null;
$image = (isset($args['image'])) ? $args['image'] : null;
$alignment = $args['alignment'] ?? 'left';

?>
<div class="relative bg-slate-900 pt-16 pb-32 overflow-hidden fade-in">
  <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
    <div class="px-6 lg:col-span-7 lg:px-0 xl:col-span-6">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h3 class="text-base font-semibold leading-6 text-slate-100"><?php echo $heading; ?></h3>
        <h1 class="mt-24 text-2xl font-bold tracking-tight text-white sm:mt-10 sm:text-6xl"><?php echo $title; ?></h1>
        <p class="mt-6 text-lg leading-8 text-slate-400">
          <?php echo $subtitle; ?>
        </p>
        <div class="mt-10 flex items-center gap-x-6">
          <?php
          if ($ctas) {
            foreach ($ctas as $cta) {
              $title = $cta['title'];
              $url = $cta['url'];
              $color = $cta['color'];
              ?>
              <a href="<?php echo $url; ?>" class="rounded-md bg-<?php echo $color; ?>-600 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-<?php echo $color; ?>-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-<?php echo $color; ?>-600"><?php echo $title; ?></a>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="relative lg:col-span-5 xl:col-span-6">
      <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
        <div class="relative block w-full overflow-hidden rounded-lg">
          <?php if ($image) { ?>
            <img src="<?php echo $image; ?>" alt="" class="w-full" />
          <?php } else {
            echo '<div class="w-full h-96 bg-indigo-100"></div>';
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>
