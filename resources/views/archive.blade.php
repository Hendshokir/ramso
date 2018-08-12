@extends('layouts.app')

@section('content')

  <section class="product-archive py-md-5 py-3">
    <div class="container">
      <div class="row">
        @if(have_posts())
          @while(have_posts()) @php(the_post())
            <div class="card mb-3 text-center border-0 col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="{{ the_permalink() }}">
                <img class="card-img-top" src="{{ get_the_post_thumbnail_url( get_the_ID(), 'latest-product' ) }}" alt="Product Image">
              </a>
              <div class="card-body">
                <a href="{{ the_permalink() }}">
                  <h5 class="card-title">{{ the_title() }}</h5>
                </a>
                <p class="card-text"> {{ wp_trim_words( get_the_content() , 15, '...' ) }} </p>
              </div>
            </div>
          @endwhile
        @endif
      </div><!-- End Row -->

    </div>
  </section><!-- End Product -->

  <div style="background-image: url(' {{ get_template_directory_uri().'/assets/images/logo.png' }} ')" class="footer-image"></div><!-- End Background Image -->

@endsection
