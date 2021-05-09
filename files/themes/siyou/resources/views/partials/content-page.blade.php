<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'band_pricing') :
  $someonebusinessTitle= get_sub_field('someone_business_title');
  $grotesomeoneTitle= get_sub_field('grote_someone_title');
  $maandelijks= get_sub_field('maandelijks');
  $jaarlijks= get_sub_field('jaarlijks');
  $businessPrice= get_sub_field('business_price');
  $someonePrice= get_sub_field('grote_someone_price');
  $businessLijst= get_sub_field('business_list');
  $someoneLijst= get_sub_field('grote_someone_list');
  $link= get_sub_field('link');
  ?>
<section class="uk-section">
  <div class="uk-container ">
    <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-text-center" id="pricingrid" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-margin-medium uk-card-body uspPricing rounded">
          <p class="textPrice"><?php echo $maandelijks; ?></p>
          
         <div class="uk-container titlePricingCard uk-margin-top" >
           <h2 ><?php echo $someonebusinessTitle; ?></h2>
         </div>
          <h2 id="price"> <span>€</span><?php echo $businessPrice; ?>,-</h2>
          <p>ex btw per maand</p>

          <ul class="uk-text-left uk-margin-medium-top">
            <?php foreach ($businessLijst as $item) :
            $item = $item['item'];
            ?>
            <li class="priceLijs">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 21.035l-9-8.638 2.791-2.87 6.156 5.874 12.21-12.436 2.843 2.817z"/></svg> <?php echo $item; ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom uk-margin-small-top btn-business" href="<?php echo $link['url']; ?>" >BESTELLEN</a>
        </div>
      </div>

      <div>
        <div class="uk-card uk-card-default uk-margin-medium uk-card-body uspPricing rounded" id="uspPricing2">
          <p class="textPrice"><?php echo $maandelijks; ?></p>
          <div class="uk-container titlePricingCard2 uk-margin-top" >
            <h2 ><?php echo $grotesomeoneTitle; ?></h2>
          </div>
          <div class="uk-container left2"></div>
          <div class="uk-container right2"></div>
          <h2 id="price"><span>€</span><?php echo $someonePrice; ?>,-</h2>
          <p>ex btw per maand</p>

          <ul class="uk-text-left uk-margin-medium-top">
            <?php foreach ($someoneLijst as $item) :
            $item = $item['item'];
            ?>
            <li class="priceLijs">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 21.035l-9-8.638 2.791-2.87 6.156 5.874 12.21-12.436 2.843 2.817z"/></svg> <?php echo $item; ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom uk-margin-small-top btn-someone" href="<?php echo $link['url']; ?>">BESTELLEN</a>

        </div>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'band_contact') :
  $adres = get_sub_field('adres');
  $telefoon = get_sub_field('telefoon');
  $email = get_sub_field('email');
  ?>
<section class="bandMobile">
  <div class="uk-container uspContact rounded">
    <ul class="uk-column-1-3@m uk-margin-top uk-margin-bottom ulContact">
      <li class="uk-text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
        <h3>Adres</h3>
        <?php echo $adres ?>
      </li>
      <li class="uk-text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
        <h3>Telefoon</h3>
        <a href="callto:<?php echo $telefoon; ?>"> <?php echo $telefoon; ?></a>
      </li>
      <li class="uk-text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
        <h3>E-mailadres</h3>
            E-mail: <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a>
      </li>

    </ul>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'band_registreren') :
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $form = get_sub_field('form');
  ?>
<section class="bandMobile">
  <div class="uk-container uspRegister rounded">
    <div class="uk-container uk-text-center">
    <h2 id="textForm"><?php echo $title ?></h2>
      <p class="uk-margin-bottom"><?php echo $text ?></p>
    </div>
    <div class="uk-container" id="form">
      <?php echo $form ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'contact') :
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $form = get_sub_field('form');
  ?>
<section class="uk-section rounded">
  <div class="uk-container ContactContainer">
    <h2 class="uk-text-center"><?php echo $title ?></h2>
    <p><?php echo $text ?></p>
    <div class="uk-container formContainer">
      <?php echo $form ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'content') :
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  ?>
<section class="uk-section rounded">
  <div class="uk-container ContactContainer">
    <h2 class="uk-text-center"><?php echo $title ?></h2>
    <p><?php echo $text ?></p>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('flexible_content')) : ?>
<?php while (have_rows('flexible_content')) : the_row(); ?>
<?php if (get_row_layout() == 'pricing') :
$title = get_sub_field('title');
$businessTitle = get_sub_field('business_title');
$groteSomeoneTitle = get_sub_field('grote_someone_title');
$features = get_sub_field('features');
?>
<section class="uk-section testimonials  rounded">
  <div class="uk-position-absolute background-top" style="background-image: url(@asset('images/background-top.png'));"></div>
	<div class="uk-position-absolute background-bottom" style="background-image: url(@asset('images/background-bottom.png'));"></div>
