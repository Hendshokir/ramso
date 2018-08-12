<footer class="pt-md-5 pt-2">
  <div class="container">
    <div class="row justify-content-center pb-md-5 pb-2">

      @if (has_nav_menu('footer_navigation'))
        <div class="mb-3 mb-sm-0 px-3 px-sm-0 col-md-3 col-sm-4 col-12">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav menu-footer list-group ']) !!}
        </div>
      @endif

      <div class=" col-sm-4 col-12">
        <span class="text-capitalize font-weight-bold">{{ _e('newsletter','ramsco') }}</span>
        <p>{{ _e('subscribe to greenolic newsletter to know our products updates, special offers and news','ramsco') }}</p>
        <div>
          <label class="sr-only" for="inlineFormInputGroup">Email</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control border-0" id="inlineFormInputGroup" placeholder="Username">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-5 col-sm-4 col-12">
        <span class="text-capitalize font-weight-bold">{{ _e('contact us','ramsco') }}</span>
        <p>{{ the_field('website_address','option') }}</p>
        <p>{{ the_field('website_email','option') }}</p>
        <p>{{ the_field('website_phone','option') }}</p>
      </div>

    </div>
  </div>
  <section class="copyright pt-3">
    <div class="container">
      <div class="row align-items-center justify-content-between col-10 px-md-0 px-3">
        <p class="copy-right">{{ get_field('copyright','option') }}</p>
        @php($site_social = get_field('social_networks','option'))
        @if($site_social)
          <div class="site-social text-center mb-3">
            <span class="text-capitalize">{{ _e('our social media','ramsco') }}</span>
            @foreach ($site_social as $social)
            <a class="" href="{{ $social['icon_link'] }}" title="{{ _e('Social Media', 'ramsco') }}" target="_blank">
              @if($social['icon_name'] == 'Facebook')
              <i class="fa fa-facebook"></i>
              @elseif($social['icon_name'] == 'Twitter')
              <i class="fa fa-twitter"></i>
              @elseif($social['icon_name'] == 'Youtube')
              <i class="fa fa-youtube"></i>
              @elseif($social['icon_name'] == 'Instagram')
              <i class="fa fa-instagram"></i>
              @endif
            </a>
            @endforeach
          </div>
        @endif <!-- End Social Media -->

      </div>
    </div>
  </section>
</footer>
