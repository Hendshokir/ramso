{{--
  Template Name: Contact us
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="contact-page">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxX6XxfHxbMhdblbM8x3KlYak3NiynsBs"></script>
    <script type="text/javascript">
    (function($) {
      function new_map( $el ) {
        var $markers = $el.find('.marker');
        var args = {
          zoom		: 16,
          center		: new google.maps.LatLng(0, 0),
          mapTypeId	: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map( $el[0], args);
        map.markers = [];
        $markers.each(function(){
          add_marker( $(this), map );
        });
        center_map( map );
        return map;
      }


      function add_marker( $marker, map ) {
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        // var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

       // var image = '../assets/images/marker.png';
        var marker = new google.maps.Marker({
          position	: latlng,
          map			: map,
          //icon: image
        });
        map.markers.push( marker );
        if( $marker.html() )
        {
          var infowindow = new google.maps.InfoWindow({
            content		: $marker.html()
          });
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
          });
        }
      }

      function center_map( map ) {
        var bounds = new google.maps.LatLngBounds();
        $.each( map.markers, function( i, marker ){
          var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
          bounds.extend( latlng );
        });

        if( map.markers.length == 1 )
        {
          map.setCenter( bounds.getCenter() );
          map.setZoom( 16 );
        }
        else
        {
          map.fitBounds( bounds );
        }
      }
      var map = null;
      $(document).ready(function(){
        $('.acf-map').each(function(){
          map = new_map( $(this) );
        });
      });
    })(jQuery);
    </script>


    @php($location = get_field('map'))
    @if( !empty($location) )
    <div class="acf-map">
      <div class="marker" data-lat="{{ $location['lat'] }}" data-lng="{{ $location['lng'] }}"></div>
    </div>
    @endif

    @php
    $contact_img = get_field('contact_img');
    $contact_default = get_template_directory_uri().'/assets/images/contact.jpg';
    @endphp
    <div class="contact-form" style="background-image:url('{{ ($contact_img)? $contact_img : $contact_default }}')">
      <div class="card form-card col-md-8 col-10 px-0 border-0 m-auto">
        <div class="keep-in-touch py-4 px-md-5 px-4 bg-white">
        <h4 class="text-uppercase">
          @if(is_rtl())
          {{_e('تواصل معنا','ramsco')}}
          @else
          {{_e('Keep in touch','ramsco')}}
          @endif
        </h4>
        <p class="font-weight-bold">
          @if(is_rtl())
          {{_e('معلومات الاتصال','ramsco')}}
          @else
          {{_e('Contact Information','ramsco')}}
          @endif
        </p>
        <div class="details">
          <div class="row">
            <div class="col-md-6 col-12">
              <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    @if(is_rtl())
                    {{_e('العنوان','ramsco')}}
                    @else
                    {{_e('Address','ramsco')}}
                    @endif
                </span>
              </p>
              <p>
                @if(is_rtl())
                {{ the_field('ar_website_address','option') }}
                @else
                {{ the_field('website_address','option') }}
                @endif
              </p>
              <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    @if(is_rtl())
                    {{_e('رقم التليفون','ramsco')}}
                    @else
                    {{_e('Phone','ramsco')}}
                    @endif
                </span>
              </p>
              <p>
                {{ the_field('website_phone','option') }}
              </p>

              <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                    @if(is_rtl())
                    {{_e('البريد الالكتروني','ramsco')}}
                    @else
                    {{_e('Email','ramsco')}}
                    @endif
                </span>
              </p>
              <p>
                {{ the_field('website_email','option') }}
              </p>
            </div>
            @php
            $form_img = get_field('contact_info_img');
            $form_default = get_template_directory_uri().'/assets/images/contact_info.jpg';
            @endphp
            <div class="col-md-6 col-12 form-img" style="background-image:url('{{ ($form_img)? $form_img : $form_default }}')"></div>
          </div>
        </div>

        </div>
        <div class="form px-md-5 px-4">

          @if(is_rtl())
          {!! do_shortcode( '[gravityform id="2" name="" title="true" description="false" ajax="true" ]' ) !!}
          @else
          {!! do_shortcode( '[gravityform id="1" name="" title="true" description="false" ajax="true" ]' ) !!}
          @endif
        </div>
      </div>
    </div>
  </section>
  @endwhile
@endsection