<div class="uk-container content uk-margin-large-bottom">
		<h2 class="uk-text-center uk-margin-medium-bottom"><?php echo $title ?></h2>
		<table class="uk-table uk-table-small uk-table-divider">
      <thead>
          <tr>
              <th></th>
              <th class="uk-text-center"><?php echo $businessTitle ?></th>
              <th class="uk-text-center"><?php echo $groteSomeoneTitle ?></th>
          </tr>
      </thead>
      <?php foreach ($features as $feature) :
            $fetuareNaam = $feature['feature_name'];
            $fetuareBusiness = $feature['feature_business'];
            $fetuareGroteSomeone = $feature['feature_someone'];
            $comingSoon = $feature['coming_soon'];
            ?>
      <tbody class="dataContainer ">
          <tr id="tableData">
            <?php if ($comingSoon == "ja") : ?>
              <td class="dataNaamSoon"><img data-src="@asset('images/coming-soon-features.png')" uk-img alt=""><span>Coming soon!</span> <p id="soon"><?php echo $fetuareNaam ?></p></td>
              <?php else: ?>
              <td class="dataNaam"><?php echo $fetuareNaam ?></td>
              <?php endif; ?>

              <?php if ($fetuareBusiness == "10") : ?>
              <td class="uk-text-center data1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.25 8.891l-1.421-1.409-6.105 6.218-3.078-2.937-1.396 1.436 4.5 4.319 7.5-7.627z"/></svg>
              </td>
                <?php else: ?>
              <td class="uk-text-center data1"><?php echo $fetuareBusiness ?></td>
              <?php endif; ?>

              <?php if ($fetuareGroteSomeone  == "10") : ?>
              <td class="uk-text-center data2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.25 8.891l-1.421-1.409-6.105 6.218-3.078-2.937-1.396 1.436 4.5 4.319 7.5-7.627z"/></svg>
                <?php else: ?>
              <td class="uk-text-center data2"><?php echo $fetuareGroteSomeone ?></td>
              <?php endif; ?>
              
            </tr>
      </tbody>
      <?php endforeach; ?>
  </table>
	</div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
<?php while (have_rows('flexible_content')) : the_row(); ?>
<?php if (get_row_layout() == 'testimonial') :
$title = get_sub_field('title');
$berichten = get_sub_field('berichten');

?>
<section class="uk-section testimonials rounded" id="cdc">
  <div class="uk-position-absolute background-top" style="background-image: url(@asset('images/background-top.png'));"></div>
	<div class="uk-position-absolute background-bottom" style="background-image: url(@asset('images/background-bottom.png'));"></div>
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
			<img data-src="@asset('images/phonex.png')" uk-img />
		</div>
	</div>
</section>

<section class="uk-section testimonials rounded" id="cdcMobile">
  <div class="uk-position-absolute background-top" style="background-image: url(@asset('images/background-top.png'));"></div>
	<div class="uk-position-absolute background-bottom" style="background-image: url(@asset('images/background-bottom.png'));"></div>
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
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
<?php while (have_rows('flexible_content')) : the_row(); ?>

<?php if (get_row_layout() == 'meer_fonctionaliteiten_nodig?') :
$title = get_sub_field('title');
$link = get_sub_field('link');
$buttonNaam = get_sub_field('button_naam');
?>
<section class="uk-section gradient register rounded" id="registerHight">
  <div class="uk-container">
    <div class="uk-child-width-expand@s uk-child-width-1-1 uk-margin-large-top uk-margin-large-bottom" uk-grid>
     
      <div class="uk-flex uk-flex-middle uk-text-center">
        <div class="cta-text"><?php echo $title ?><br><img data-src="@asset('images/arrov_meer.png')" alt="" uk-img /><br>
          <a class="uk-button btn-cta uk-margin-top" href="<?php echo $link['url'] ?>"><?php echo $buttonNaam ?></a>
        </div>
      </div>
      
    </div>
  </div>
</section>

<?php endif; ?>

      <?php endwhile; ?>
      <?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
  <?php while (have_rows('flexible_content')) : the_row(); ?>
  <?php if (get_row_layout() == 'map') :
  $map = get_sub_field('map');
  $link = get_sub_field('link');
  ?>
<section>
  <div class="uk-cover-container uk-height-large">
    <a href="<?php echo $link['url']; ?>" target="_blank">
  <img src="<?php echo $map['url']; ?>" alt="" uk-cover>
</a>
  </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


