<section class="bg-slate-900 py-16">
  <div class="mx-auto flex max-w-7xl items-start">
    <?php $stats = array(
      array(
        'stat' => '90%',
        'title' => 'Time Savings',
        'subtitle' => 'Our AI creates massive time savings for our customers, allowing them to focus more on fine-tuning proposals and pursuing additional opportunities.',
        'icon' => 'https://placehold.it/100x100'
      ),
      array(
        'stat' => '8x',
        'title' => 'RFP Responses',
        'subtitle' => 'Our AI allows our customers to respond to a significantly higher number of RFPs by adding huge efficiencies across the end-to-end capture process.',
        'icon' => 'https://placehold.it/100x100'
      ),
      array(
        'stat' => '35%',
        'title' => 'Win More Bonuses',
        'subtitle' => 'Our AI enables customers to quickly identify opportunities that align with their core competencies and craft data-driven proposals, significantly boosting their win rates.',
        'icon' => 'https://placehold.it/100x100'
      ),
    ); ?>

    <div class="grid grid-cols-3 gap-8 mt-4">
      <!-- grid items -->
      <?php foreach ($stats as $stat) { ?>
        <div class="flex items-center text-center mt-8 bg-slate-800 p-8 rounded-lg shadow-lg">
          <div class="mt-0">
            <h3 class="text-6xl font-light text-white mb-4 mt-0">
              <?php echo $stat['stat']; ?>
            </h3>
            <h5 class="text-2xl leading-6 font-medium text-white mb-2">
              <?php echo $stat['title']; ?>
            </h5>
            <p class="mt-2 text-base text-slate-400">
              <?php echo $stat['subtitle']; ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>
      </div>
</section>