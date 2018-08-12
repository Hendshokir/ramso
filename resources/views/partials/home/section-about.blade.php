<section class="about-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="about-bg w-100" style="background-image:url('{{ get_template_directory_uri().'/assets/images/about-bg2.png' }}')"></div>
      <div class="col-md-4 col-12 order-two">
          <div class="about-img" style="background-image:url('{{ get_template_directory_uri().'/assets/images/about-img.jpg' }}')"></div>
      </div>
      <div class="col-md-5 col-12 order-one">
        <div class="content">
          <div class="title">
            <span>{{ _e('about','ramsco') }}</span>
            @if(get_field('website_logo','option'))
              <img src="{{ get_field('website_logo','option') }}" alt="Website logo">
            @else
              <img src="{{ get_template_directory_uri().'/assets/images/logo.jpg' }}" alt="Website logo">
            @endif
          </div><!-- End Title -->

          <div class="descreption">
            @php( $content = new WP_Query( 'pagename=about' ) )
              @while ( $content->have_posts() ) @php($content->the_post())

                <span class="d-block mb-3">{{ wp_trim_words(get_the_content(),50) }}</span>
              @endwhile
            @php(wp_reset_postdata())

              <a class="more-btn" href="{{ get_permalink( get_page_by_path( 'about' ) ) }}">{{ _e('read more','ramsco') }}</a>

          </div><!-- End descreption -->

        </div><!-- End Content -->
      </div>
    </div>
  </div>
</section>


@if(get_field('about_img','option'))
  @php($img = get_field('about_img','option'))
@else
  @php($img = get_template_directory_uri().'/assets/images/after-about.png')
@endif
<div style="background-image: url('{{ $img }}')" class="home-background"></div><!-- End Background Image -->


