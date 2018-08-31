{{--
  Template Name: Gallery Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
<div class="gallery-page">
  <section class="container py-5">
      @php
      $highlighted = get_field('gallery_highlighted');
      $title = get_field('gallery_title');
      @endphp
      <div class="text-center mb-md-5 mb-3">
        <h5 class="d-inline"><span class="font-weight-bold">{{$highlighted}}</span> {{ $title }}</h5>
      </div>
      @php
        $gallery = get_field('gallery');
        $images = array(); // Set images array for current page
        $items_per_page  = 9;
        $total_items = count($gallery); // How many items we have in total
        $total_pages = ceil($total_items / $items_per_page); // How many pages we have in total
      @endphp

      @if ( get_query_var( 'paged' ) )
        @php($current_page = get_query_var( 'paged' ))
      @elseif ( get_query_var( 'page' ) )
        @php($current_page = get_query_var( 'page' ))
      @else
        @php($current_page = 1)
      @endif
      @php($starting_point = (($current_page-1)*$items_per_page))

      @if($gallery)
        @php($images = array_slice($gallery,$starting_point,$items_per_page))
      @endif

      @if(!empty($images))
        <ul class="row list-unstyled p-0">
          @foreach( $images as $image )
            <li class="col-md-4 col-sm-6 col-12 px-0 p-1 ">
              <a class="gallery" href="{{ $image['sizes']['large'] }}">
                <div class="image w-100" style="background-image:url('{{ $image['sizes']['large'] }}')"></div>
              </a>
            </li>
          @endforeach
        </ul>
      @endif


      <div class="pagination">
        @php($big = 999999999)
        <?php
        echo paginate_links(array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => $current_page,
          'total' => $total_pages,
          'before_page_number' => '<span class="screen-reader-text">'.__('Page ','ramsco').' </span>'
        ));
        ?>
      </div>
    </section>

     @if(get_field('gallery_bg'))
      @php($img = get_field('gallery_bg'))
      @else
        @php($img = get_template_directory_uri().'/assets/images/gallery.jpg')
      @endif

    <div class="gallery-bg" style="background-image:url('{{ $img }}')"></div>
</div>


  @endwhile
@endsection
