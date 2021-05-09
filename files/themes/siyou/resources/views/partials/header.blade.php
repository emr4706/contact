<header class="gradientNavbar">
  <nav class="uk-container" uk-navbar>
    <div class="uk-navbar-left">
      <a class="uk-logo" href="{{ home_url('/') }}" aria-label="Home">
        <img width="300" height="46" data-src="@asset('images/logokantoor.png')" alt="Someone" uk-img/>
      </a>
    </div>
    <div class="uk-navbar-right">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'uk-navbar-nav']) !!}
      @endif
    </div>

    <div class="uk-width-auto">
      <div class="mobile-menu">
        <a class="uk-navbar-toggle" href="#offcanvas" uk-toggle>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" fill="#fff"/>
          </svg>
        </a>

        <div id="offcanvas" uk-offcanvas="mode:none; overlay: true">
          <div class="uk-offcanvas-bar">
            <header>
              <div uk-grid>
                <div class="uk-navbar-left">
                  <a class="uk-logo" href="{{ home_url('/') }}" aria-label="Home">
                    <img width="300" height="46" data-src="@asset('images/logokantoor.png')" alt="Someone" uk-img/>
                  </a>
                </div>
                <div class="uk-width-expand close">
                  <button class="uk-offcanvas-close" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path
                        d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"
                        fill="#fff"/>
                    </svg>
                  </button>
                </div>
              </div>
            </header>
            <br>
            <hr>
            <?php
            $telefoon = get_field('telefoon', 'option');
            ?>

            <div class="menu-items uk-flex uk-flex-middle uk-margin-large-top">
              <div>
                @if (has_nav_menu('primary_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'uk-nav']) !!}
                @endif
              </div>
            </div>
            <div class="uk-margin-small-bottom uk-position-bottom belons">
            <a class="uk-button btn-belons" href="callto:<?php echo $telefoon; ?>">
              <i class="icon icon-align icon-phone icon-30"></i>
              Bel Ons</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
