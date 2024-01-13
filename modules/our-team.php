<?php
$members = array(
  array(
    'name' => 'Christian Ferreira',
    'title' => 'CEO & Founder    ',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Christian brings a wide-range of expertise to the team as both a former government contractor as well as proven military leader. He has a strong background in both building and operating businesses as well as developing and architecting next-gen software solutions that revolutionize and disrupt industries.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'John Doe',
    'title' => 'CEO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ),
  array(
    'name' => 'Jane Doe',
    'title' => 'CTO',
    'image' => 'https://placehold.it/1000x1000',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  )
);
?>

<section class="bg-slate-900 py-16">
  <div class="mx-auto flex max-w-7xl p-4 lg:px-8 flex flex-col lg:flex-column">
    <h2 class="text-4xl font-bold text-center mb-8 text-white">Leadership of PSci.AI</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ($members as $member): ?>
        <div class="bg-slate-800 p-8 rounded-lg shadow-md text-center">
          <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>"
            class="w-full h-auto mx-auto mb-4">
          <h2 class="text-2xl font-semibold mb-0 text-center text-white">
            <?php echo $member['name']; ?>
          </h2>
          <p class="text-gray-600 mt-0 mb-4 text-slate-200 text-sm">
            <?php echo $member['title']; ?>
          </p>
          <p class="text-gray-700 text-sm mt-0 mb-0 text-slate-200">
            <?php echo $member['bio']; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>