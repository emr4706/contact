<?php if (have_rows('flexible_content')) : ?>

<?php while (have_rows('flexible_content')) : the_row(); ?>

<?php if (get_row_layout() == 'band_home') :
$list = get_sub_field('list');
?>
<section class="bandMobile">
  <div class="uk-container uspHome rounded">
    <ul class="uk-column-1-2@m uk-margin-left">
      <?php foreach ($list as $item) :
				$title = $item['title'];
				$text = $item['text'];
			?>
				<li>
					<h3>
						<i class="icon icon-align icon-usp"></i>
						<?php echo $title; ?>
					</h3>
						<?php echo $text; ?>    
				</li>
			<?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'functionaliteiten') :
$title = get_sub_field('title');
?>
<section class="uk-section functionality rounded">
	<div class="uk-container">
		<?php
			$wp_query = new WP_Query(
				[
					'post_type' => array('functionaliteiten'),
					'posts_per_page' => 9,
					'orderby' => 'date',
					'order' => 'DESC',
				]
			);
		?>
		<?php if ( $wp_query->have_posts() ) : ?>
			<h2 class="uk-text-center"><?php echo $title ?></h2>
			<div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1" uk-grid>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div>
					<?php
					$image = get_field('afbeelding');
					if( !empty( $image ) ): ?>
					<div style="overflow: hidden;padding-bottom: 40px;">
						<div class="uk-text-center image">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-img />
						</div>
					</div>
					<?php endif; ?>
					<h3><?php the_field('titel'); ?></h3>
					<?php the_field('tekst'); ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>


<?php if (get_row_layout() == 'integraties') :
$title = get_sub_field('title');
$text = get_sub_field('subtitle');
$logos = get_sub_field('logos');
?>
<section class="uk-section integrations gradient rounded">
	<div class="uk-position-absolute background-top" style="background-image: url(<?= App\asset_path('images/background-top.png'); ?>);"></div>
	<div class="uk-position-absolute background-bottom" style="background-image: url(<?= App\asset_path('images/background-bottom.png'); ?>);"></div>
	<div class="uk-container content">
    <?php
    $wp_query = new WP_Query(
      [
        'post_type' => array('integraties'),
        'posts_per_page' => 20,
        'orderby' => 'date',
        'order' => 'DESC',
      ]
    );
    ?>
    <?php if ( $wp_query->have_posts() ) : ?>
    <div class="integratiText">
		<h2 class="uk-text-center"><?php echo $title ?></h2>
    <p class="uk-margin-large-bottom" ><?php echo $text ?></p>
  </div>
     <ul id="datalist" class="datalist">
		<div  class="uk-child-width-1-4@m uk-child-width-1-1 uk-grid-small" uk-grid>
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
       <li class="integratieList">
        <?php $coming = get_field('coming_soon');?>
        <?php if ($coming == "ja") : ?>
			<div class=" uk-text-center uk-margin-medium-bottom" style="position: relative" >
        <?php
        $image = get_field('afbeeldingx');
        if( !empty( $image ) ): ?>
        
        <div class="imgwrapper" >
          <img   src="<?php echo $image['url']; ?>" alt="">
        </div>
          <?php endif; ?>
          <div class="uk-margin-left uk-margin-right">
				<h3><?php the_field('titel'); ?></h3>
          <p><?php the_field('tekst'); ?></p>
        </div>
        <div id="text">
          <p>Coming soon!</p>
        </div>
      </div>
      <?php else: ?>
			<div class=" uk-text-center uk-margin-medium-bottom" >
        <?php
        $image = get_field('afbeeldingx');
        if( !empty( $image ) ): ?>
        
        <div class="imgwrapper"  >
          <img   src="<?php echo $image['url']; ?>" alt="">
        </div>
          <?php endif; ?>
          <div class="uk-margin-left uk-margin-right">
				<h3><?php the_field('titel'); ?></h3>
          <p><?php the_field('tekst'); ?></p>
        </div>
      </div>
      <?php endif; ?>
     </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
		</div>
      <?php endif; ?>
     </ul>
  </div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'medewerkers') :
