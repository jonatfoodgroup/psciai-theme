<?php

// Get the header menu 
$menu = wp_get_nav_menu_items('header-menu');

?>

<header class="border-b border-gray-500 bg-slate-900">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="<?php echo site_url(); ?>" class="-m-1.5 p-1.5">
        <img src="https://procurementsciences.com/wp-content/uploads/2023/08/cropped-PSciAI-Black1-1024x533.png" class="h-16"
          alt="Awarded.AI" />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <button type="button" class="flex items-center gap-x-1 text-md font-semibold leading-6 text-slate-100"
        aria-expanded="false" data-menu="solutions">
        Platform
        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </button>
      <a href="<?php echo site_url(); ?>/company" class="text-md font-semibold leading-6 text-slate-100">Company</a>      

      <a href="<?php echo site_url(); ?>/partners" class="text-md font-semibold leading-6 text-slate-100">Partners</a>

      <!-- Resources -->
      <button type="button" class="flex items-center gap-x-1 text-md font-semibold leading-6 text-slate-100"
        aria-expanded="false" data-menu="insights">
        Resources
        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </button>
      <!-- End resources -->

    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      
      <a href="<?php echo site_url(); ?>/contact-us" class="text-sm font-semibold leading-6 text-gray-100  px-6 py-2">Contact Us</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-100 bg-indigo-500 hover:bg-indigo-600 px-6 py-2">Log in<span
          aria-hidden="true">&rarr;</span></a>

    </div>
  </nav>
  <?php get_template_part('modules/mobile'); ?>
  <div class="mega-menu bg-slate-700">
    <div class="mx-auto flex max-w-7xl p-4 lg:px-8" aria-label="Global">
      <?php
      $menu_items = wp_get_nav_menu_items('header-menu');

      // Group menu items by their parent ID
      $menu = array();
      foreach ($menu_items as $item) {
        $menu[$item->menu_item_parent][] = $item;
      }

      // Loop through the top-level menu items
      foreach ($menu[0] as $parent_item) {
        echo '<div class="interior-menu" id="' . esc_attr($parent_item->post_name) . '-menu">';
        echo '<div class="flex items-start justify-between">';
        echo '<div>';
        echo '<h4 class="text-xl font-bold mt-0 text-white mb-4">' . esc_html($parent_item->title) . '</h4>';

        if (isset($menu[$parent_item->ID])) {
          echo '<ul>';
          foreach ($menu[$parent_item->ID] as $child_item) {
            echo '<li class="mb-2">';
            echo '<a href="' . esc_url($child_item->url) . '" class="text-slate-400 hover:text-white text-xl">' . esc_html($child_item->title) . '</a>';
            echo '</li>';
          }
          echo '</ul>';
        }
        echo '</div>';
        ?>

        <?php if ($parent_item->post_name == 'solutions'): ?>

        <?php endif; ?>

        <?php
        echo '</div>';
        echo '</div>';
      }
      ?>
      <div id="insights-menu" class="interior-menu">
        <?php get_template_part('modules/header/resources'); ?>
      </div>
    </div>

  </div>
</header>