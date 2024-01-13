<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$columns = $args['columns'];
?>

<div class="bg-slate-900 py-16 sm:py-16">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="text-base font-semibold leading-7 text-slate-400">AI-Enabled Solutions</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">
        <?php echo $title; ?>
      </p>
      <p class="mt-6 text-lg leading-8 text-slate-400">
        <?php echo $subtitle; ?>
      </p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-12 lg:max-w-none">
      <div
        class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-4">
        <?php

        if (!empty($columns)) {
          foreach ($columns as $column) {
            $column_title = $column['title'];
            $column_subtitle = $column['subtitle'];
            $column_url = $column['url'] ?? null;
            ?>

            <div class="flex flex-col bg-slate-800 p-4 rounded-lg shadow-lg group-hover:text-slate-200 hover:shadow-2xl transition duration-300 ease-in-out hover:bg-slate-900">
              <?php if (!empty($column_url)) { ?>
                <a href="<?php echo $column_url; ?>" class="mt-2">
                <?php } ?>
                <h4 class="text-2xl leading-6 font-bold text-white">
                  <?php echo $column_title; ?>
                </h4>
                <?php if (!empty($column_url)) { ?>
                </a>
              <?php } ?>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7">
                <p class="flex-auto text-slate-400 text-base">
                  <?php echo $column_subtitle; ?>
                </p>
              </dd>
              <!-- if url exists -->
              <?php if (!empty($column_url)) { ?>
                <a href="<?php echo $column_url; ?>" class="mt-2 text-slate-100 text-md font-semibold">
                  Learn about <?php echo $column_title; ?>
                  <span aria-hidden="true" class="text-slate-400">&rarr;</span>
                </a>
              <?php } ?>
            </div>

            <?php
          }
        }

        ?>

      </div>
    </div>
  </div>
</div>