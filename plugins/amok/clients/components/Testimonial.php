<?php namespace Amok\Clients\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use Amok\Clients\Models\Testimonial as TestimonialItem;

class Testimonial extends ComponentBase{
  
  /**
   * Array of all available service items
   *
   * @var Array
   */
  public $testimonials;

  public function componentDetails(){
    return [
      'name'  => 'Testimonials',
      'description' => 'Displays all testimonials offered'
    ];
  }

  public function defineProperties(){
    return [
      'max' => [
        'description' => 'The maximum amount of testimonials to display',
        'title'       => 'Max Testimonials',
        'default'     => 3,
        'type'        => 'string',
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'The Max Testimonials value is required and should be an integer.'
      ]
    ];
  }

  public function onRun(){
    $this->testimonials = $this->loadTestimonials();
  }

  protected function loadTestimonials(){
    return TestimonialItem::all();
  }
}

?>