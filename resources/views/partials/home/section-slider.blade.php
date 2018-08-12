<section class="home-slider">

  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner h-100">
      @php($counter=0)
      @if( $general_slider )
        @foreach($general_slider as $slider)
          <div class="carousel-item h-100 {{ $counter == 0 ? 'active' : '' }}" style="background-image:url('{{ $slider['image']['sizes']['large'] }}')">
            <div class="overlay w-100 h-100"></div>
            <div class="carousel-caption d-block py-0">
            <h5><span>{{$slider['highlighted_title']}}</span>{{ $slider['title'] }}</h5>
              <p>{{ $slider['content'] }}</p>
            </div>
          </div>
          @php($counter++)
        @endforeach
      @endif
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
