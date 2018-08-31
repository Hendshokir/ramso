<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between align-items-center row pl-md-0 pr-md-0">

      @if(is_rtl())
      @php($home= home_url('/ar/'))
      @else
      @php($home= home_url('/'))
      @endif
      <a class="navbar-brand p-0" href="{{ $home }}">
        @if(get_field('website_logo','option'))
          <img src="{{ get_field('website_logo','option') }}" class="img-fluid" alt="ramsco">
        @else
          <img src="{{ get_template_directory_uri().'/assets/images/logo.png' }}" class="img-fluid" alt="ramsco">
        @endif
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif

        @php($site_social = get_field('social_networks','option'))
        @if($site_social)
          <div class="site-social text-center">
            @foreach ($site_social as $social)
            <a class="" href="{{ $social['icon_link'] }}" title="{{ _e('Social Media', 'ramsco') }}" target="_blank">
              @if($social['icon_name'] == 'Facebook') <i class="fa fa-facebook"></i>
              @elseif($social['icon_name'] == 'Instagram') <i class="fa fa-instagram"></i>
              @elseif($social['icon_name'] == 'Twitter') <i class="fa fa-twitter "></i>@endif
            </a>
            @endforeach
          </div>
        @endif
      </div>
    </nav>
  </div>
</header>
