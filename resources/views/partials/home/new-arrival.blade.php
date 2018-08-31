<section class="new-arrival">
  <div class="container">
    <div class="row">
        <div class="text-center col-12 mb-5">
          <h2 class="d-inline">
            <span class="font-weight-bold">
              @if(is_rtl())
              {{_e('وصل حديثا','ramsco')}}
              @else
              {{_e('New ','ramsco')}}</span>{{_e('Arrivals','ramsco')}}
              @endif
          </h2>
        </div>
        @php
          $args = array(
              'post_type' => 'product',
              'posts_per_page' => 9,
              'suppress_filters' => 0,
            );
          $product = new WP_Query($args);
        @endphp

      <div class="products-slider ">
        @if($product->have_posts())
          @while($product->have_posts())
            @php ($product->the_post())
            <div class="card mb-3 text-center border-0 d-flex align-items-center">
              <div class="slider-img img-fuild" style="background-image:url('{{ get_the_post_thumbnail_url( get_the_ID(), 'latest-product' ) }}')"></div>
              <div class="card-body p-0 d-flex justify-content-center w-100">
                <h5 class="text-capitalize mt-2 card-title">{{ the_title() }}</h5>
              </div>
            </div>
          @endwhile
        @endif
      </div>
    </div>


  </div>

</section>
