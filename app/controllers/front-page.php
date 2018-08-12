<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    /**
    * Function Name: general_slider()
    * This Function is used to handle General Slider in Home Page
    * It returns the values of ACF slider repeater and its sub fields
    * This Function is called in partial/home/slider.blade
    */
    public function generalSlider()
    {
      $slide = [];

        if( have_rows('home_slider','option') ):
          while ( have_rows('home_slider','option') ) : the_row();

            $slide[] = [
              'image'   =>  get_sub_field('image'),
              'highlighted_title'    =>  get_sub_field('highlighted_title'),
              'title'    =>  get_sub_field('title'),
              'content'  =>  get_sub_field('content')
            ];

          endwhile;
        endif;

      return $slide;
    }
}
