<footer>
  <?php
  $title = get_field('title', 'option');
  $text = get_field('text', 'option');
  $navigatie = get_field('navigatie', 'option');
  $contact = get_field('contact', 'option');
  $adres = get_field('adres', 'option');
  $telefoon = get_field('telefoon', 'option');
  $email = get_field('email', 'option');
  $facebook = get_field('facebook', 'option');
  $linkedin = get_field('linkedin', 'option');
  $instagram = get_field('instagram', 'option');
  $privacy = get_field('privacy_link', 'option');
  $voorwaarden = get_field('voorwaarden_link', 'option');
  ?>
  <div class="uk-container ">
		<div class="navigation uk-margin-medium-top uk-margin-medium-bottom">
			<div class="uk-child-width-expand@m" uk-grid>
				<div>
          <h3><?php echo $title; ?></h3>
          <div>
          <?php echo $text; ?>
          </div>
          <div class="uk-container uk-margin-top icons" uk-grid>
            <a  href="<?php echo $facebook['url']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z" fill="#fff"/></svg>
            </a>
            <a class="icon" href="<?php echo $linkedin['url']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" fill="#fff"/></svg>            </a>
            <a class="icon" href="<?php echo $instagram['url']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" fill="#fff"/></svg>            </a>
          </div>
        </div>
        
				<div class="navFooter">
					<div class="uk-container">
						<div>
							<h3><?php echo $navigatie; ?></h3>
							<?php if(has_nav_menu('primary_navigation')): ?>
								<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'uk-list uk-margin-remove']); ?>

							<?php endif; ?>
						</div>
					</div>
        </div>
        
				<div class="contactFooter">
					<h3>Contact</h3>
          <?php echo $adres; ?>
					<br/><br/>
					Tel: <a href="callto:<?php echo $telefoon; ?>"> <?php echo $telefoon; ?></a><br/>
					E-mail: <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a>
				</div>
      </div>
		</div>
  </div>
    <div class="privacy">
      <div class="uk-container">
      <div class="uk-child-width-1-2@m" uk-grid>
        <div class="uk-text-left">??Copyright Checkon</div>
          <div class="uk-text-right" id="voorwaard"><a href="<?php echo $voorwaarden['url']; ?>" target="_blank"> Algemene voorwaarden en privacy statement </a></div> 
      </div>
      </div>
    </div>
</footer>
