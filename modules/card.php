<?php
// Data
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$image = $args['image'] ?? '';
$cta = $args['cta'] ?? '';
$permalink = $args['permalink'] ?? '';
$class = $args['class'] ?? '';
$badge = $args['badge'] ?? false;
$badge_link = $args['badge_link'] ?? false;

// Options
$align = $args['align'] ?? 'left';
?>

<div class="card <?php echo $class; ?>">

  <?php if ($image) { ?>
    <div class="card__image">
      <a href="<?php echo $permalink; ?>"><img src="<?php echo $image; ?>" alt=""></a>
    </div>
  <?php } ?>

  <div class="card__content">

    <a href="<?php echo $permalink; ?>" class="link">
      <h4 class="card__title text--proper-casing">
        <?php echo $title; ?>
      </h4>
    </a>
    <div class="card__text">
      <?php echo $content; ?>
    </div>

    <?php if ($cta) { ?>
      <a href="<?php echo $permalink; ?>" class="card__cta">
        <?php echo $cta; ?>
      </a>
    <?php } ?>
  </div>
</div>