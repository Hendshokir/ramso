{{--
  Template Name: About Us
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())

    <section class="page-content py-md-5 py-4">
      <div class="container about-section">
        <div class="row justify-content-center pb-md-5 pb-3">
          <div class="about-bg w-100" style="background-image:url('{{ get_template_directory_uri().'/assets/images/about-bg2.png' }}')"></div>
          @php( $img = get_field('about_img'))
          @if($img)
          <div class="col-md-4 col-12 order-two">
            <div class="about-img" style="background-image:url('{{ $img }}')"></div>
          </div>
          @endif
          <div class="col-md-5 col-12 order-one">
            <div class="content">
              <div class="title">
              <h4 class="text-uppercase">
                <strong>
                @if(is_rtl())
                {{_e('عن','ramsco')}}
                @else
                {{_e('About','ramsco')}}
                @endif
                </strong>
                {{the_title()}}

              </h4>
              </div><!-- End Title -->

              <div class="descreption">
                @php( $content = new WP_Query( 'pagename=about' ) )
                  @while ( $content->have_posts() ) @php($content->the_post())
                    <span class="d-block mb-3">{{get_the_content() }}</span>
                  @endwhile
                @php(wp_reset_postdata())
              </div><!-- End descreption -->
            </div><!-- End Content -->
          </div>
        </div>
        <div class="row">

          <div class="custom-border col-12">
            @php($border_img = get_template_directory_uri().'/assets/images/border.png')
            <img src="{{ $border_img }}" />
          </div><!-- End Border -->

          <div class="col-12 text-center">
            @php( $mission_desc = get_field('mission_descreption'))
            @if( $mission_desc )
              <h2>

                @if(is_rtl())
                {{_e('المهمة','ramsco')}}
                @else
                {{ _e('Mission','ramsco') }}
                @endif
              </h2>
              <p>{{ $mission_desc }}</p>
            @endif

            @php($vission_desc = get_field('vision_descreption'))
            @if( $mission_desc )
              <h2>
                @if(is_rtl())
                {{_e('الرؤية','ramsco')}}
                @else
                {{ _e('Vission','ramsco') }}
                @endif
              </h2>
              <p>{{ $vission_desc }}</p>
            @endif
          </div>{{-- End Content Col --}}

        </div>
      </div>
    </section>{{-- End Page Content --}}

  @endwhile
@endsection