$title = get_sub_field('title');
$logos = get_sub_field('logos');
?>
<section class="uk-section logos rounded">
	<div class="uk-container uk-margin-large-top ">
		<h2 class="uk-text-center uk-margin-large-bottom"><?php echo $title ?></h2>
		<div uk-slider="uk-slider">
			<div class="uk-position-relative">
				<div class="uk-slider-container">
					<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-child-width-1-2@s  uk-grid">
            <?php foreach ($logos as $logo) :
            $logo = $logo['logo'];
            ?>
            <li>
							<img src="<?php echo $logo['url']; ?>" alt="">
						</li>
              <?php endforeach; ?>
					</ul>
				</div>
					<a class="uk-position-center-left-out uk-position-small" style="text-decoration: none"; href="#"  uk-slider-item="previous">
            <i class="icon icon-align icon-bullet-left icon-40"></i>
          </a>
          </a>
          <a class="uk-position-center-right-out uk-position-small" style="text-decoration: none"; href="#" uk-slider-item="next">
            <i class="icon icon-align icon-bullet-right icon-40"></i>
          </a>
			</div>
			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top uk-margin-large-bottom"></ul>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'testimonial') :
$title = get_sub_field('title');
$berichten = get_sub_field('berichten');
?>
<section class="uk-section testimonials rounded" id="cdc">
	<div class="uk-position-absolute background-top" style="background-image: url(files/themes/siyou/dist/images/background-top.png)"></></div>
	<div class="uk-position-absolute background-bottom" style="background-image: url(files/themes/siyou/dist/images/background-bottom.png)"></div>
	<div class="uk-container content uk-margin-large-bottom">
		<h2 class="uk-text-center"><?php echo $title; ?></h2>
		<div class="uk-position-relative">
			<div class="uk-position-absolute comment">
				<div uk-slider>
					<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
						<ul class="uk-slider-items uk-child-width-1-1">
              <?php foreach ($berichten as $bericht) :
              $naam_achternaam = $bericht['naam_achternaam'];
              $bedrijfsnaam = $bericht['bedrijfsnaam'];
              $text = $bericht['bericht_text'];
              ?>
							<li>
								<p>
                  <?php echo $text; ?>
                </p>
                <br>
								<p class="author uk-margin-small-top">- <?php echo $naam_achternaam; ?>, <?php echo $bedrijfsnaam; ?></p>
							</li>
                <?php endforeach; ?>
						</ul>
					</div>
					<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
				</div>
			</div>
			<img data-src="<?= App\asset_path('images/phonex.png'); ?>" uk-img />
		</div>
	</div>
</section>

<section class="uk-section testimonials rounded" id="cdcMobile">
	<div class="uk-position-absolute background-top"></div>
	<div class="uk-position-absolute background-bottom"></div>
	<div class="uk-container content uk-margin-large-bottom">
		<h2 class="uk-text-center"><?php echo $title; ?></h2>
			<div class=" comment">
				<div uk-slider>
					<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
						<ul class="uk-slider-items uk-child-width-1-1">
              <?php foreach ($berichten as $bericht) :
              $naam_achternaam = $bericht['naam_achternaam'];
              $bedrijfsnaam = $bericht['bedrijfsnaam'];
              $text = $bericht['bericht_text'];
              ?>
							<li>
								<p>
                  <?php echo $text; ?>
                </p>
                <br>
								<p class="author uk-margin-small-top">- <?php echo $naam_achternaam; ?>, <?php echo $bedrijfsnaam; ?></p>
							</li>
                <?php endforeach; ?>
						</ul>
					</div>
					<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
				</div>
			</div>
	</div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'meer_fonctionaliteiten_nodig?') :
$title = get_sub_field('title');
$link = get_sub_field('link');
$buttonNaam = get_sub_field('button_naam');
?>
<section class="uk-section gradient register rounded" id="registerHight">
	<div class="uk-container">
		<div class="uk-child-width-expand@s uk-child-width-1-1 uk-margin-large-top uk-margin-large-bottom" uk-grid>
     
			<div class="uk-flex uk-flex-middle uk-text-center">
        <div class="cta-text"><?php echo $title ?><br><img data-src="<?= App\asset_path('images/arrov_meer.png'); ?>" alt="" uk-img /><br>
          <a class="uk-button btn-cta uk-margin-small-top" href="<?php echo $link['url']; ?>"><?php echo($buttonNaam); ?></a>
        </div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>



<script>
  $(function () {
    $('#span').click(function () {
      $('#datalist li:hidden').slice(0, 4).show();
      if ($('#datalist li').length == $('#datalist li:visible').length) {
        document.getElementById("melding").style.visibility = "hidden";
      }
      return false;
    });
  });
</script>
