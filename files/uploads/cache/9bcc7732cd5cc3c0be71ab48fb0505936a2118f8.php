<div class="uk-position-fixed aanmelden">
  <a href="" class="uk-flex uk-flex-center uk-flex-middle">
    <div>
      <i class="icon icon-align icon-register icon-40"></i>
      <span >Aanmelden</span> 
    </div>
  </a>
</div>

<?php if (have_rows('flexible_content')) : ?>

  <?php while (have_rows('flexible_content')) : the_row(); ?>

  <?php if (get_row_layout() == 'header') :
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $image = get_sub_field('image');
  ?>
<header class="gradient" id="gredient2">
	<div class="uk-position-absolute header-background" style="background-image: url(<?= App\asset_path('images/header-layer.png'); ?>);"></div>
  <div class="uk-container uk-position-relative cta" id="ctaContent">
    <div class="uk-flex uk-flex-middle">
      <div class="uk-position-center uk-text-center contentHeaderText">
        <h1><?php echo $title ?></h1>
        <p><?php echo $subtitle ?></p>
        <a class="uk-button btn-cta uk-margin-top" href="<?php echo e(home_url('/')); ?>registereren?source=<?php echo get_permalink(); ?>">Call 2 action</a>
      </div>
    </div>
  </div>
  </div>
</header>
<?php endif; ?>
<?php endwhile; ?>

<?php endif; ?>

