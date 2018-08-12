<div class="custom-border col-11 mx-auto">
  @php($border_img = get_template_directory_uri().'/assets/images/border.png')
  <img src="{{ $border_img }}" />
</div>
<section class="latest-news">
  @php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'suppress_filters' => 0,
      );
    $post = new WP_Query($args);
  @endphp

  @if($post->have_posts())
  <h2 class="text-center mb-4"><span class="font-weight-bold">{{_e('Latest','ramsco')}}</span>{{_e(' News','ramsco')}}</h2>
    @while($post->have_posts())
      @php ($post->the_post())

      @php
      $video = get_field('news_video_link');
      $poster = get_field('news_poster');
      @endphp

      @if($video)
      <div class="embed-container video">
        <div class="video h-100">{!! $video !!}</div>
        <div class="poster d-flex justify-content-center h-100" style="background-image:url('{{ ($poster) ? $poster : Utilities::resources_path('/assets/images/poster.png')}} ')">
          <img class="img-fluid play-icon" src="{!! Utilities::resources_path('/assets/images/play-icon.png') !!}" alt="" />
          <span class"instruction">{{_e('Click to play video','ramsco')}}</span>
        </div>
      </div>
      @endif

      <span class="content col-md-7 col-10 mx-auto d-block text-center">{{ wp_trim_words(get_the_content(),50) }}</span>
    @endwhile
  @endif
</section>

<section class="best-selling">
  @if(get_field('best_selling','option'))
  @php($img = get_field('best_selling','option'))
  @else
    @php($img = get_template_directory_uri().'/assets/images/best.jpg')
  @endif
  <div style="background-image: url('{{ $img }}')" class="selling-background col-lg-8 col-sm-10 m-auto"></div><!-- End Background Image -->
</section>
