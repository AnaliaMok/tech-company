<?php namespace Amok\Services\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use Amok\Services\Models\Service as ServiceItem;

class Service extends ComponentBase{

  /**
   * Array of all available service items
   *
   * @var Array
   */
  public $services;

  public function componentDetails(){
    return [
      'name'  => 'Services',
      'description' => 'Displays all services offered'
    ];
  }

  public function defineProperties(){
    return [
      'max' => [
        'description' => 'The maximum amount of services to display',
        'title'       => 'Max Services',
        'default'     => 3,
        'type'        => 'string',
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'The Max Services value is required and should be an integer.'
      ]
    ];
  }

  public function onRun(){
    $this->services = $this->loadServices();
  }

  protected function loadServices(){
    return ServiceItem::all();
  }

}

?>