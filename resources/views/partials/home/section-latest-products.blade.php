<section class="latest-product">
  <div class="container">
    <div class="row justify-content-center">

      @php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3,
            'suppress_filters' => 0,
            'meta_query' => array(
              array(
                'key' => 'c95_post_views_count',
                'value' => 5,
                'type' => 'NUMERIC',
                'compare' => '>=',
              ),
            ),
          );
        $product = new WP_Query($args);
      @endphp

      @if($product->have_posts())
        @while($product->have_posts())
          @php ($product->the_post())
          <div class="card mb-3 text-center border-0 col-sm-4 col-8">
            <a href="{{the_permalink()}}" class="card-img-top img-fuild" style="background-image:url('{{ get_the_post_thumbnail_url( get_the_ID(), 'latest-product' ) }}')" alt="{{ the_title() }}"></a>
            <div class="card-body p-0 d-flex justify-content-center w-100">
              <a href="{{the_permalink()}}"><h5 class="text-uppercase text-white card-title">{{ the_title() }}</h5></a>
            </div>
          </div>
        @endwhile
      @endif

      <div class="archive-link col-12 d-flex justify-content-center">
        <a href="{{ get_post_type_archive_link( 'product' ) }}">{{ _e('View Products','ramsco') }}</a>
      </div>

    </div>
  </div>
  <div class="custom-border col-11 mx-auto">
    @php($border_img = get_template_directory_uri().'/assets/images/border.png')
    <img src="{{ $border_img }}" />
  </div>
</section>
<!-- End Product Section -->
