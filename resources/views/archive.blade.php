@extends('layouts.app')

@section('content')

  <section class="product-archive py-md-5 py-3">
    <div class="container">
      <div class="row p-md-5 p-3">
        @php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => -1,
        );

        $query = new WP_Query( $args );
        // $pages_count = $query->max_num_pages;
        // var_dump($pages_count);

        @endphp
        @if( $query->have_posts())
          @while( $query->have_posts()) @php( $query->the_post())
            <div class="card mb-3 text-center border-0 col-12 col-sm-6 col-md-4 col-lg-3">

              <div class="card-img-top" style="background-image:url('{{ get_the_post_thumbnail_url( get_the_ID(), 'latest-product' ) }}')" alt="Product Image"></div>
              <div class="card-body">
                <h5 class="card-title">{{ the_title() }}</h5>
                <p class="card-text"> {{ wp_trim_words( get_the_content() , 10, '...' ) }} </p>
              </div>
            </div>
          @endwhile
        @endif


      </div><!-- End Row -->
      {{-- <div>
          {{c95_base_pagination(array(), $query)}}
      </div> --}}

    </div>
  </section><!-- End Product -->

  @if(get_field('gallery_bg'))
  @php($img = get_field('gallery_bg'))
  @else
    @php($img = get_template_directory_uri().'/assets/images/gallery.jpg')
  @endif

<div class="gallery-bg" style="background-image:url('{{ $img }}')"></div>
@endsection
