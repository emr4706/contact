<div class="uk-position-fixed aanmelden">
  <a href="<?php echo e(home_url('/')); ?>bestel-checkon?source=<?php echo get_permalink(); ?>" class="uk-flex uk-flex-center uk-flex-middle">
    <div>
      <i class="icon icon-align icon-register icon-40"></i>
      <span >Bestel nu</span> 
    </div>
  </a>
</div>

<?php if (have_rows('flexible_content')) : ?>

  <?php while (have_rows('flexible_content')) : the_row(); ?>

  <?php if (get_row_layout() == 'header') :
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $image = get_sub_field('image');
  $buttonNaam = get_sub_field('button_naam');
  $link = get_sub_field('link');
  ?>
<header class="gradient" id="gredient2">
	<div class="uk-position-absolute header-background" style="background-image: url(<?= App\asset_path('images/header-layer.png'); ?>);"></div>
  <div class="uk-container uk-position-relative cta" id="ctaContent">
    <div class="uk-flex uk-flex-middle">
      <div class="uk-position-center uk-text-center contentHeaderText">
        <h1><?php echo $title ?></h1>
        <p><?php echo $subtitle ?></p>
        <?php if ($link) : ?>
        <a class="uk-button btn-cta uk-margin-top" href="<?php echo $link['url'] ?>"><?php echo $buttonNaam ?></a>
        <?php endif; ?>
    </div>
    </div>
  </div>
  </div>
</header>
<?php endif; ?>
<?php endwhile; ?>

<?php endif; ?>

